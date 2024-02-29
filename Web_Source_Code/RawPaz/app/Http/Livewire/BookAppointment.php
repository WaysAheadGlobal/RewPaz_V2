<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Livewire\Component;
use App\Livewire\Forms\PostForm;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Notification;
use App\Models\Professional;
use Illuminate\Support\Facades\Auth;


class BookAppointment extends Component
{

    public $userId;
    public $professionalId;
    public $date;
    public $daysPermitted;
    public $time;
    public $sessionType = 'chat';

protected $listeners = [
     'setSessionType'
];
//
public function setSessionType($sessionType)
{
    $this->sessionType = $sessionType;
}


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


        $date = date($this->date);
        $dayName = strtoupper(date('D', strtotime($date)));
        $dayspermittedForProcess =  explode(',', $this->daysPermitted);
        // dd($dayName);
        // dd($dayspermittedForProcess);


        if(!in_array($dayName,$dayspermittedForProcess)){
            return session()->flash('dayError', 'Please Select The Correct Day to Book Appointment');
        }

        /*
        $date = date($date);
        print_r($date);


        echo $dayName;

        print_r($dayspermittedForProcess);

        if(in_array($dayName,$dayspermittedForProcess)){
            echo 'yews';
        }else{
            'npe';
        }
        */

        $appointmentDate = $this->date;

        $appointmentDate = date('Y-m-d', strtotime($appointmentDate));

        $appointmentId = time().str_shuffle(substr('ABCDEFGHIJKLMNOPQRSTUVWXYZ', 0,2)).$this->userId;
        $processedData = [
            'created_by' => $this->userId,
            'appointmentId' => $appointmentId,
            'appointmentDate' => $appointmentDate,
            'appointment_timing' => $this->time,
            'professional_id' => $this->professionalId,
            'session' => $this->sessionType,
            'uid' => Str::uuid()
        ];

        // dd($processedData);

        // dd($processedData);

        Appointment::create($processedData);

        $notification= new Notification();
        $notification->sender_id = Auth::user()->id;
        $notification->reciver_id = $this->professionalId;
        $notification->title = 'Appointment Booked';
        $notification->msg = ucwords($this->sessionType).' Session Appointment is booked to you for the date '.date('d, M, Y', strtotime($appointmentDate)).'';
        //$notification->row = $insertedUserId;
        $notification->userType = 'Employee';
        $notification->uuid = str::uuid();
        $notification->save();
        return redirect()->to('/employee/appointment-done');
    }

    public function render()
    {
        $professionalDetails =  Professional::where('user_id', $this->professionalId)->first();
        $this->daysPermitted = $professionalDetails['availability_days'];
        // dd($professionalDetails);
        return view('livewire.book-appointment', compact('professionalDetails'));
    }
}
