<?php

namespace App\Http\Livewire\Chat;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use App\CustomStuffs\EncryptionClass;

use Livewire\Component;

class ChatRoomEmployee extends Component
{
    public $users, $professionaletails, $userId, $activeChatUser, $senderName, $senderRole, $message;

    public function mount(){
        $this->userId = auth()->user()->id;
    }

    public function openUser($chatUserId, $chatuserName){
        $this->activeChatUser = $chatUserId;
        $this->senderName = $chatuserName;
    }


    public function render()
    {
        /*
        $chatUsers = DB::table('appointments')
         ->join('users', 'users.id', '=', 'appointments.created_by')
         ->select('users.id', 'users.name')
         ->where('professional_id', $this->userId)
         ->groupBy('users.id','users.name')
         ->get(['users.id','users.name', 'appointments.id']);
        */
         $chatUsers = DB::table('appointments')
         ->join('users', 'users.id', '=', 'appointments.professional_id')
         ->select('users.id', 'users.name')
         ->where('created_by', $this->userId)
         ->groupBy('users.id','users.name')
         ->get(['users.id','users.name', 'appointments.id']);

         $receiverId = $this->userId;
         $messages = [];
         $senderId = $this->activeChatUser;
         if($this->activeChatUser){
            $messages = Message::query()
            ->where(function ($query) use ($senderId, $receiverId) {
                $query->where('user_id', $senderId)
                    ->where('receiver_id', $receiverId);
            })
            ->orWhere(function ($query) use ($senderId, $receiverId) {
                $query->where('user_id', $receiverId)
                    ->where('receiver_id', $senderId);
            })->get();
         }

        //  dd($messages);

        return view('livewire.chat.chat-room-employee', compact('chatUsers', 'messages'));
    }

    public function sendMessage()
    {
        $encryptionObj = new EncryptionClass;
        Message::create([
            'user_id' => auth()->user()->id,
            'receiver_id' => $this->activeChatUser,
            'message' => $encryptionObj->encryptString($this->message)
        ]);
        $this->reset('message');
    }
    
}
