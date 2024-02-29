<?php

namespace App\Http\Livewire;
use App\Models\Message;
use Livewire\Component;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CustomStuffs\EncryptionClass;

class Messages extends Component
{
	public $message;
	public $data;
	public $sender;
	public $receiver;
	public $role;
	public $senderName;
	public $senderRole;
	public $appoitmentId;
    public $isAuthenticatedWithOTP = false;
    public $otp = [
        'otp1' => '',
        'otp2' => '',
        'otp3' => '',
        'otp4' => ''
    ];

    public function mount($data){
        $this->role = auth()->user()->role;

        $otpvalidationsession =  session()->get('authenticatedWithOtp');
        if($otpvalidationsession){
            $this->isAuthenticatedWithOTP = true;
        }else{
            $this->dispatchBrowserEvent('open-otp-modal');
        }

        $this->senderName = $data['senderName'];
        $this->senderRole = $data['senderRole'];
        $this->appoitmentId = $data['appoitmentId'];
        if($this->role == 'Employee'){
            $this->sender = $data['serviceProvider'];
        }
        if($this->role == 'Professional'){
            $this->sender = $data['serviceSeeker'];
        }
    }

    public function render()
    {
        // $messages = Message::where('user_id', 5)->get();
        // $messages = Message::with('user')->latest()->take(10)->get()->sortBy('id');
        // $messages = Message::where(['user_id' => auth()->user()->id, 'receiver_id' => $this->sender])->orderBy('id', 'desc')->dd();
        
        $receiverId = auth()->user()->id;
        $senderId = $this->sender;
        $messages = Message::query()
    ->where(function ($query) use ($senderId, $receiverId) {
        $query->where('user_id', $senderId)
              ->where('receiver_id', $receiverId);
    })
    ->orWhere(function ($query) use ($senderId, $receiverId) {
        $query->where('user_id', $receiverId)
              ->where('receiver_id', $senderId);
    })->get();

        return view('livewire.messages', compact('messages'));
    }

    public function sendMessage()
    {
        $encryptionObj = new EncryptionClass;
        Message::create([
            'user_id' => auth()->user()->id,
            'receiver_id' => $this->sender,
            'message' => $encryptionObj->encryptString($this->message)
        ]);
        $this->reset('message');
    }

    public function openOtpModal()
    {
        if(!$this->isAuthenticatedWithOTP){
            $this->dispatchBrowserEvent('open-otp-modal');
        }
    }

    public function dehydrate()
    {
        $this->dispatchBrowserEvent('initSomething');
    }

    public function submitOtp(){
        $otpAvailable = '1234';
        $otp =  $this->otp['otp1'].$this->otp['otp2'].$this->otp['otp3'].$this->otp['otp4'];
        if($otp == $otpAvailable){
            session()->put('authenticatedWithOtp', true);
            $this->isAuthenticatedWithOTP = true;
            $this->dispatchBrowserEvent('close-modal');
        }else{
            session()->flash('otpfailed', 'Please enter valid OTP');
        }
        // $otpSubmitted = $otp;
    }



}
