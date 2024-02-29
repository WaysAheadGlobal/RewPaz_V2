<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Notification;
use App\Models\Professional;
use App\Models\User;
use App\Models\Virtual_Meeting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class VirtualMeetingCreate extends Component
{
    public $userId,$professionalId,$meetingLink;
    public $meetingUsername = '';
    public $meetingPassword = '';


    public function __construct($professionalId)
    {
        $this->professionalId = $professionalId;

    }

    public function mount(){
        $this->userId = auth()->user()->id;
    }


    public function submit()
    {

        $validatedData = $this->validate([
            'meetingLink' => 'required',
        ]);


        $professionalDetails = User::where('id', $this->professionalId)->first();

        $processedData = [
            'created_by' => $this->userId,
            'link_sent_to' => $this->professionalId,
            'meeting_link' => $this->meetingLink,
            'username' => $this->meetingUsername,
            'password' => $this->meetingPassword,
        ];
        //dd($processedData);
        Virtual_Meeting::create($processedData);
        $meeting_time= Carbon::now()->addMinutes(30);
        $data=[
            'name'=> $professionalDetails->name,
            'msg' => "Thank you for showing your interest with us , we would like to schedule a meeting for further persual.PFB meeting link.
            Thank you for your attention & Looking forward to meet. Meeting schedule is ".$meeting_time.".",
            'link'=> $this->meetingLink,
            'username' => $this->meetingUsername,
            'password' => $this->meetingPassword,

        ];

       // $user['to']='tech@waysaheadglobal.com';
        $user['to']=$professionalDetails->email;
        Mail::send('emailtemplates.meeting',$data,function($message) use ($user){
            $message->to($user['to']);
            $message->subject('Virtual Meeting');
        });

      //  Appointment::create($processedData);

        $notification= new Notification();
        $notification->sender_id = Auth::user()->id;
        $notification->reciver_id = $this->professionalId;
        $notification->title = 'Virtual Meeting Link';
        $notification->msg = 'Our platform admin has requested for a meeting and a meeting link has been shared on your registered mail. Meeting time '.$meeting_time;
        //$notification->row = $insertedUserId;
        $notification->userType = 'Admin';
        $notification->uuid = str::uuid();
        $suceess = $notification->save();
        if($suceess){
            session()->flash('success', 'Virtual Meeting Details Shared successfully');
        }else{
            session()->flash('error', 'Process failed please try again!.');
        }
        return redirect()->to('/admin/vettinglists');

    }


    public function render()
    {
        return view('livewire.admin.virtual-meeting-create');
    }
}
