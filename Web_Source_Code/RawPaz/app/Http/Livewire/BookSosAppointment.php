<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Appointment;
use App\Models\Notification;


class BookSosAppointment extends Component
{
    public $userId, $professionalId, $sosAppointmentType;


    public function __construct($professionalId)
    {
        $this->professionalId = $professionalId;

    }


    public function mount(){
        $this->userId = auth()->user()->id;
// $this->bookSOSAppointment = 'chat';
    }



    public function openModalForUpdate($professionalId){
        $this->professionalId = $professionalId;
    }

    public function bookSOSAppointment(){

        $appointmentId = time().str_shuffle(substr('ABCDEFGHIJKLMNOPQRSTUVWXYZ', 0,2)).$this->userId;

        $appointmentDate = date('Y-m-d H:i:s', strtotime("30 minutes", strtotime(date('Y-m-d H:i:s'))));

        $appointmentTimeSlot = date('h:i a'). ' - ' .date('h:i a', strtotime($appointmentDate));

        // dd($appointmentTimeSlot);

        $validatedData = $this->validate(
            ['sosAppointmentType' => 'required'],
            ['sosAppointmentType' => 'Please Select any SOS Appointment Session Type'],
        );

        $processedData = [
            'created_by' => $this->userId,
            'appointmentId' => $appointmentId,
            'appointmentDate' => $appointmentDate,
            'appointment_timing' => $appointmentTimeSlot,
            'professional_id' => $this->professionalId,
            'uid' => Str::uuid(),
            'appointmentType' => 1,
            'session' => $this->sosAppointmentType
        ];


        $appointsave = Appointment::create($processedData);
        if($appointsave){
            $notification= new Notification();
            $notification->sender_id = Auth::user()->id;
            $notification->reciver_id = $this->professionalId;
            $notification->title = 'SOS Appointment Booked';
            $notification->msg = 'SOS Appointment is booked to you for the date '.date('d, M, Y', strtotime($appointmentDate)).' time '.$appointmentTimeSlot;
            //$notification->row = $insertedUserId;
            $notification->userType = 'Employee';
            $notification->uuid = str::uuid();
            $notification->save();

            session()->flash('success', 'SOS Appointment Request sent Successfully!');
        }else{
            session()->flash('error', 'Process failed please try again!.');
        }
    }
    public function render()
    {
        return view('livewire.book-sos-appointment');
    }
}
