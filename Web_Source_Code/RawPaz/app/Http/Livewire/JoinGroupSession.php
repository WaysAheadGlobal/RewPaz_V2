<?php

namespace App\Http\Livewire;

use App\Models\GroupSession;
use App\Models\Professional;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class JoinGroupSession extends Component
{

    public $userId;
    public $professionalId;
    public $date;
    public $daySelected;
    public $timeSelected;
    public $daysPermitted;
    public $termsAccepted;


    public function __construct($professionalId)
{
    $this->professionalId = $professionalId;

}

    public function save(Request $req){
        $this->userId = $req->user()->id;
        $validatedData = $this->validate([
            'daySelected' => 'required',
            'timeSelected' => 'required',
            'termsAccepted' => 'required'
        ]);


        $processedData = [
            'professional_id' => $this->professionalId,
            'employee_id' => $this->userId,
            'day' => $this->daySelected,
            'time' => $this->timeSelected,
            'uuid' => Str::uuid(),
            // 'created_at' => now(),
            'created_by' => $this->userId
        ];

        $isProcessed = GroupSession::create($processedData);

        if($isProcessed){



            $userDetails = User::where('id', $this->professionalId)->first();

            $data=[
                'name'=> $userDetails->name,
                'msg' => 'Group Session has been requested by '. Auth::user()->name .', session details are given below:',
                'day'=> $this->daySelected,
                'time' => $this->timeSelected,
            ];

            $user['to']=$userDetails->email;
           // $user['to']='ranjan.prabhat793@gmail.com';
             Mail::send('emailtemplates.group-session',$data,function($message) use ($user){
                 $message->to($user['to']);
                 $message->subject('Group Session Request');
             });
             $notification= new Notification();
             $notification->sender_id = Auth::user()->id;
             $notification->reciver_id = $this->professionalId;
             $notification->title = 'Group Session Request';
             $notification->msg = 'Group Session Request is sent by '.Auth::user()->name.' to '.$userDetails->name.' on '.date('d, M, Y');
             //$notification->row = $insertedUserId;
             $notification->userType = 'Employee';
             $notification->uuid = Str::uuid();
             $notification->save();
            session()->flash('success', 'Your appointment request has been forwarded to the consultant, and you will be notified via email or a notification as soon as the consultant confirms the appointment. You can monitor the status of your appointment by visiting this link.!');


            // $this->dispatchBrowserEvent('close-modal');
            // $this->dispatchBrowserEvent('close-modal');




        }else{
            session()->flash('error', 'Group Session Booking failed, Please try again!');
        }

    }

    public function render()
    {
        $professionalDetails =  Professional::where('user_id', $this->professionalId)->first();
        return view('livewire.join-group-session', compact('professionalDetails'));
    }

}
