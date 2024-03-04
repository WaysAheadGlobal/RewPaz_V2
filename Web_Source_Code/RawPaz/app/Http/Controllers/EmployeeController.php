<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Employee;
use App\Models\Professional;
use App\Models\Notification;
use App\Models\Transaction_detail;
use App\Models\Feedback;
use App\Models\Token_use;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Appointment;
use function PHPSTORM_META\type;

class EmployeeController extends Controller
{
    //
    public function register(){
        try{
            $departments  =DB::table('departments')->get()->toArray();
            return view('employee.sign-up', compact('departments'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function empRegistration(Request $request){
        //dd($request->all());
        $request->validate([
            //'name' => 'required|exists:users,name',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric|exists:users,phone',
            'referral_code' => 'required|exists:users,unique_refferal_code',
            'birth_year' => 'required',
            'gender' => 'required',
            'zip_code' => 'required',
            'is_agree' => 'required',
            'department' => 'required',
            'employee_id' => 'required',

            ],
            [
            'is_agree.required' => 'Please check this box',

            ]
        );
        $data =array(
            'status'=>'1',
            'approved'=>'1',
            'otp'   => bcrypt('1234'),
            'c_code'   => $request->c_code, /*Honey*/
            'phone'   => $request->phone, /*Honey*/
            'departments'   => $request->departments, /*Honey*/
            'employee_id'   => $request->employee_id, /*Honey*/
        );


        $result=User::where('email',$request->email)
        ->where('name',$request->name)
        ->where('unique_refferal_code',$request->referral_code)
        ->first();

        //$result=User::where('email',$request->email)->first();
                //dd($request->all());
        //$result->update($data) ;
        //sdd($result);
        if($result){
            User::where('id',$result->id)->update($data);

            $Employee = new Employee();
            $Employee->user_id = $result->id;
            $Employee->gender = $request->gender;
            $Employee->birth_year = $request->birth_year;
            $Employee->zip_code = $request->zip_code;
            // $Employee->c_code = $request->c_code;
            // $Employee->phone = $request->phone;
            // $Employee->department = $request->department;
            // $Employee->employee_id = $request->employee_id;
            $res=$Employee->save();

            if($res)
            {
               // echo "now subscribe";
               return redirect('employee/suggestion/'.$result->uid)->with('success', '!! Employee registration successfully done, Now do login !!');
            }else{
                return back()->with('error', 'Oops! Something went wrong!');
            }
        }else{
            return back()->with('error', 'Oops! Data not matching!');
        }

    }
    public function login(){
        if(Auth::check() && Auth::user()->status==1)
        {
            return redirect('employee/profile');
        }

            return view('employee.login');

    }

    public function empLogin(Request $request){

        $request->validate([
            'phone'         => 'required|numeric|exists:users,phone',
            'otp1'          => 'required',
            'otp2'          => 'required',
            'otp3'          => 'required',
            'otp4'          => 'required',

        ]
    ,[
        'otp1.required' => 'OTP is required',
                'otp2.required' => 'OTP is required',
                'otp3.required' => 'OTP is required',
                'otp4.required' => 'OTP is required',
    ]);

        $user_given_otp = $request->{'otp1'}.$request->{'otp2'}.$request->{'otp3'}.$request->{'otp4'};
        //dd($user_given_otp);
        $user = User::where('phone', $request->phone)->where('role', 'Employee')->count();
        //  dd($user);
        if($user >0){
            $verifiedUser = User::where('phone', $request->phone)->first();
                    //  dd($verifiedUser);
            if (Hash::check($user_given_otp, $verifiedUser->otp))
            {
                // echo "yes";
                Auth::login($verifiedUser);
                $res=User::where('unique_company_code',Auth::user()->unique_company_code)->first();
                if(auth()->user()->status == 1){
                    $notification= new Notification();
                    $notification->sender_id = Auth::user()->id;
                    $notification->reciver_id = $res->id;
                    $notification->title = 'Employee Login';
                    $notification->msg = Auth::user()->name.' (employee) is recently  login !!';
                    //$notification->row = $insertedUserId;
                    $notification->userType = 'Employee';
                    $notification->uuid = Str::uuid();
                    $notification->save();
                    return redirect('employee/profile')->with('success', '!! Employee logged in !!');
                }else{
                    return redirect('employee/suggestion/'.$verifiedUser->uid)->with('success', 'Employee logged in');
                }
            }else{
                return back()->with('error','Oops! OTP is incorrect!!');
            }
        }else{
            return back()->with('error','Oops! No user exist with this Phone!');
        }
    }

    // public function professional_lists(Request $request){


    //     $result= User::where('users.id', Auth::user()->id)->join('employees', 'employees.user_id','=','users.id')->get()->first();
    //     //$pagi=Professional::query()->paginate(3);
    //     $prof = Professional::where('professionals.expertise',$result->household_service)
    //    ->Where('professionals.language','LIKE', '%'.$result->language_preferred.'%')
    //     ->Where('professionals.availability_days','LIKE', '%'.$result->suitable_day.'%')
    //    ->Where('professionals.availability_time','LIKE', '%'.$result->preferred_time_slot.'%')
    //     // ->whereRaw("find_in_set('".$result->language_preferred."',professionals.language)")
    //     // ->whereRaw("find_in_set('".$result->suitable_day."',professionals.availability_days)")
    //     // ->whereRaw("find_in_set('".$result->preferred_time_slot."',professionals.availability_time)")

    //     ->leftJoin('users','users.id','=','professionals.user_id')
    //     //->dd();
    //     ->get();
    //    // $pagi=$prof->paginate(5);
    //     $res=$prof->count();
    //     //dd($prof);
    //     return view('employee.prof-lists',compact('prof','res','result'));




    // //     $result = Professional::where('professionals.expertise',$request->exprt)
    // //     ->Where('professionals.language','LIKE', '%'.$request->lang.'%')
    // //      ->Where('professionals.availability_days','LIKE', '%'.$request->day.'%')
    // //     ->Where('professionals.availability_time','LIKE', '%'.$request->time.'%')
    // //     ->leftJoin('users','users.id','=','professionals.user_id')
    // //     ->paginate(2);
    // //     // $res=$prof->count();
    // //     // dd($prof);
    // //    // $pagi=$prof->paginate(5);
    // //     return view('employee.load_professionals',compact('result'));
    // }


    public function tokens(){
        $result= User::where('users.id', Auth::user()->id)->join('employees', 'employees.user_id','=','users.id')
        ->get()->first();
       // $data=Token_use::where('user_id', Auth::user()->id)->dd();
       $data=Token_use::select(DB::raw("SUM(request_token) as req_tok,SUM(tokens) as tok,SUM(used_token) as us_tok"))
                                ->where('user_id', Auth::user()->id)
                               ->orderBy("created_at")
                               ->groupBy('user_id')
                               ->get()->first();

       // dd($data);
        return view('employee.tokens', compact('result','data'));
    }

    public function tokens_raise(Request $request){
       // dd($request->all());

        $tokens_use= new Token_use();
        $tokens_use->user_id = Auth::user()->id;
        $tokens_use->unique_company_code = Auth::user()->unique_company_code;
        $tokens_use->request_token = $request->token;
        $tokens_use->save();

        $result= User::where('unique_company_code', Auth::user()->unique_company_code)
                        ->where('role', 'Employer')
                        ->where('status', '1')
                        ->where('left_tokens','>', 0)
                        ->leftJoin('employers', 'employers.user_id', 'users.id')
                        ->first();
       // dd($result);


        $email=$result->email;
        $token=$request->token;
        $data= array(
            'token'=>$token,
            'r_name'=>$result->name,
            'name'=>Auth::user()->name,
            'email'=>Auth::user()->email,
            'empcode'=>Auth::user()->employee_id,
            'company'=>$result->company_name,
            'role'=>$result->job_role,
            'compid'=>$result->unique_company_code,
            'msg' => "Please provide Token !!",

        );
        $user['to']=$email;
        Mail::send('emailtemplates.token',$data,function($message) use ($user){
            $message->to($user['to']);
            $message->subject('Raise Token Request');
        });
        $notification= new Notification();
        $notification->sender_id = Auth::user()->id;
        $notification->reciver_id = $result->user_id;
        $notification->title = 'Token Request';
        $notification->msg = Auth::user()->name.' (employee) has raise a request for token.';
        //$notification->row = $insertedUserId;
        $notification->userType = 'Employee';
        $notification->uuid = Str::uuid();
        $notification->save();
        return redirect('employee/tokens')->with('success','Successfully, token request sent !');


    }
    public function profile(){
        /*$result= User::where('users.id', Auth::user()->id)->join('employees', 'employees.user_id','=','users.id')
        ->get()->first();*/
        $result= User::where('users.id', Auth::user()->id)->first();
        $employee= Employee::where('employees.user_id', Auth::user()->id)->first();
         $departments  =DB::table('departments')->get()->toArray();

        return view('employee.profile', compact('result','employee','departments'));
    }
    public function index()
    {
        $id = Auth::user()->id;
        $result = User::where('users.id', $id)->join('employees', 'employees.user_id', '=', 'users.id')->get()->first();
        return view('employee.index', compact('result'));
    }
    public function blog()
    {
        // $id = Auth::user()->id;
        // $result = User::where('users.id', $id)->join('employees', 'employees.user_id', '=', 'users.id')->get()->first();
        // return view('employee.index', compact('result'));
        return view('employee.blog');
    }
    public function community()
    {
        // $id = Auth::user()->id;
        // $result = User::where('users.id', $id)->join('employees', 'employees.user_id', '=', 'users.id')->get()->first();
        // return view('employee.index', compact('result'));
        return view('employee.community');
    }
    public function profile_update(Request $request)
    {
        $Array = array();
        $Array['phone'] = $request->phone;
        $Array['departments'] = $request->department;
        $res1=User::where('id',Auth::user()->id)->update($Array);
        $data= array(
            'birth_year'=>$request->birth_year,
            'gender'=>$request->gender,
            'country'=>$request->country,
            'address'=>$request->address,
            'department'=>$request->department,
        );
        $res2=Employee::where('user_id',Auth::user()->id)->update($data);

        return redirect()->back()->with('success', '!! Profile is updated successfully !!');
        /*if($res1 && $res2)
        {
            return redirect()->back()->with('success', '!! Profile is updated successfully !!');
        }*/
    }

    public function suggestion($uid)
    {
        $result = User::where('uid', $uid)->first();
        return view('employee.suggestion', compact('result'));
    }
    public function save_suggestion(Request $request)
    {
       // dd($request->all());
        $user_id = $request->user_id;

        $result=User::where('id',$user_id)->update(['status'=>'1']);
        if($request->mental_wellness){
            $mental=implode(',',$request->mental_wellness);
        }else{
            $mental="";
        }
        if($request->physical_wellness){
            $physical=implode(',',$request->physical_wellness);
        }else{
            $physical="";
        }
        if($request->household_service){
            $household=implode(',',$request->household_service);
        }else{
            $household="";
        }
        if($request->suitable_day){
            $suitable_day=implode(',',$request->suitable_day);
        }else{
            $suitable_day="";
        }
        if($request->preferred_time_slot){
            $preferred_time_slot =implode(',',$request->preferred_time_slot);
        }else{
            $preferred_time_slot="";
        }
        $data = array(
            'total_family_member' => $request->total_family_member,
            'remotely_work' => $request->remotely_work,
            'seeking_help' => $request->seeking_help,
            'illness_disablity' => $request->illness_disablity,
            'providing_care' => $request->providing_care,
            'mental_wellness' => $mental,
            'physical_wellness' => $physical,
            'household_service' => $household,
            'language_preferred' => $request->language_preferred,
            'preferred_appointment' => $request->preferred_appointment,
            'suitable_day' => $suitable_day,
            'preferred_time' => $request->preferred_time,
            'preferred_time_slot' =>  $preferred_time_slot,
        );
        $res=Employee::where('user_id',$user_id)->update($data);

        if($result && $res){
            return redirect('employee/professionals');
        }
    }

    public function professional_details(Request $req){

        $uuid = $req->segment(3);
        //print_r($uuid);exit;
        $query = Professional::query();
        $query->select('t1.user_id as professionalId', 't1.*', 't2.uid','t2.bio','t2.profile_pic', 't2.name'); // get desired data from tables
       // $query->select('t1.*', 't2.*'); // get desired data from tables
        $query->from('users as t2');
        $query->leftJoin('professionals as t1', 't1.user_id', 't2.id');
        $query->where('t2.uid', $uuid);
        $data = $query->first();
       // dd($data);

        $feedbacks = Feedback::where('feedbacks.professional_id', $data->professionalId)
                            ->join('users', 'users.id', 'feedbacks.employee_id')
                            ->get();
        $rating_all = Feedback::where('professional_id', $data->professionalId)->avg('rating');
        $review_all = Feedback::where('professional_id', $data->professionalId)->count('description');

        $profs = User::where('users.role', 'Professional')
                ->join('professionals', 'users.id', '=', 'professionals.user_id')
                ->where('professionals.expertise', $data->expertise)->inRandomOrder()->limit(4)->get();

        // foreach($profs as $pro){
        //     dd($pro);
        // }

        //$rating = Feedback::whereIn('professional_id', $pro->id)->avg('rating');
        //     $review = Feedback::whereIn('professional_id', $pro->id)->count('description');


       // dd( $profs->toArray());
        return view('employee.professional-details', compact('data','feedbacks','rating_all','review_all','profs'));

    }

    public function appointments(){
        $userId = Auth::user()->id;
        return view('employee.appointments');
    }

    public function notification(){
        $result= User::where('users.id', Auth::user()->id)->join('notifications', 'notifications.reciver_id','=','users.id')
        ->orderBy('notifications.id','desc')->get();
        return view('employee.notifications', compact('result'));
    }

    public function chat_individual(Request $request){
        $id = $request->segment(3);
        // $appointment = Appointment::where('uid', $id)->first();
        $appointment = Appointment::select('t1.*', 't2.name', 't2.role')->from( 'appointments as t1')
        ->leftJoin('users as t2', 't1.professional_id', 't2.id')
        ->where('t1.uid', $id)->first();
        return view('employee.chat-individual', compact('appointment'));
    }

    public function chat_room(Request $request){
        return view('employee.chat-room');
    }

public function journals(Request $request){
        $id = $request->segment(4);
        $defaultAction = $request->segment(3);
        // $appointment = Appointment::where('uid', $id)->first();
        $appointment = Appointment::select('t1.*', 't2.name', 't2.role')->from( 'appointments as t1')
        ->leftJoin('users as t2', 't1.professional_id', 't2.id')
        ->where('t1.uid', $id)->first();
        return view('employee.journals', compact('appointment', 'defaultAction'));
    }


    public function logout(Request $request){
        try{
            auth()->logout();
            session()->flush(); // removes all session data
            return redirect()->route('employee.login');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function SendOTP($phone){
        $Employee = DB::table('users')->where('role', 'Employee')->where('phone',$phone)->first();
        if(!empty($Employee))
        {
            $Phone = $Employee->c_code.$Employee->phone;
            $OTP = $this->GenerateOTP();
            $this->GenerateSMS($Phone,$OTP);

            $hashedOTP = Hash::make($OTP);

            $Details = array();
            $Details['otp'] = $hashedOTP;
            DB::table('users')->where('role', 'Employee')->where('phone',$phone)->update($Details);

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

}
