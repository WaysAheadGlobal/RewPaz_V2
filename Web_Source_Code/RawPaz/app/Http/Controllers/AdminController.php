<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Professional;
use App\Models\Employee;
use App\Models\Employer;
use App\Models\Virtual_Meeting;
use App\Models\Transaction_detail;
use App\Models\Notification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class AdminController extends Controller
{
    //
    public function login()
    {
        if(Auth::check() && Auth::user()->status==1)
        {
            return redirect('admin/dashboard');
        }
            return view('admin.login');

    }
    public function adminLogin(Request $request){
        $request->validate([
            'email'         => 'required|email|exists:users,email',
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
        ]

    );
        // dd($input);
        $user_given_otp = Hash::make($request->{'otp1'}.$request->{'otp2'}.$request->{'otp3'}.$request->{'otp4'});
        //dd($user_given_otp);
        $user = User::where('email', $request->email)->where('role', 'Admin')->first();
        //  dd($user);
        if($user != null){
            $verifiedUser = User::where('email', $request->email)
                    // ->where('otp', $user_given_otp)
                    ->first();
                    //  dd($verifiedUser);
            if (!Hash::check($user_given_otp, $user->otp))
            {
                // echo "yes";
                Auth::login($verifiedUser);
                if(auth()->user()->status == 1){
                    return redirect()->route('admin.dashboard')->with('success', 'Admin logged in');
                }else{
                    return back()->with('error','Oops! Something went wrong !!');
                }

            }else{
                return back()->with('error','Oops! OTP is incorrect!!');
            }
        }else{
            return back()->with('error','Oops! No user exist with this Email!');
        }
    }

    public function dashboard()
    {
        $totalEmpr=User::Where('role','Employer')->count();
        $totalEmp=User::Where('role','Employee')->count();
        $totalMed=User::Where('users.role','Professional')
                        ->Where('professionals.expertise','Meditation')
                        ->leftJoin('professionals','professionals.user_id','=','users.id')
                        ->count();

        $totalYog=User::Where('users.role','Professional')
                        ->Where('professionals.expertise','Yoga')
                        ->leftJoin('professionals','professionals.user_id','=','users.id')
                        ->count();

        $totalPhy=User::Where('users.role','Professional')
                        ->Where('professionals.expertise','Physiotherapy')
                        ->leftJoin('professionals','professionals.user_id','=','users.id')
                        ->count();

        $totalDie=User::Where('users.role','Professional')
                        ->Where('professionals.expertise','Dietitian/ Nutritionist')
                        ->leftJoin('professionals','professionals.user_id','=','users.id')
                        ->count();

        $totalSup=User::Where('users.role','Professional')
                        ->Where('professionals.expertise','Support Workers')
                        ->leftJoin('professionals','professionals.user_id','=','users.id')
                        ->count();

        $totalChi=User::Where('users.role','Professional')
                        ->Where('professionals.expertise','Child Care')
                        ->leftJoin('professionals','professionals.user_id','=','users.id')
                        ->count();

        $totalWell=User::Where('users.role','Professional')
                        ->Where('professionals.expertise','Wellness Coach')
                        ->leftJoin('professionals','professionals.user_id','=','users.id')
                        ->count();

        $totalThe=User::Where('users.role','Professional')
                        ->Where('professionals.expertise','Therapy Sessions')
                        ->leftJoin('professionals','professionals.user_id','=','users.id')
                        ->count();

        $totalPhys=User::Where('users.role','Professional')
                        ->Where('professionals.expertise','Physical Wellness')
                        ->leftJoin('professionals','professionals.user_id','=','users.id')
                        ->count();

        $totalMen=User::Where('users.role','Professional')
                        ->Where('professionals.expertise','Mental Wellness')
                        ->leftJoin('professionals','professionals.user_id','=','users.id')
                        ->count();

        $startDate = Carbon::now()->startOfWeek();
        $endDate = Carbon::now()->endOfWeek();
        $session=Appointment::whereBetween('appointmentDate', [$startDate, $endDate])->count();

        // Get the current date
        $currentDate = Carbon::now();

        // Calculate the first day of the previous month
        $previousMonthFirstDay = $currentDate->copy()->subMonth()->startOfMonth();

        // Calculate the last day of the previous month
        $previousMonthLastDay = $currentDate->copy()->subMonth()->endOfMonth();

        $session_monthly=Appointment::whereBetween('appointmentDate', [$previousMonthFirstDay, $previousMonthLastDay])
        ->count();

        $totalEmpm=User::Where('role','Employee')->whereBetween('created_at', [$previousMonthFirstDay, $previousMonthLastDay])->count();

       // $totalEmpr=User::Where('role','Employer')->count();
       $totalSub=Transaction_detail::count();

       $employers=User::where('users.role', 'Employer')->where('users.status','1')
       ->leftJoin('transaction_details', 'transaction_details.user_id','=', 'users.id')
       ->get(['users.name','users.created_at','users.email','users.role','transaction_details.plan_name' ]);

       $userCounts = User::Where('role','Employer')->where('status','1')
       ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'), DB::raw('COUNT(*) as count'))
       ->groupBy('month')
       ->get();

       // Create an array to hold the month-wise user counts
       $result = [];

       // Initialize the result array with 0 for all months in the desired range
      $startDate = Carbon::parse('2023-01-01'); // Change this to your desired start date
      $endDate = Carbon::parse('2023-12-31');   // Change this to your desired end date

       while ($startDate <= $endDate) {
           $result[$startDate->format('Y-m')] = 0;
           $startDate->addMonth();
       }
       // Populate the actual user counts for existing months
       foreach ($userCounts as $userCount) {
           $result[$userCount->month] = $userCount->count;
       }
        //dd($result) ;
       $userCounts1 = User::Where('role','Employee')->where('status','1')
       ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'), DB::raw('COUNT(*) as count'))
       ->groupBy('month')
       ->get();

       // Create an array to hold the month-wise user counts
       $result1 = [];

       // Initialize the result array with 0 for all months in the desired range
      $startDate1 = Carbon::parse('2023-01-01'); // Change this to your desired start date
      $endDate1 = Carbon::parse('2023-12-31');   // Change this to your desired end date
       while ($startDate1 <= $endDate1) {
           $result1[$startDate1->format('Y-m')] = 0;
           $startDate1->addMonth();
       }
       // Populate the actual user counts for existing months
       foreach ($userCounts1 as $userCount1) {
           $result1[$userCount1->month] = $userCount1->count;
       }
     //  dd($result1);
       $userCounts2 = User::Where('role','Professional')->where('status','1')
       ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'), DB::raw('COUNT(*) as count'))
       ->groupBy('month')
       ->get();

       // Create an array to hold the month-wise user counts
       $result2 = [];

       // Initialize the result array with 0 for all months in the desired range
      $startDate2 = Carbon::parse('2023-01-01'); // Change this to your desired start date
      $endDate2 = Carbon::parse('2023-12-31');   // Change this to your desired end date
       while ($startDate2 <= $endDate2) {
           $result2[$startDate2->format('Y-m')] = 0;
           $startDate2->addMonth();
       }
       // Populate the actual user counts for existing months
       foreach ($userCounts2 as $userCount2) {
           $result2[$userCount2->month] = $userCount2->count;
       }

       return view('admin.dashboard',compact('totalEmpr','totalEmp','totalEmpm','totalSub','totalMed','employers','totalYog','totalPhy','totalDie',
        'totalSup','totalChi','totalWell','totalThe','totalPhys','totalMen','session','session_monthly','result','result1','result2'));
    }

    public function vettinglists()
    {
        try{
            $results= User::select('users.*','professionals.is_new','professionals.expertise')->where('role', 'Professional')
            ->join('professionals', 'professionals.user_id', '=', 'users.id')
            ->orderBy('users.id','desc')->paginate(10);
         //   dd($results);
      //  $page= $results->paginate(10);
            return view('admin.vettinglist', compact('results'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function vettinglist($uid)
    {
        try{
           // $uid = $request->uid;
           // dd($uid);
            $result= User::where('role', 'Professional')->where('uid',$uid)
            ->join('professionals', 'professionals.user_id', '=', 'users.id')

            ->get(['users.*', 'professionals.*'])->first();
           // dd($result);
           $meeting_link = Virtual_Meeting::where('link_sent_to',$result->user_id)->first();
          //  dd($meeting_link);
            return view('admin.admin-vettinglist', compact('result','meeting_link'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function status_update(Request $request)
    {


        $input = $request->all();
        $id = $request->user_id;
        $new=$request->is_new;
        //dd($new);
        $status = $request->statusUpdate;
        $email= $request->email;
        $data='';
        if($status == 'approve'){
            $stat='1';
            $approved='1';
        }else if($status == 'reject'){
            $stat='0';
            $approved='2';
        }else if($status == 'back'){
            $stat='0';
            $approved='0';
        }

        $data = array(
            'status'=>$stat,
            'approved'=>$approved,
        );
        $prof = array(
            'is_new'=>$new,
        );

         //  \DB::enableQueryLog(); // Enable query log
        $res= User::where('id', $id)->update($data);
        $pro= Professional::where('user_id',$id)->update($prof);

       //  dd(\DB::getQueryLog()); // Enable query log
        if($res && $pro)
       // if($pro)
        {
            $notification= new Notification();
            $notification->sender_id = Auth::user()->id;
            $notification->reciver_id = $id;
            $notification->title = 'Vetting Status';
            $notification->msg = 'Admin approved your vetting process !!';
            //$notification->row = $insertedUserId;
            $notification->userType = 'Admin';
            $notification->uuid = Str::uuid();
            $notification->save();
            $data1='';
            if($status=='approve'){
                //$statusMsg = 'Approved';
                $data1=array(
                    'msg'=>"Your profile has been approved.",

                    );
                    $msg1 = 'success';
                    $msg2='Profile has been approved & sent mail to client !!' ;
            }
            if($status=='reject'){
               // $statusMsg = 'Admin Seen Your Profile';
                $data1=array(
                    'msg'=>"Your profile has been rejected!!",

                    );
                    $msg1 = 'error';
                    $msg2= 'Profile has been rejected & sent mail to client !!';

            }
            if($status=='back'){
              //  $statusMsg = 'Rejected';
                $data1=array(
                    'msg'=>"Your profile  has been seen. Please wait for next step !!",);
                $msg1 = 'error';
                $msg2= 'Profile has been seen!!';
            }
            $user['to']=$email;
            Mail::send('emailtemplates.approved',$data1,function($message) use ($user){
                $message->to($user['to']);
                $message->subject('Profile Status');
            });

            return redirect('admin/vettinglists')->with($msg1, $msg2);
        }
    }

public function prof_avb(){
        return view('admin.professional-availability');
    }

    public function vettingread(Request $request)
    {
        $user_id = $request->user_id;
        $data = array(
            'is_new' => $request->is_read
        );
        Professional::where('user_id', $user_id)->update($data);
    }
    public function appointments(){
        return view('admin.appointments');
    }
    public function payments(){
        $result= Transaction_detail::join('users','users.id','transaction_details.user_id')->get(['users.name','transaction_details.card_type','transaction_details.plan_name','transaction_details.plan_description']);
        //dd($result);
        // echo "<pre>";
        // print_r($result->toarray());exit;
        return view('admin.payments', compact('result'));
    }
    public function notification(){
        $result= Notification::orderBy('id','desc')->get();
        //dd($result);
        return view('admin.notifications', compact('result'));
    }
    // public function prof_avb(){
    //     return view('admin.professional-availability');
    // }
    public function ProfessionalStatusChange(Request $request){
         User::where('id',$request->id)->update(['status'=>$request->status]);
         echo 1;
         exit();
    }
    public function logout(Request $request){
        try{
            auth()->logout();
            return redirect()->route('admin.login');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
