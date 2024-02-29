<?php

namespace App\Http\Livewire;

use App\Models\GroupSession;
use App\Models\Professional;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\Component;

use App\Models\Notification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class ProfessionalGroupSesssion extends Component
{
    public $userId, $day, $time;
    public $items;
    public $selectAllCheckbox;
    public $selectedItems = [];
    public $meetingLink, $meetingUsername, $meetingPassword;
    // Methods for selecting all and updating
    public function selectAll()
    {
        if($this->selectAllCheckbox){
            $this->selectedItems = $this->items->pluck('id')->toArray();
        }else{
            $this->selectedItems = [];
        }
    }

    public function updateSelectedItems()
    {
        // Perform your update logic here using $this->selectedItems
        // For example, you can update the database records.
        // After the update, you can reset the selectedItems array.
        $validatedData = $this->validate([
            'meetingLink' => 'required',
        ]);

        foreach ($this->selectedItems as $item) {
            $groupSessionData =  GroupSession::where('id', $item)->first();
            $userDetails = User::where('id', $groupSessionData->created_by)->first();
            $name = $userDetails->name;
            $email = $userDetails->email;
            # code...
            $update = GroupSession::where('id', $item)->update(['status' => 1, 'meeting_link' => $this->meetingLink, 'meeting_username' => $this->meetingUsername, 'meeting_password' => $this->meetingPassword]);
            if($update){

                $notificationTitle = 'Group Session is Approved';
                $notificationMsg = 'Your Group Session is Approved for Time Slot '.$groupSessionData->time.' and Day '.$groupSessionData->day.' on '.date('d, m, Y');
                $notification= new Notification();
                $notification->sender_id = Auth::user()->id;
                $notification->reciver_id = $userDetails->id;
                $notification->title = $notificationTitle;
                $notification->msg = $notificationMsg;
                //$notification->row = $insertedUserId;
                $notification->userType = 'Professional';
                $notification->uuid = Str::uuid();
                $notification->save();

                $data=[
                    'name'=> $name,
                    'msg' => "I'm pleased to inform you that the group session you requested has been approved for the time slot of ".$groupSessionData->time." on ".$groupSessionData->day.". This approval was granted by ".auth()->user()->name.", and you can find the meeting details here:",
                    // 'day'=> $groupSessionData->day,
                    // 'time'=> $groupSessionData->time,
                    'link'=> $this->meetingLink,
                    'username' => $this->meetingUsername,
                    'password' => $this->meetingPassword,
                    // 'time_slot' => $apptDetails->appointment_timing,
                    // 'professional_name' => auth()->user()->name,
                ];

                $subjectStr = 'Approval of Group Session Request - Time Slot :'.$groupSessionData->time.' on '.$groupSessionData->day;

                $user['to']= $email;
                //$user['to']= 'ranjan.prabhat793@gmail.com';
                $user['subject']= $subjectStr;
                Mail::send('emailtemplates.meeting',$data,function($message) use ($user){
                    $message->to($user['to']);
                    $message->subject($user['subject']);
                });
                session()->flash('message_success', 'Group Session Meeting Link is sent Successfully.');
                $this->selectedItems = [];
                $this->meetingLink = '';
                $this->meetingUsername = '';
                $this->meetingPassword = '';
            }
        }


    }

    public function render()
    {
        $this->userId = auth()->user()->id;
        $data =GroupSession::select('t1.*', 't2.name')->from('group_sessions as t1')
            ->leftJoin('users as t2', 't1.created_by', 't2.id')
            ->where('t1.professional_id', $this->userId);
            if($this->day){
                $data->where('t1.day', $this->day);
            }
            if($this->time){
                $data->where('t1.time', $this->time);
            }
        $this->items = $data;
        $data =  $data->orderBy('id', 'desc')->get();
        $this->items = $data;
        $professionalDetails = Professional::where('user_id', $this->userId)->first();
        return view('livewire.professional-group-sesssion', compact('data', 'professionalDetails'));
    }
}
