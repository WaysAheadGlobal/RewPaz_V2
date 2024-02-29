<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Feedback;
use App\Models\GroupSession;
use App\Models\Notification;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Redirect;
use Stripe;
class ProfessionalControllers extends Controller
{
    //
    public function register(){
        try{
            return view('professional.sign-up');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }


    public function profRegistration(Request $request){

            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,except,id',
                'phone' => 'required|numeric|unique:users,phone,except,id',
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

            $user = new User();

            $user->otp   = Hash::make('1234');
            $user->name  = $request->name;
            $user->email = $request->email;
            $user->c_code = $request->c_code;
            $user->phone = $request->phone;
            $user->role  = 'Professional';
            $user->uid = Str::uuid();
            $user->is_agree = $request->is_agree;
            //dd($user);
            $user->save();
            $result = $user->uid;
            if($result){

                return redirect('professional/vetting/'.$result)->with('success', 'Professional Registration Successfully');
            }else{
                return back()->with('error', 'Oops! Something went wrong!');
            }


    }
    public function profVetting($res)
    {

        $result = User::where('uid', $res)->where('status', '0')->first();
       // echo "Here is id";

      // dd($result);
        return view('professional.vetting_form',compact('result'));
    }

    public function saveVetting(Request $request)
    {
        //echo "<pre>"; print_r($request->all()); excit();
        $request->validate([
            'phone' =>'required',
            'dob' =>'required',
            'gender' =>'required',
            'address' =>'required',
            'province' =>'required',
            'zip_code' =>'required',
            'qualification' =>'required',
            'expertise' =>'required',
            'photo_id' =>'required',
            'photo_id_upld' =>'required',
            'experience_year' =>'required',
            'experience_month' =>'required',
            'service_offering' =>'required',
            'language' =>'required',
            'hourly_fees' =>'required',
            'consultation_mode' =>'required',
            // 'availability_days' =>'required',
            // 'availability_time' =>'required',
        ]);
        $uid=$request->uid;
        $id=$request->id;
        $profilePic="";
        if($request->file('profile_pic') !=''){
            $profilePic = time()."_profile.".$request->file('profile_pic')->getClientOriginalExtension();
            $request->file('profile_pic')->storeAs('upload/prof-doc',$profilePic);
        }
       // dd($profilePic);
        $profileVideo="";
        if($request->file('profile_video') !=''){
            $profileVideo = time()."_video.".$request->file('profile_video')->getClientOriginalExtension();
            $request->file('profile_video')->storeAs('upload/prof-doc',$profileVideo);
        }
        $data = array(
            'phone' => $request->phone,
            'profile_pic'=> $profilePic,
            'profile_video' => $profileVideo,
            'bio' => $request->bio
        );
        $res=user::where('uid', $uid)->update($data);
        if($id)

        {
            //dd($id);
            $photoId="";
            if($request->file('photo_id_upld') !=''){
                $photoId = time()."_prof_id.".$request->file('photo_id_upld')->getClientOriginalExtension();
                $request->file('photo_id_upld')->storeAs('upload/prof-doc',$photoId);
            }

            $certificate="";
            if($request->file('certification_upld') !=''){
                $certificate = time()."_certificate.".$request->file('certification_upld')->getClientOriginalExtension();
                $request->file('certification_upld')->storeAs('upload/prof-doc',$certificate);
            }

            $degree="";
            if($request->file('degree_upld') !=''){
                $degree = time()."_address_proof.".$request->file('degree_upld')->getClientOriginalExtension();
                $request->file('degree_upld')->storeAs('upload/prof-doc',$degree);
            }
            $details = array(
                'user_id'=>$id,
                'dob' =>$request->dob,
                'gender' =>$request->gender,
                'address' =>$request->address,
                'province' =>$request->province,
                'zip_code' =>$request->zip_code,
                'qualification' =>$request->qualification,
                'expertise' =>$request->expertise,
                'photo_id' =>$request->photo_id,
                'photo_id_upld' =>$photoId,
                'certification_upld' =>$certificate,
                'degree_upld' =>$degree,
                'experience_year' =>$request->experience_year,
                'experience_month' =>$request->experience_month,
                'service_offering' =>$request->service_offering,
                'language' =>implode(',',$request->language),
                'hourly_fees' =>$request->hourly_fees,
                'consultation_mode' =>$request->consultation_mode,
                'availability_days' =>implode(',', $request->availability_days),
                'availability_time' =>implode(',', $request->availability_time),
                'linkedin_link' =>$request->linkedin_link,
                'facebook_link' =>$request->facebook_link,
                'instagram_link' =>$request->instagram_link,
                'is_group_session_provided'=>$request->is_group_session_provided,
                'group_session_fee'=>$request->group_session_fee,
                            );
            $details = Professional::insert($details);
            if($details)
            {
                $User = User::where('id', $id)->get()->first();

                $notification= new Notification();
                $notification->sender_id = $id;
                $notification->reciver_id = 1;
                $notification->title = 'Vetting Process';
                $notification->msg = 'Professional completed vetting process !!';
                //$notification->row = $insertedUserId;
                $notification->userType = 'Professional';
                $notification->uuid = Str::uuid();
                $notification->save();
                //echo "page submitted";
                return redirect('professional/thanku/'.$User->uid)->with('success', 'Professional Vetting Process Successfully Done');

            }
        }

    }

    public function profThanku($uid)
    {
        $result = User::where('uid', $uid)->where('status', '0')->first();
        return view('professional.thanku', compact('result'));

    }
    public function login(){
        try{
            return view('professional.login');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function profLogin(Request $request){

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
        // dd($input);
        $user_given_otp = Hash::make($request->{'otp1'}.$request->{'otp2'}.$request->{'otp3'}.$request->{'otp4'});
        //dd($user_given_otp);
        $user = User::where('phone', $request->phone)->where('role', 'Professional')->first();


        if(!empty($user)){
            $verifiedUser = User::where('phone', $request->phone)
                    // ->where('otp', $user_given_otp)

                    ->first();
                    //  dd($verifiedUser);
            if (!Hash::check($user_given_otp, $user->otp))
            {
                // echo "yes";
                Auth::login($verifiedUser);
                //echo Auth::user()->status; die;
                if(Auth::user()->status == 1){
                    //echo "yes"; die;
                    $notification= new Notification();
                    $notification->sender_id = Auth::user()->id;
                    $notification->title = 'Professional Login';
                    $notification->msg = 'Professional is recently  login !!';
                    $notification->userType = 'Professional';
                    $notification->uuid = Str::uuid();
                    $notification->save();
                    // echo "yes"; die;
                    return redirect()->route('professional.profile')->with('success', 'Professional logged in');
                }else{
                    $details= Professional::where('user_id',$user->id)->first();
                    if($details)
                    {
                        return redirect('professional/thanku/'.$user->uid)->with('success', 'Professional logged in');
                    }else{
                        return redirect('professional/vetting/'.$user->uid)->with('success', 'Registration Successfully, Please complete your vetting form !!');
                    }
                }

            }else{
                return back()->with('error','Oops! OTP is incorrect!!');
            }
        }else{
            return back()->with('error','Oops! No user exist with this Email!');
        }
    }

    public function profile()
    {
        //echo Auth::user()->id;
        $result= User::where('users.id', Auth::user()->id)->join('professionals', 'professionals.user_id','users.id')
        ->get()->first();
       //echo "<pre>"; print_r($result); die;
       $daysArr = ['MON','TUE','WED','THU','FRI','SAT','SUN'];
       $timeArr= ["10:00 AM - 12:00 PM","12:00 PM - 02:00 PM","02:00 PM - 04:00 PM","04:00 PM - 06:00 PM","06:00 PM - 08:00 PM"];
        return view('professional.profile', compact('result', 'daysArr','timeArr'));
    }
    public function EditProfile()
    {
        $result= User::where('users.id', Auth::user()->id)->join('professionals', 'professionals.user_id','users.id')
        ->get()->first();
       //echo "<pre>"; print_r($result); die;
       $daysArr = ['MON','TUE','WED','THU','FRI','SAT','SUN'];
       $timeArr= ["10:00 AM - 12:00 PM","12:00 PM - 02:00 PM","02:00 PM - 04:00 PM","04:00 PM - 06:00 PM","06:00 PM - 08:00 PM"];
        return view('professional.edit-profile', compact('result', 'daysArr','timeArr'));
    }
    public function UpdateProfile(Request $request)
    {

        //dd($request->all());
        /*$request->validate([
            'phone' =>'required',
            'dob' =>'required',
            'gender' =>'required',
            'address' =>'required',
            'province' =>'required',
            'zip_code' =>'required',
            'qualification' =>'required',
            'expertise' =>'required',
            'photo_id' =>'required',
            'photo_id_upld' =>'required',
            'experience_year' =>'required',
            'experience_month' =>'required',
            'service_offering' =>'required',
            'language' =>'required',
            'hourly_fees' =>'required',
            'consultation_mode' =>'required',
        ]);*/

        $result= User::where('users.id', Auth::user()->id)->join('professionals', 'professionals.user_id','users.id')
        ->get()->first();

        $user_id=$request->user_id;
        $uid=$request->uid;
        $id=$request->id;
        $profilePic=$result->profile_pic;
        if($request->file('profile_pic') !=''){
            $profilePic = time()."_profile.".$request->file('profile_pic')->getClientOriginalExtension();
            $request->file('profile_pic')->storeAs('upload/prof-doc',$profilePic);
        }
       // dd($profilePic);
        $profileVideo=$result->profile_video;
        if($request->file('profile_video') !=''){
            $profileVideo = time()."_video.".$request->file('profile_video')->getClientOriginalExtension();
            $request->file('profile_video')->storeAs('upload/prof-doc',$profileVideo);
        }
        $data = array(
            'phone' => $request->phone,
            'profile_pic'=> $profilePic,
            'profile_video' => $profileVideo,
            'bio' => $request->bio
        );

        $res=user::where('uid', $uid)->update($data);
        //dd($id);
            $photoId=$result->photo_id_upld;;
            if($request->file('photo_id_upld') !=''){
                $photoId = time()."_prof_id.".$request->file('photo_id_upld')->getClientOriginalExtension();
                $request->file('photo_id_upld')->storeAs('upload/prof-doc',$photoId);
            }

            $certificate=$result->certification_upld;
            if($request->file('certification_upld') !=''){
                $certificate = time()."_certificate.".$request->file('certification_upld')->getClientOriginalExtension();
                $request->file('certification_upld')->storeAs('upload/prof-doc',$certificate);
            }

            $degree=$result->degree_upld;
            if($request->file('degree_upld') !=''){
                $degree = time()."_address_proof.".$request->file('degree_upld')->getClientOriginalExtension();
                $request->file('degree_upld')->storeAs('upload/prof-doc',$degree);
            }
            $details = array(
                'user_id'=>$user_id,
                'dob' =>$request->dob,
                'gender' =>$request->gender,
                'address' =>$request->address,
                'province' =>$request->province,
                'zip_code' =>$request->zip_code,
                'qualification' =>$request->qualification,
                'expertise' =>$request->expertise,
                'photo_id' =>$request->photo_id,
                'photo_id_upld' =>$photoId,
                'certification_upld' =>$certificate,
                'degree_upld' =>$degree,
                'experience_year' =>$request->experience_year,
                'experience_month' =>$request->experience_month,
                'service_offering' =>$request->service_offering,
                'language' =>implode(',',$request->language),
                'hourly_fees' =>$request->hourly_fees,
                'consultation_mode' =>$request->consultation_mode,
                'availability_days' =>implode(',', $request->availability_days),
                'availability_time' =>implode(',', $request->availability_time),
                'linkedin_link' =>$request->linkedin_link,
                'facebook_link' =>$request->facebook_link,
                'instagram_link' =>$request->instagram_link,
                'is_group_session_provided'=>$request->is_group_session_provided,
                'is_sos_provided'=>$request->is_sos_provided,
                'group_session_fee'=>$request->group_session_fee,
                            );
            //echo "<pre>"; print_r($request->all()); print_r($details); die;
            $details = Professional::where('user_id', $user_id)->update($details);
            return Redirect::back()->with('success', 'Updated Successfully');
    }

    public function appointments(Request $request){
        return view('professional.appointments');
    }

    public function group_Session(Request $request){
        return view('professional.group-session');
    }

    public function group_session_list(Request $request)
    {

        $result = User::select('users.name', 'users.profile_pic', 'group_sessions.id','group_sessions.day','group_sessions.time','group_sessions.date','group_sessions.status as sts')
        ->join('group_sessions', 'users.id', '=', 'group_sessions.employee_id')->where('group_sessions.professional_id',Auth::user()->id)
        ->get();
         //   dd($result);
        return view('professional.groupsessionlist', compact('result'));

    }
    public function StatusChange(Request $request){
        GroupSession::where('id',$request->id)->update(['status'=>$request->status]);
        echo 1;
        exit();
   }
    public function feedbacks(Request $request){
        $feedbacks = Feedback::where('feedbacks.professional_id', Auth::user()->id)
                            ->join('users', 'users.id', 'feedbacks.employee_id')
                            ->get();
       // dd($feedbacks);
        return view('professional.feedback', compact('feedbacks'));
    }
    public function addAccount(Request $request){
        return view('professional.addAccount');
    }
    public function addAccountDetails(Request $request){
        $Data = $request->all();
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        try
        {
            $Data = $stripe->tokens->create([
              'bank_account' => [
                'country' => 'CA',
                'currency' => env('Currency'),
                'account_holder_name' => $Data['AccountHolderName'],
                'account_holder_type' => $Data['AccountType'],
                'routing_number' => $Data['RoutingNumber'],
                'account_number' => $Data['AccountNo'],
              ],
            ]);
        }
        catch(\Stripe\Exception\InvalidRequestException $e)
        {
            $Response['status'] = 0;
            $Response['msz'] = $e->getError()->message;;
            echo json_encode($Response); exit();
        }
        try
        {
            $UserID = Auth::user()->id;
            $UserIDExist = DB::table('users')->where('id',$UserID)->first();
            $Customer = $stripe->customers->create([
                'name' => $UserIDExist->name,
                'description' => 'Account Add',
                'email' => $UserIDExist->email,
            ]);
        }
        catch(\Stripe\Exception\InvalidRequestException $e)
        {
            $Response['status'] = 0;
            $Response['msz'] = $e->getError()->message;;
            echo json_encode($Response); exit();
        }

        $Source = $stripe->customers->createSource(
          $Customer->id,
          ['source' => $Data->id]
        );

        $InsertSource['user_id']        = $UserID;
        $InsertSource['card']           = $Source->last4;
        $InsertSource['source_details'] = $Source;
        $InsertSource['bank_details']   = $Data;
        $InsertSource['customer_id']    = $Customer->id;
        $InsertSource['source_id']      = $Source->id;
        DB::table('ach_source')->insert($InsertSource);
        return redirect()->route('professional.verifyAccount');
    }
    public function verifyAccount(Request $request){
        return view('professional.verifyAccount');
    }
    public function verifyAccountDetails(Request $request){
        $UserID = Auth::user()->id;
        $AddedDetails =  DB::table('ach_source')->where('user_id',$UserID)->first();
        $customer_id = $AddedDetails->customer_id;
        $source_id = $AddedDetails->source_id;
        $amount1=$request->Amount1;
        $amount2=$request->Amount2;
        try
        {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET') );
            $Verify = $stripe->customers->verifySource(
              $customer_id,
              $source_id,
              ['amounts' => [$amount1, $amount2]]
            );
        }
        catch(\Stripe\Exception\InvalidRequestException $e)
        {
            $Response['status'] = 0;
            $Response['msz'] = $e->getError()->message;
            echo json_encode($Response); exit();
        }


        $InsertSource['verify']            = 1;
        $InsertSource['verification_details']   = $Verify;
        DB::table('ach_source')->where('user_id',$UserID)->update($InsertSource);

        $Insert['user_id']      = $UserID;
        $Insert['customer_id']  = $Verify->customer;
        $Insert['bank_name']    = $Verify->bank_name;
        $Insert['created_at']   = date('Y-md H:i:s');
        DB::table('ach_account')->insert($Insert);
        $AccountList = DB::table('ach_account')->where('user_id',$UserID)->get();

        return redirect()->route('professional.earning');

    }
    public function widrawal(Request $request){
        return view('professional.widrawal');
    }
    public function widrawalAmount(Request $request){
        $UserID = Auth::user()->id;
        $AddedDetails =  DB::table('ach_account')->where('user_id',$UserID)->first();

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        try
        {
            $AchCharge = $stripe->charges->create([
              'amount' => $request->Amount*100,
              'currency' => env('Currency'),
              'customer' => $AddedDetails->customer_id,
              'description' => 'Widrawal',
            ]);

            if($AchCharge->captured=='1')
            {
                echo "<pre>";
                print_r($AchCharge);
                exit();
            }
        }
        catch(\Stripe\Exception\InvalidRequestException $e)
        {
            $Response['status'] = 0;
            $Response['msz'] = $e->getError()->message;
            echo json_encode($Response); exit();
        }

    }
    public function earning(Request $request){
        $UserID = Auth::user()->id;
        $Account = DB::table('ach_source')->where('user_id',$UserID)->first();
        return view('professional.earnings')->with(['Account'=>$Account]);
    }
    public function feedback(Request $request){
        return view('professional.feedback');
    }
    public function tokens(Request $request){
        return view('professional.tokens');
    }
    public function notification(){
        $result= User::where('users.id', Auth::user()->id)->join('notifications', 'notifications.reciver_id','=','users.id')
        ->orderBy('notifications.id', 'desc')->get();
        return view('professional.notifications', compact('result'));
    }

    public function chat_individual(Request $request){
        $id = $request->segment(3);
        // $appointment = Appointment::where('uid', $id)->first();
        $appointment = Appointment::select('t1.*', 't2.name', 't2.role')->from( 'appointments as t1')
        ->leftJoin('users as t2', 't1.created_by', 't2.id')
        ->where('t1.uid', $id)->first();
        return view('professional.chat-individual', compact('appointment'));
    }

public function chat_room(Request $request){
        return view('professional.chat-room');
    }

public function create_note(Request $request){
        $id = $request->segment(3);
        // $appointment = Appointment::where('uid', $id)->first();
        $appointment = Appointment::select('t1.*', 't2.name', 't2.role')->from( 'appointments as t1')
        ->leftJoin('users as t2', 't1.created_by', 't2.id')
        ->where('t1.uid', $id)->first();
        return view('professional.note-create', compact('appointment'));
    }


    public function logout(Request $request){
        try{
            auth()->logout();
            session()->flush(); // removes all session data
            return redirect()->route('professional.login');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function SendOTP($phone){
        $Professional = DB::table('users')->where('role', 'Professional')->where('phone',$phone)->first();
        if(!empty($Professional))
        {
            $Phone = $Professional->c_code.$Professional->phone;
            $OTP = $this->GenerateOTP();
            $this->GenerateSMS($Phone,$OTP);

            $hashedOTP = Hash::make($OTP);

            $Details = array();
            $Details['otp'] = $hashedOTP;
            DB::table('users')->where('role', 'Professional')->where('phone',$phone)->update($Details);

            $Result = array();
            $Result['status'] = '1';
            $Result['ErrorMsg'] = 'phone Exit!';
            return json_encode($Result);
        }
        else
        {
            $Result = array();
            $Result['status'] = '0';
            $Result['ErrorMsg'] = 'OOPS! phone Does Not Exit!';
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
