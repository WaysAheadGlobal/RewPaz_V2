<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Token_use;
use App\Models\Notification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AppointmentsProfessional extends Component
{

    public $userId;
    public $pagination = 10;
    public $showNew = false;
    public $calendarDate = '';
    public $calendarDateForSelect = '';
    public $appointmentId = '';

    public $meetingLink, $meetingUsername, $meetingPassword;

    protected $listeners = ['postAdded'];


    public function configure(): void
{
    $this->setPaginationMethod('simple');
}

public function postAdded($data){
    $data = date($data);
    $this->calendarDate = date(('Y-m-d'), strtotime($data));
    $this->calendarDateForSelect = $this->calendarDate;

}

public function dehydrate()
{
    $this->dispatchBrowserEvent('initSomething');
}

public function __construct() {
    $this->calendarDate = date('Y-m-d');
    $this->userId = Auth::user()->id;
}
    use WithPagination;

    public function updateStatus($status, $uuid)
    {

        DB::beginTransaction();
        DB::connection()->enableQueryLog();
        // $this->counter = $this->counter + $this->size;

        $update = Appointment::where('uid', $uuid)->update(['status' => $status]);
        if($update){
            $appointmentData =  Appointment::where('uid', $uuid)->first();
            $createdBy = $appointmentData->created_by;
            $userDetails = User::where('id', $createdBy)->first();
            $companyCode = $userDetails->unique_company_code;
            $tokenUsedCreate = new Token_use;
            $tokenUsedCreate->user_id = $createdBy;
            $tokenUsedCreate->unique_company_code = $companyCode;
            $tokenUsedCreate->used_token = 1;
            $tokenUsedCreate->appointment_id = $appointmentData->id;


            $notificationTitle = '';
            $notificationMsg = '';
            if($status == 2){
                $notificationTitle = 'Appointment is Approved';
                $notificationMsg = 'Your Appointment is Approved';
                $tokenUsedCreate = $tokenUsedCreate->save();

                $decreaseToken =  User::where(['id' => $createdBy])->decrement('tokens', 1);

            }
            if($status == 3){
                $notificationTitle = 'Professional is not Avaliable';
                $notificationMsg = 'The Professional with whom you are booked your Appointment is not available';
            }

            if($tokenUsedCreate){
                DB::commit();

                $notification= new Notification();
                $notification->sender_id = Auth::user()->id;
                $notification->reciver_id = $createdBy;
                $notification->title = $notificationTitle;
                $notification->msg = $notificationMsg;
                //$notification->row = $insertedUserId;
                $notification->userType = 'Professional';
                $notification->uuid = str::uuid();
                $notification->save();

                session()->flash('message_success', 'Appointment Status updated successfully.');
            }else{
                DB::rollback();
                session()->flash('message_failed', 'Oops something went wrong, please try again');
            }
        }else{
            session()->flash('message_failed', 'No Changes detected please select another status.');
        }
        $queries = DB::getQueryLog();
        // dd($queries);
    }


    public function openApprovalModal($uuid){
        $this->appointmentId = $uuid;
    }


    public function updateStatusForVirtualAppointment()
    {

        $status = 2;
        $uuid = $this->appointmentId;

        $validatedData = $this->validate([
            'meetingLink' => 'required',
        ]);

        DB::beginTransaction();
        DB::connection()->enableQueryLog();
        // $this->counter = $this->counter + $this->size;

        $apptDetails = Appointment::where('uid', $uuid)->first();

        $update = Appointment::where('uid', $uuid)->update(['status' => $status, 'meeting_link' => $this->meetingLink, 'meeting_username' => $this->meetingUsername, 'meeting_password' => $this->meetingPassword]);
        if($update){
            $appointmentData =  Appointment::where('uid', $uuid)->first();
            $createdBy = $appointmentData->created_by;
            $userDetails = User::where('id', $createdBy)->first();
            $companyCode = $userDetails->unique_company_code;
            $tokenUsedCreate = new Token_use;
            $tokenUsedCreate->user_id = $createdBy;
            $tokenUsedCreate->unique_company_code = $companyCode;
            $tokenUsedCreate->used_token = 1;
            $tokenUsedCreate->appointment_id = $appointmentData->id;

            $notificationTitle = '';
            $notificationMsg = '';

            $notificationTitle = 'Appointment is Approved';
            $notificationMsg = 'Your Appointment is Approved';
            $tokenUsedCreate = $tokenUsedCreate->save();
$decreaseToken =  User::where(['id' => $createdBy])->decrement('tokens', 1);
            $data=[
                'name'=> $userDetails->name,
                'msg' => "Virtual Appointment Meeting for Time Slot ".$apptDetails->appointment_timing." has been approved by ".auth()->user()->name." which details are given below",
                'link'=> $this->meetingLink,
                'username' => $this->meetingUsername,
                'password' => $this->meetingPassword,
// 'time_slot' => $apptDetails->appointment_timing,
                // 'professional_name' => auth()->user()->name,
            ];



            // $user['to']=$userDetails->email;

            
            // SOS Appointment
            if($appointmentData->appointmentType == 1){
                $data=[
                'msg' => "We are writing to confirm your upcoming appointment, your health is our top priority, and we want to ensure that you receive the care and attention you need.\n Appointment Details:",
                'datetime'=> $appointmentData->appointmentDate .' '. $appointmentData->appointment_timing,
                'provider' => Auth::user()->name,
                'msg1' => "If you have any questions or need further assistance, please do not hesitate to contact our office at ".Auth::user()->email.".",
                'msg2' => "Thank you for choosing ". Auth::user()->name." for your healthcare needs. We look forward to providing you with the best possible care.",
                'link'=> $this->meetingLink,
                'username' => $this->meetingUsername,
                'password' => $this->meetingPassword,
                'datetime' => $appointmentData->appointmentDate .' '. $appointmentData->appointment_timing
            ];

                $user['to']= $userDetails->email;
                $user['to']= 'shahbazthedeveloper@gmail.com';
                Mail::send('emailtemplates.sosmeeting',$data,function($message) use ($user){
                    $message->to($user['to']);
                    $message->subject('SOS Appointment Confirmed');
                });
            }else{
                // normal appointment
                $user['to']= $userDetails->email;
                Mail::send('emailtemplates.meeting',$data,function($message) use ($user){
                    $message->to($user['to']);
                    $message->subject('Virtual Meeting');
                });
            }

            if($tokenUsedCreate){
                DB::commit();

                $notification= new Notification();
                $notification->sender_id = Auth::user()->id;
                $notification->reciver_id = $createdBy;
                $notification->title = $notificationTitle;
                $notification->msg = $notificationMsg;
                //$notification->row = $insertedUserId;
                $notification->userType = 'Professional';
                $notification->uuid = str::uuid();
                $notification->save();

                session()->flash('message_success', 'Appointment Status updated successfully.');
            }else{
                DB::rollback();
                session()->flash('message_failed', 'Oops something went wrong, please try again');
            }
            return redirect()->to('/professional/appointments');
        }else{
            session()->flash('message_failed', 'No Changes detected please select another status.');
        }
        $queries = DB::getQueryLog();
        // dd($queries);
    }



    public function render()
    {
        // $this->calendarDate = date('M d, Y');
        sleep(1);

        /*
        $query = Appointment::query();
        $query->select('t1.*', 't2.name');
        $query->from('appointments as t1')->leftJoin('users as t2','t1.created_by','=','t2.id')
        ->where('t1.professional_id', $this->userId)->get();
        was not working
        */

        $query = Appointment::select('t1.*', 't2.name')->from( 'appointments as t1')->leftJoin('users as t2', 't1.created_by', 't2.id')
        ->where('t1.professional_id', $this->userId);
        if($this->showNew){
            $this->calendarDateForSelect = '';
            $this->calendarDate = date('Y-m-d');
            $query->where('t1.status', 0);
        }
        if($this->calendarDateForSelect){
            $this->showNew = false;
            $query->whereRaw("DATE(t1.appointmentDate) = '".$this->calendarDateForSelect."'");
        }
        $query = $query->orderBy('id', 'desc')->get();
        $data = $query;

        return view('livewire.appointments-professional', compact('data'));

    }
}
