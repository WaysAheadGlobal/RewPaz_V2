<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Employer;
use App\Models\Notification;
use App\Models\Transaction_detail;
use App\Models\Token_use;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Stripe;
class EmployerController extends Controller
{
    //

    public function register(){
        try{
            return view('employer.signup');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function login()
    {
        if(Auth::check() && Auth::user()->status==1)
        {
            return redirect()->route('employer.dashboard');
        }
        return view('employer.login');

    }
    public function emprRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'company_name' => 'required',
            'company_size' => 'required',
            'job_role' => 'required',
            'company_licence' => 'required',
            'email' => 'required|email|unique:users,email,except,id',
            'phone' => 'required|numeric|unique:employers,phone',
            'is_agree' => 'required',
            /*'otp1' => 'required',
            'otp2' => 'required',
            'otp3' => 'required',
            'otp4' => 'required',*/
            ],
            [
            'is_agree.required' => 'Please check this box',
            /*'otp1.required' => 'OTP is required',
            'otp2.required' => 'OTP is required',
            'otp3.required' => 'OTP is required',
            'otp4.required' => 'OTP is required',*/
            ]
        );

        $CompName = $request->company_name;
        $CompNameAbbr = '';
        foreach (explode(' ', $CompName) as $word){
            $CompNameAbbr .= strtoupper($word[0]);
        }
        $CompUniqueCode = $CompNameAbbr.mt_rand(10000, 99999);

        $user = new User();
        $user->otp   = bcrypt('1234');
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->c_code = $request->c_code;
        $user->phone = $request->phone;
        $user->role  = 'Employer';
        $user->unique_company_code= $CompUniqueCode;
        $user->uid = Str::uuid();
        $user->is_agree = $request->is_agree;
        //dd($user);
        $user->save();
        $result= $user->id;
        //  dd($result);

        if($result){

            $photoId="";
            if($request->file('company_licence') !=''){
                $photoId = time()."_comp_linc.".$request->file('company_licence')->getClientOriginalExtension();
                $request->file('company_licence')->storeAs('upload/emp-doc',$photoId);
            }

            $employer = new Employer();
            $employer->user_id = $result;
            $employer->company_name = $request->company_name;
            $employer->company_size =  $request->company_size;
            $employer->company_licence = $photoId;
            $employer->job_role = $request->job_role;
            $res=$employer->save();

            if($res)
            {
               // echo "now subscribe";
               return redirect()->route('employer.login')->with('success', '!! Employer registration successfully done !!');
            }


            //  return redirect('professional/vetting/'.$result)->with('success', 'Professional Registration Successfully');
        }else{
            return back()->with('error', 'Oops! Something went wrong!');
        }
    }

    public function emprLogin(Request $request){

        $request->validate([
            'phone'         => 'required|numeric|exists:users,phone',
            'otp1'          => 'required',
            'otp2'          => 'required',
            'otp3'          => 'required',
            'otp4'          => 'required',

        ],
    [
        'otp1.required' => 'OTP is required',
            'otp2.required' => 'OTP is required',
            'otp3.required' => 'OTP is required',
            'otp4.required' => 'OTP is required',
    ]);

        $user_given_otp = $request->{'otp1'}.$request->{'otp2'}.$request->{'otp3'}.$request->{'otp4'};
        //dd($user_given_otp);
        $user = User::where('phone', $request->phone)->where('role', 'Employer')->count();
        //  dd($user);
        if($user > 0){
            $verifiedUser = User::where('phone', $request->phone)->first();

            if (Hash::check($user_given_otp, $verifiedUser->otp))
            {
                // echo "yes";
                Auth::login($verifiedUser);
                if(auth()->user()->status == 1){
                    $notification= new Notification();
                    $notification->sender_id = Auth::user()->id;
                    //$notification->reciver_id = $res->id;
                    $notification->title = 'Employer Login';
                    $notification->msg = Auth::user()->name.' (Employer) is recently  login !!';
                    //$notification->row = $insertedUserId;
                    $notification->userType = 'Employer';
                    $notification->uuid = Str::uuid();
                    $notification->save();
                    return redirect()->route('employer.dashboard');
                }else{
                  // echo "Subscribe a plan";
                  // return auth()->user()->uid;
                    return redirect('employer/subcription/'.$verifiedUser->uid)->with('success', 'Employer logged in');
                }
            }else{
                return back()->with('error','Oops! OTP is incorrect!!');
            }
        }else{
            return back()->with('error','Oops! No user exist with this Email!');
        }
    }
    public function subscribe_plan($uid)
    {
        $result = User::where('uid', $uid)->first();
        $Plans = DB::table('subscription_plans')->get()->toArray();
        return view('employer.subscription',compact('result','Plans'));
    }

    public function trans_plan($slug,$uid)
    {
        $result = User::where('uid', $uid)->first();
       // dd($result);
        $plan = config('global.plans.'.request()->segment(3));
      //  dd($plan);
        return view('employer.payment',compact('result', 'plan'));
    }

    public function trans_save(Request $request)
    {
        try{
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $Payment = Stripe\Charge::create ([
            "amount" => $request->Amount*100,
            "currency" => env('Currency'),
            "source" => $request->stripeToken,
            "description" => $request->plan_id
        ]);
        if($Payment['status']=='succeeded' && $Payment['captured']=='1'){
            $plan_id = $request->plan_id;
            if(isset($Payment->id))
            {
                $planDetails  = DB::table('subscription_plans')->where('id',$Payment->description)->first();

                $uid = $request->uid;
                $trans = new Transaction_detail();
                $trans->user_id     = $request->user_id;
                $trans->plan_id     = $request->plan_id;
                $trans->plan_name   = $planDetails->name;
                $trans->plan_amt    = $planDetails->price;
                $trans->plan_description  = $planDetails->token;
                $trans->amount      = $planDetails->price;
                $trans->payment_status  = '1';

                $result=$trans->save();

                 $data = array(
                    'approved'=> '1',
                    'status' => '1',
                    'tokens' => $planDetails->token,
                    'left_tokens' => $planDetails->token,
                    );

                $res= User::where('id',$request->user_id)->update($data);
                return redirect('transaction/success/'.$uid);
            }
        }
      } catch (\Exception $ex) {
            //return back()->with('error',$ex->getMessage());
             return redirect('transaction/unsuccess/'.$uid);
        }

    }
    public function trans_succ($uid)
    {
        $result = User::where('uid', $uid)->first();
        return view('employer.payment_success', compact('result'));
    }

    public function trans_unsucc($uid)
    {
        $result = User::where('uid', $uid)->first();
        return view('employer.payment_unsuccess', compact('result'));
    }

    public function dashboard()
    {
        $id = Auth::user()->id;
        /**this week */
        $startDate = Carbon::now()->startOfWeek();
        $endDate = Carbon::now()->endOfWeek();

        /**next week */
        $startOfNextWeek = Carbon::now()->startOfWeek()->addWeek();
        $endOfNextWeek = Carbon::now()->endOfWeek()->addWeek();
        //dd($endOfNextWeek);
        //  echo "hello prabhat";
        $result = User::where('users.id', $id)->join('employers', 'employers.user_id', '=', 'users.id')->first();
        $total_emp=User::where('role', 'Employee')->where('unique_company_code', Auth::user()->unique_company_code)
                        ->count();
        $active_emp=User::where('role', 'Employee')->where('unique_company_code', Auth::user()->unique_company_code)
                        ->where('status','1')->count();
        $session=User::where('role', 'Employee')
                        ->where('users.unique_company_code', Auth::user()->unique_company_code)
                        ->whereBetween('appointmentDate', [$startDate, $endDate])
                        ->join('appointments', 'appointments.created_by', '=', 'users.id')
                        ->count();
        $session_next=User::where('users.role', 'Employee')
                        ->where('users.unique_company_code', Auth::user()->unique_company_code)
                        ->whereBetween('appointmentDate', [$startOfNextWeek, $endOfNextWeek])
                        ->join('appointments', 'appointments.created_by', '=', 'users.id')
                        ->count();

        // $total_token=User::where('role', 'Employee')->count();
        // $left_token=User::where('role', 'Employee')->count();
        //dd($result);
        return view('employer.dashboard', compact('result','total_emp','active_emp','session_next','session'));
    }
    public function profile(){
        $result= User::where('users.id', Auth::user()->id)->join('employers', 'employers.user_id','=','users.id')
        ->get()->first();
        //echo "<pre>"; print_r($result); die;
        $user= User::where('users.id', Auth::user()->id)->first();
        return view('employer.profile', compact('result','user'));
    }

    public function profile_update(Request $request)
    {
        $request->validate([
            'company_domain'          => 'required',
            'company_registration_no'     => 'required',
            'company_license_no'          => 'required',
            'no_of_employee'          => 'required',
            'company_phone'          => 'required',
            'company_address'          => 'required',
        ]);
       // echo "<pre>"; print_r($request->all());; die;
        $profilePic="";
        if($request->file('profile_pic') !=''){
            $profilePic = time()."_profile.".$request->file('profile_pic')->getClientOriginalExtension();
            $request->file('profile_pic')->storeAs('upload/prof-doc',$profilePic);
        }
        $res1=User::where('id',Auth::user()->id)->update(['name'=>$request->name,'profile_pic'=>$profilePic]);
        $res2=Employer::where('user_id',Auth::user()->id)->update(['job_role'=>$request->job_role,'company_domain'=>$request->company_domain,'company_registration_no'=>$request->company_registration_no,'company_license_no'=>$request->company_license_no,'company_phone'=>$request->company_phone,'company_address'=>$request->company_address,'no_of_employee'=>$request->no_of_employee]);
        if($res1 && $res2)
        {
            return redirect()->back()->with('success', '!! Profile is updated successfully !!');
        }
    }
    public function notification(){
        $result= User::where('users.id', Auth::user()->id)->join('notifications', 'notifications.reciver_id','=','users.id')
        ->orderBy('notifications.id','desc')->get();
        return view('employer.notifications', compact('result'));
    }
    public function subscription()
    {
        $id = Auth::user()->id;
        $result = User::where('users.id', $id)->join('transaction_details', 'transaction_details.user_id', '=', 'users.id')->first();
        return view('employer.subscription-dash', compact('result'));
    }
    public function PaymentPage($PID)
    {
        $id = Auth::user()->id;
        $result = DB::table('subscription_plans')->where('id',$PID)->first();
        return view('employer.PaymentPage', compact('result'));
    }
    public function CheckOrderStatus()
    {
        $Result = array();
        $Result['status'] = '1';
        $Result['ErrorMsg'] = '1';
        return json_encode($Result);
    }
    public function CreateOrder(Request $request)
    {
        try{
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $Payment = Stripe\Charge::create ([
            "amount" => $request->Amount*100,
            "currency" => env('Currency'),
            "source" => $request->stripeToken,
            "description" => $request->plan_id
        ]);
        if($Payment['status']=='succeeded' && $Payment['captured']=='1'){
            $plan_id = $request->plan_id;
            if(isset($Payment->id))
            {
                $SubDetails = array();
                $SubDetails['user_id'] = Auth::user()->id;
                $SubDetails['plan_id'] = $Payment->description;
                $planDetails  = DB::table('subscription_plans')->where('id',$Payment->description)->first();
                $SubDetails['plan_name'] = $planDetails->name;
                $SubDetails['plan_amt'] = $planDetails->price;
                $SubDetails['plan_description'] = $planDetails->token;
                $SubDetails['receipt_url'] = $Payment->receipt_url;
                $SubDetails['transaction_id'] = $Payment->balance_transaction;
                $SubDetails['status'] = 1;
                $SubDetails['payment_status'] = 1;
                $SubDetails['amount'] = $Payment->amount/100;

                $order_id = DB::table('transaction_details')->insertGetId($SubDetails);
                return redirect()->route('employer.subscription')->with('success', '!! Plan Subscribed successfully !!');
            }
        }
      } catch (\Exception $ex) {
            //return back()->with('error',$ex->getMessage());
             return redirect()->route('employer.subscription')->with('error', $ex->getMessage());
        }
    }
    public function subscription_plan()
    {
        $id = Auth::user()->id;
        $result = DB::table('subscription_plans')->get();
        return view('employer.subscription-plan', compact('result'));
    }
    public function index()
    {
        $id = Auth::user()->id;
        $result = User::where('users.id', $id)->join('employers', 'employers.user_id', '=', 'users.id')->get()->first();
        return view('employer.index', compact('result'));
    }

    public function blog()
    {
        // $id = Auth::user()->id;
        // $result = User::where('users.id', $id)->join('employees', 'employees.user_id', '=', 'users.id')->get()->first();
        // return view('employee.index', compact('result'));
        return view('employer.blog');
    }
    public function community()
    {
        // $id = Auth::user()->id;
        // $result = User::where('users.id', $id)->join('employees', 'employees.user_id', '=', 'users.id')->get()->first();
        // return view('employee.index', compact('result'));
        return view('employer.community');
    }
    public function add_emp()
    {
        $id = Auth::user()->id;
        $result = User::where('users.id', $id)->join('employers', 'employers.user_id', '=', 'users.id')->get()->first();
        $employees = User::where('users.role','Employee')->join('token_uses', 'token_uses.user_id', '=', 'users.id')->where('users.unique_company_code',Auth::user()->unique_company_code)->select('users.*','token_uses.revoke')->get();
        $departments = DB::table('departments')->orderBy('id','ASC')->get();
        /*echo "<pre>";
        print_r($departments);
        exit();*/
        return view('employer.addemp', compact('result','employees','departments'));
    }

    public function save_emp(Request $request)
    {
       // dd($request->all());
       $request->validate(
            [
                'emp_name'       => 'required',
                'emp_code'       => 'required',
                'emp_email'      => 'required|email|unique:users,email',
                'emp_c_code'     => 'required',
                'emp_phone'      => 'required|numeric|unique:users,phone',
                'token'          => 'required',
                'emp_department' => 'required',
            ],
            [
                'emp_name.required' => 'Employee name is required',
                'emp_code.required' => 'Employee code is required',
            ]
        );


        $CompCode = $request->unique_company_code;
        $EmpUniqueCode = $CompCode.'-'.mt_rand(1000, 9999);

        $user = new User();
        $user->name  = $request->emp_name;
        $user->email = $request->emp_email;
        $user->c_code = $request->emp_c_code;
        $user->phone = $request->emp_phone;
        $user->employee_id = $request->emp_code;
        $user->role  = 'Employee';
        $user->unique_company_code= $CompCode;
        $user->tokens= $request->token;
        $user->departments= $request->emp_department;
        $user->unique_refferal_code= $EmpUniqueCode;
        $user->uid= Str::uuid();
        $user->save();
        $result=$user->id;
        if($result){
            //$link = redirect('signup/employee');
           // dd($link);
            $token = new Token_use();
            $token->user_id= $result;
            $token->unique_company_code = $CompCode;
            $token->tokens = $request->token;
            $token->expire_at = date('Y-m-d', strtotime("+30 days"));
            $token->save();


                //// token left
            $tkn = Auth::user()->left_tokens - $request->token;
            User::where('id',Auth::user()->id)->update(['left_tokens'=>$tkn]);

            $data=array(
                'msg' => 'We are pleased to extend an invitation to join RewPaz Solutions Inc. We hope this message finds you well.',
                'msg2' =>  'To complete your registration, please use the provided details below:',
                'name'=> $request->emp_name,
                'email'=> $request->emp_email,
                'referral' => $EmpUniqueCode,
                'c_code' => $request->emp_c_code,
                'emp_phone' => $request->emp_phone,
                'emp_code' => $request->emp_code,
                'company_name' => $request->company_name,
                'company_email' => $request->company_email,

                'link'=>'https://rewpaz.waysdatalabs.com/signup/employee',

                'msg3' =>'If you have any questions or encounter any issues during the registration process, please dont hesitate to contact us at '.Auth::user()->email,

                'msg4' =>'Once again, congratulations on join us at RewPaz Solutions Inc. We look forward to having you on board.',


            );
           // $user['to']='tech@waysaheadglobal.com';
            $user['to']=$request->emp_email;
            Mail::send('emailtemplates.invitation',$data,function($message) use ($user){
                $message->to($user['to']);
                $message->subject('Employee Details for registration.');
            });
            $notification= new Notification();
            $notification->sender_id = Auth::user()->id;
            $notification->reciver_id = $result;
            $notification->title = 'Employee Added';
            $notification->msg = $request->company_name.' is added new employee '.$request->emp_name.' !!';
            //$notification->row = $insertedUserId;
            $notification->userType = 'Employer';
            $notification->uuid = Str::uuid();;
            $notification->save();

            return redirect()->back()->with('success', '!! Successfully, employee is added !!' );
        }



    }

    function tokens_sent(Request $request)
    {
        $uid= $request->uid;
        $result= User::where('uid', $uid)->get()->first();
        if($result){
            User::where('uid',$uid)->update(['tokens'=>$request->token]);
            $token = new Token_use();
            $token->user_id= $result->id;
            $token->unique_company_code = $result->unique_company_code;
            $token->tokens = $request->token;
            $token->expire_at = date('Y-m-d', strtotime("+30 days"));
            $token->save();



            //// token left
            $tkn = Auth::user()->left_tokens - $request->token;
            User::where('id',Auth::user()->id)->update(['left_tokens'=>$tkn]);
            $res=User::where('users.id',Auth::user()->id)->join('employers','employers.user_id','=','users.id')->first();
            $data=array(
                'msg' => 'Regards for the day, now you can check that we have approved your credit request.',
                'name'=> $res->company_name,
                'email'=> $result->email,
                'token'=> $request->token,
                'emp_code'=> $result->unique_company_code,
                'company'=>$res->company_name,

            );
            $user['to']=$result->email;
            Mail::send('emailtemplates.approved-token',$data,function($message) use ($user){
                $message->to($user['to']);
                $message->subject('Credit Request Approved');
            });

            $notification= new Notification();
            $notification->sender_id = Auth::user()->id;
            $notification->reciver_id = $result->id;
            $notification->title = 'Employee Added';
            $notification->msg = $res->company_name.'(employer) is added credit to '.$result->name.'(employee) !!';
            //$notification->row = $insertedUserId;
            $notification->userType = 'Employer';
            $notification->uuid = Str::uuid();;
            $notification->save();

            return redirect('employer/addemp')->with('success', '!! Successfully, credit is added & mail sent !!' );

        }

    }
    function empUpdate(Request $request)
    {
        $uid= $request->uid;
        $result= User::where('uid', $uid)->get()->first();
        if($result){
            $Array = array();
            $Array['employee_id'] = $request->emp_code;
            $Array['name'] = $request->emp_name;
            $Array['email'] = $request->emp_email;
            $Array['c_code'] = $request->emp_c_code;
            $Array['phone'] = $request->emp_phone;
            $Array['departments'] = $request->emp_departments;
            User::where('uid',$uid)->update($Array);
            return redirect('employer/addemp')->with('success', '!! Successfully, profile edit !!' );

        }

    }
    public function EmployeeStatus(Request $request){
        $EmployeeID = '';
        $EmployeeStatus = '';
        if ($request->has('EmployeeID')) {
           $EmployeeID = $request->input('EmployeeID');
        }
        if ($request->has('EmployeeStatus')) {
           $EmployeeStatus = $request->input('EmployeeStatus');
        }

        if($EmployeeStatus!='' && $EmployeeID!='')
        {
            DB::table('users')->where('id',$EmployeeID)->update(['status'=>$EmployeeStatus]);
            if($EmployeeStatus==1)
            {
                DB::table('token_uses')->where('user_id',$EmployeeID)->update(['revoke'=>1]);
            }
            else
            {
                DB::table('token_uses')->where('user_id',$EmployeeID)->update(['revoke'=>0]);
            }
            return redirect('employer/addemp')->with('success', '!! Successfully, Status Changed !!' );
        }
        else
        {
            return redirect('employer/addemp')->with('danger', '!! Something went wrong!!' );
        }

    }
     public function EmployeeTokenRevoke(Request $request){

        $EmployeeID = '';
        if ($request->has('EmployeeID')) {
           $EmployeeID = $request->input('EmployeeID');
        }
        //echo $EmployeeID; die;
        if($EmployeeID!='')
        {
            DB::table('users')->where('id',$EmployeeID)->update(['status'=>0]);
            DB::table('token_uses')->where('user_id',$EmployeeID)->update(['revoke'=>1]);

            $GetRemainTokens = DB::table('token_uses')->where('user_id',$EmployeeID)->first();
            //echo "<pre>"; print_r($GetRemainTokens); die;
            if(!empty($GetRemainTokens))
            {
                $id = Auth::user()->id;
                $AvailableToken = $GetRemainTokens->tokens - $GetRemainTokens->used_token;
                $Tokens = DB::table('users')->where('id',$id)->first();
                $Remain = $Tokens->left_tokens + $AvailableToken;
                //echo $Remain; die;
                DB::table('users')->where('id',$id)->update(['left_tokens'=>$Remain]);
            }
            return redirect('employer/addemp')->with('success', '!! Successfully, Revoked !!' );
        }
        else
        {
            return redirect('employer/addemp')->with('danger', '!! Something went wrong!!' );
        }

    }
    public function TokenUtilization()
    {
        $id = Auth::user()->id;
        $CompanyDetails = DB::table('users')->where('id',$id)->where('role','Employer')->first();
        $CompUniqueCode = $CompanyDetails->unique_company_code;
        $TokenUtilization = DB::table('token_uses as tu')
                        ->join('users as u','u.id','tu.user_id')
                        ->join('appointments as a','a.id','tu.appointment_id')
                        ->join('users as up','up.id','a.professional_id')
                        ->where('tu.unique_company_code',$CompUniqueCode)
                        ->where('tu.appointment_id','!=','')
                        ->where('tu.revoke','!=',1)
                        ->select('tu.user_id','tu.appointment_id','u.name as username','up.name as professional','tu.created_at as date','tu.tokens','tu.used_token')
                        ->get()
                        ->toArray();
        //echo "<pre>"; print_r($TokenUtilization); die;
        return view('employer.TokenUtilization', compact('TokenUtilization'));
    }
    public function GetTokenUtilization(Request $request)
    {
        $Data = $request->all();
        $Date = $Data['Date'];
        $id = Auth::user()->id;
        $CompanyDetails = DB::table('users')->where('id',$id)->where('role','Employer')->first();
        $CompUniqueCode = $CompanyDetails->unique_company_code;
        $Token = DB::table('token_uses as tu')
                        ->join('users as u','u.id','tu.user_id')
                        ->join('appointments as a','a.id','tu.appointment_id')
                        ->join('users as up','up.id','a.professional_id')
                        ->where('tu.unique_company_code',$CompUniqueCode)
                        ->where('tu.appointment_id','!=','')
                        ->where('tu.revoke','!=',1);
        if($Date!="")
        {
            $From = $Date.' 00:00:00';
            $To = $Date.' 23:23:59';
            $Token->whereBetween('tu.created_at',[$From,$To]);
        }
        $Token->select('tu.user_id','tu.appointment_id','u.name as username','up.name as professional','tu.created_at as date','tu.tokens','tu.used_token');
        $TokenUtilization  = $Token->get()
                        ->toArray();
        if(!empty($TokenUtilization))
        {
            foreach($TokenUtilization as $emp)
            {
                ?>
                <div class="brd_btm">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="frm_grp">
                                <label for="">Employee Name</label>
                                <div class="data_txt"><?php echo $emp->username; ?></div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="frm_grp">
                                <label for="">Professional Name </label>
                                <div class="data_txt"><?php echo $emp->professional; ?></div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="frm_grp">
                                <label for="">Credit Used</label>
                                <div class="data_txt"><?php echo $emp->used_token;?></div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="list_tk">
                                <div class="frm_grp">
                                    <label for="">Utilization On</label>
                                    <div class="data_txt"><?php echo $emp->date;?></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        else
        {
             ?>
                <div class="brd_btm">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="frm_grp">
                                <label for="">Employee Name</label>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="frm_grp">
                                <label for="">Professional Name </label>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="frm_grp">
                                <label for="">Credit Used</label>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="list_tk">
                                <div class="frm_grp">
                                    <label for="">Utilization On</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="list_tk">
                                <div class="frm_grp">
                                    <label for="">No Record Found</label>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
        }
        exit();
    }
    public function TokenRequested()
    {
        $id = Auth::user()->id;
        $CompanyDetails = DB::table('users')->where('id',$id)->where('role','Employer')->first();
        $CompUniqueCode = $CompanyDetails->unique_company_code;
        $TokenRequested = DB::table('token_uses as tu')
                        ->join('users as u','u.id','tu.user_id')
                        ->where('tu.unique_company_code',$CompUniqueCode)
                        ->where('tu.request_token','!=','')
                        ->where('tu.request_token','!=',0)
                        ->select('tu.user_id','u.name as username','tu.created_at as date')
                        ->get()
                        ->toArray();

        return view('employer.TokenRequested', compact('TokenRequested'));
    }
    public function GetTokenRequested(Request $request)
    {
        $Data = $request->all();
        $Date = $Data['Date'];
        $id = Auth::user()->id;
        $CompanyDetails = DB::table('users')->where('id',$id)->where('role','Employer')->first();
        $CompUniqueCode = $CompanyDetails->unique_company_code;
        $Token = DB::table('token_uses as tu')
                        ->join('users as u','u.id','tu.user_id')
                        ->where('tu.unique_company_code',$CompUniqueCode)
                        ->where('tu.request_token','!=','')
                        ->where('tu.request_token','!=',0);
        if($Date!="")
        {
            $From = $Date.' 00:00:00';
            $To = $Date.' 23:23:59';
            $Token->whereBetween('tu.created_at',[$From,$To]);
        }
        $Token->select('tu.user_id','u.name as username','tu.created_at as date');
        $TokenUtilization  = $Token->get()
                        ->toArray();
        if(!empty($TokenUtilization))
        {
            foreach($TokenUtilization as $emp)
            {
                ?>
                <div class="brd_btm">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="frm_grp">
                                <label for="">Employee Name</label>
                                <div class="data_txt"><?php echo $emp->username; ?></div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="list_tk">
                                <div class="frm_grp">
                                    <label for="">Requested On</label>
                                    <div class="data_txt"><?php echo $emp->date;?></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        else
        {
             ?>
                <div class="brd_btm">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="frm_grp">
                                <label for="">Employee Name</label>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="list_tk">
                                <div class="frm_grp">
                                    <label for="">Requested On</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="list_tk">
                                <div class="frm_grp">
                                    <label for="">No Record Found</label>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
        }
        exit();
    }
    public function TokenAssigned()
    {
        $id = Auth::user()->id;
        $CompanyDetails = DB::table('users')->where('id',$id)->where('role','Employer')->first();
        $CompUniqueCode = $CompanyDetails->unique_company_code;
        $TokenAssigned = DB::table('token_uses as tu')
                        ->join('users as u','u.id','tu.user_id')
                        ->where('tu.unique_company_code',$CompUniqueCode)
                        ->where('tu.tokens','!=','')
                        ->where('tu.tokens','!=',0)
                        ->where('tu.revoke',0)
                        ->select('tu.user_id','tu.tokens','u.name as username','tu.created_at as date')
                        ->get()
                        ->toArray();

        return view('employer.TokenAssigned', compact('TokenAssigned'));
    }
    public function GetTokenAssigned(Request $request)
    {
        $Data = $request->all();
        $Date = $Data['Date'];
        $id = Auth::user()->id;
        $CompanyDetails = DB::table('users')->where('id',$id)->where('role','Employer')->first();
        $CompUniqueCode = $CompanyDetails->unique_company_code;
        $Token = DB::table('token_uses as tu')
                        ->join('users as u','u.id','tu.user_id')
                        ->where('tu.unique_company_code',$CompUniqueCode)
                        ->where('tu.tokens','!=','')
                        ->where('tu.tokens','!=',0)
                        ->where('tu.revoke',0);
        if($Date!="")
        {
            $From = $Date.' 00:00:00';
            $To = $Date.' 23:23:59';
            $Token->whereBetween('tu.created_at',[$From,$To]);
        }
        $Token->select('tu.user_id','tu.tokens','u.name as username','tu.created_at as date');
        $TokenUtilization  = $Token->get()
                        ->toArray();
        if(!empty($TokenUtilization))
        {
            foreach($TokenUtilization as $emp)
            {
                ?>
                <div class="brd_btm">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="frm_grp">
                                <label for="">Employee Name</label>
                                <div class="data_txt"><?php echo $emp->username; ?></div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="frm_grp">
                                <label for="">Credit</label>
                                <div class="data_txt"><?php echo $emp->tokens;?></div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="list_tk">
                                <div class="frm_grp">
                                    <label for="">Assigned On</label>
                                    <div class="data_txt"><?php echo $emp->date;?></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        else
        {
             ?>
                <div class="brd_btm">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="frm_grp">
                                <label for="">Employee Name</label>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="frm_grp">
                                <label for="">Credit</label>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="list_tk">
                                <div class="frm_grp">
                                    <label for="">Assigned On</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="list_tk">
                                <div class="frm_grp">
                                    <label for="">No Record Found</label>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
        }
        exit();
    }
    public function PaymentHistory()
    {
        $id = Auth::user()->id;
        $CompanyDetails = DB::table('users')->where('id',$id)->where('role','Employer')->first();
        $CompUniqueCode = $CompanyDetails->unique_company_code;
        $PaymentHistory = DB::table('transaction_details as td')
                        ->where('td.user_id',$id)
                        ->select('td.*')
                        ->get()
                        ->toArray();

        return view('employer.PaymentHistory', compact('PaymentHistory'));
    }
    public function logout(Request $request){
        try{
            auth()->logout();
        session()->flush(); // removes all session data
            return redirect()->route('employer.login');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function SendOTP($phone){
        $Employer = DB::table('users')->where('role', 'Employer')->where('phone',$phone)->first();
        if(!empty($Employer))
        {

            $Phone = $Employer->c_code.$Employer->phone;
            $OTP = $this->GenerateOTP();
            $this->GenerateSMS($Phone,$OTP);

            $hashedOTP = Hash::make($OTP);

            $Details = array();
            $Details['otp'] = $hashedOTP;
            DB::table('users')->where('role', 'Employer')->where('phone',$phone)->update($Details);
            $Result = array();
            $Result['status'] = '1';
            $Result['ErrorMsg'] = 'Phone Exit!';
            return json_encode($Result);
        }
        else
        {
            $Result = array();
            $Result['status'] = '0';
            $Result['ErrorMsg'] = 'OOPS! Phone Does Not Exit!';
            return json_encode($Result);
        }
    }
    public function GenerateSMS($Phone,$OTP)
    {
        $accountSid = env('accountSid');
        $authToken  = env('authToken');
        $twilioNumber = '+16592215056';
        $recipientNumber = $Phone;
        $message = "Your verification code is: ".$OTP.". Don't share this code with anyone; our employees will never ask for the code.";
        $apiEndpoint = "https://api.twilio.com/2010-04-01/Accounts/{$accountSid}/Messages.json";
        $auth = base64_encode("{$accountSid}:{$authToken}");
        $ch = curl_init($apiEndpoint);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "To={$recipientNumber}&From={$twilioNumber}&Body={$message}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Basic {$auth}"]);
        $response = curl_exec($ch);
        curl_close($ch);
        //echo $response;
        return true;
    }
    public function GenerateOTP()
    {
        $otp = rand(1000, 9999);
        $otp = str_pad($otp, 4, '0', STR_PAD_LEFT);
        return $otp;
    }
    public function EmployerGmailLogin(){
        $email = $_GET['email'];
        $user = User::where('email', $email)->count();
        //  dd($user);
        if($user > 0){
            $verifiedUser = User::where('email', $email)->first();

            $role = $verifiedUser->role;
            Auth::login($verifiedUser);
            if(auth()->user()->status == 1){
                $notification= new Notification();
                $notification->sender_id = Auth::user()->id;
                //$notification->reciver_id = $res->id;
                $notification->title = 'Employer Login';
                $notification->msg = Auth::user()->name.' (Employer) is recently  login !!';
                //$notification->row = $insertedUserId;
                $notification->userType = 'Employer';
                $notification->uuid = Str::uuid();
                $notification->save();
                if($role=='Employer'){
                    return redirect()->route('employer.dashboard');
                }elseif ($role=='Employee') {
                    return redirect('employee/profile')->with('success', '!! Employee logged in !!');
                }elseif ($role=='Professional') {
                    return redirect()->route('professional.profile')->with('success', 'Professional logged in');
                }
            }else{
                if($role=='Employer'){
                    return redirect('employer/subcription/'.$verifiedUser->uid)->with('success', 'Employer logged in');
                }elseif ($role=='Employee') {
                    return redirect('employee/suggestion/'.$verifiedUser->uid)->with('success', 'Employee logged in');
                }elseif ($role=='Professional') {
                    return redirect('professional/vetting/'.$verifiedUser->uid)->with('success', 'Registration Successfully, Please complete your vetting form !!');
                }
            }
        }else{
            return redirect()->route('employer.login');
        }
    }
}
