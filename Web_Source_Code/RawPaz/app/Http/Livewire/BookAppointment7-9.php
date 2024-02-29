<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Livewire\Component;
use App\Livewire\Forms\PostForm;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;


class BookAppointment extends Component
{

    public $userId;
    public $professionalId;
    public $date;
    public $time;

    public function __construct($professionalId)
{
    $this->professionalId = $professionalId;
    
}
  
    public function submit(Request $req)
    {
        $this->userId = $req->user()->id;
        $validatedData = $this->validate([
            'date' => 'required',
            'time' => 'required'
        ]);
  

        $appointmentDate = $this->date .' '.$this->time;
        
        $appointmentDate = date('Y-m-d h:i:s', strtotime($appointmentDate));
        
        $appointmentId = time().str_shuffle(substr('ABCDEFGHIJKLMNOPQRSTUVWXYZ', 0,2)).$this->userId;
        $processedData = [
            'created_by' => $this->userId,
            'appointmentId' => $appointmentId,
            'appointmentDate' => $appointmentDate,
            'professional_id' => $this->professionalId,
            'uid' => Str::uuid()
        ];

        Appointment::create($processedData);

        $notification= new Notification();
        $notification->sender_id = Auth::user()->id;
        $notification->reciver_id = $this->professionalId;
        $notification->title = 'Appointment Booked';
        $notification->msg = 'Appointment is booked to you for the date '.date('d, M, Y', strtotime($appointmentDate)).'';
        //$notification->row = $insertedUserId;
        $notification->userType = 'Employee';
        $notification->uuid = str::uuid();
        $notification->save();

        return redirect()->to('/employee/appointment-done');
    }
  
    public function render()
    {
        // dd($this->professionalId);
        return view('livewire.book-appointment');
    }
}
