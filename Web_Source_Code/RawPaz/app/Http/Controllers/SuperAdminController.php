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
use App\Models\Token_use;
use App\Models\Transaction_detail;
use App\Models\Notification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class SuperAdminController extends Controller
{
    //
    public function login()
    {
        if(Auth::check() && Auth::user()->status==1)
        {
            return redirect('super-admin/dashboard');
        }
            return view('superadmin.login');

    }
    public function superLogin(Request $request){
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
        $user = User::where('email', $request->email)->where('role', 'Superadmin')->first();
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
                    return redirect()->route('superadmin.dashboard')->with('success', 'Super Admin logged in');
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
        $currentMonth = now()->format('Y-m');
        $total_sub =Transaction_detail::count();
        $total_tok = Token_use::count('used_token');
        $total_sess =Appointment::whereRaw("DATE_FORMAT(appointmentDate, '%Y-%m') = ?", [$currentMonth])
        ->where('appointmentDate', '<=', now())->count();
        //->where('end_date', '>=', now())

        $total_sub_b =Transaction_detail::where('plan_name','Bronze')->count();
        $total_sub_s =Transaction_detail::where('plan_name','Silver')->count();
        $total_sub_g =Transaction_detail::where('plan_name','Gold')->count();

        $plan_amt_sub=Transaction_detail::sum('plan_amt');
        $token_used=Token_use::sum('used_token');
        $commission=55*$token_used*0.15;
        $custom_total=55*$token_used;
      //  $custom=$custom_total-$commision;
        $employers=User::where('users.role', 'Employer')->where('users.status','1')

                        ->leftJoin('transaction_details', 'transaction_details.user_id','=', 'users.id')
                        ->orderBy('users.created_at','ASC')
                        ->get(['users.name','users.created_at','users.email','users.role','transaction_details.plan_name' ]);
       //dd($employers); die;



       $userCounts = Transaction_detail::where('plan_name','Bronze')
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
        $userCounts1 = Transaction_detail::where('plan_name','Silver')
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
        $userCounts2 = Transaction_detail::where('plan_name','Gold')
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
       // dd($result2);


        return view('superadmin.dashboard',compact('total_sub','total_tok','total_sess','total_sub_b',
        'total_sub_s','total_sub_g','employers','plan_amt_sub','commission','custom_total','result','result1','result2'));

    }
    public function payments(){
        $result= Transaction_detail::join('users','users.id','transaction_details.user_id')->get(['users.name','transaction_details.card_type','transaction_details.plan_name','transaction_details.plan_amt','transaction_details.plan_description','transaction_details.created_at']);
        //dd($result);
        // echo "<pre>";
        // print_r($result->toarray());exit;
        return view('superadmin.payments', compact('result'));
    }
    public function notification(){
        $result= Notification::get();
        //dd($result);
        return view('superadmin.notifications', compact('result'));
    }

    public function appointments(){
        return view('superadmin.appointments');
    }

    public function logout(Request $request){
        try{
            auth()->logout();
            return redirect()->route('super.admin.login');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
