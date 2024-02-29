<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Appointment;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProfessionalAvailability extends Component
{
    public $appointmentId, $serviceSeeker, $appointmentCodeId, $appointmentDate, $session = 'chat', $newProfessional_id, $newProfessional_name;
    public $professionals;
    public $i;


    public function openModalForUpdate($uid) {
        $this->appointmentId = $uid;
        $appointment = Appointment::select('t1.*', 't2.name as clientName', 't3.expertise')->from( 'appointments as t1')
        ->leftJoin('users as t2', 't1.created_by', 't2.id')
        ->leftJoin('professionals as t3', 't1.professional_id', 't3.user_id')
        ->where('t1.uid', $uid)->first();

        $this->serviceSeeker = $appointment->clientName;
        $this->appointmentDate = $appointment->appointmentDate;
        $this->appointmentCodeId = $appointment->appointmentId;
        $this->session = $appointment->session;

        $this->professionals = Professional::select('t1.*','t2.name', 't2.id as userId')->from( 'professionals as t1')->leftJoin('users as t2', 't1.user_id', 't2.id')
        ->where('t1.expertise', $appointment->expertise)
        ->where('t1.user_id', '!=', $appointment->professional_id)->get();


    }

    public function updateProfessional($data){

        // dd($this->appointmentId);
        // dd($this->newProfessional_id);

        if($this->newProfessional_id){
        $oldDetails = Appointment::where('uid', $this->appointmentId)->first();
        $oldProfessional = $oldDetails->professional_id;
        $processedData = [
            'professional_id' => $this->newProfessional_id,
'status' => 0,
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => auth()->user()->id
        ];
        /*
        if($oldProfessionalsLog = $oldDetails->professional_assignment_logs){
            $oldProfessionalsLog = explode(',', $oldDetails->professional_assignment_logs);
            array_push($oldProfessionalsLog, $oldProfessional);
            $oldProfessionalsLog = implode(',', $oldProfessionalsLog);
            $processedData['professional_assignment_logs'] = [$oldProfessionalsLog];
        }
        */
        $update = Appointment::where('uid', $this->appointmentId)->update($processedData);
        if($update){
            session()->flash('success', 'Appointment swithched to a new Professional succcessfully!.');
            $this->dispatchBrowserEvent('close-modal');
            $this->newProfessional_id = '';


            $notification= new Notification();
            $notification->sender_id = Auth::user()->id;
            $notification->reciver_id = $oldDetails->created_by;
            $notification->title = 'Appointment Reassigned to New Professional';
            $notification->msg = 'Your Appointment (Appointment No '.$oldDetails->appointmentId.' ) is Reassigned to New Professional';
            //$notification->row = $insertedUserId;
            $notification->userType = 'Employee';
            $notification->uuid = Str::uuid();
            $notification->save();
        }else{
            session()->flash('error', 'Process failed please try again!.');
            $this->dispatchBrowserEvent('close-modal');
            $this->newProfessional_id = '';
        }
        }

    }

    public function render()
    {
        $data = Appointment::select('t1.*', 't2.name as professionalName','t3.expertise')->from( 'appointments as t1')
        ->leftJoin('users as t2', 't1.professional_id', 't2.id')
        ->leftJoin('professionals as t3', 't1.professional_id', 't3.user_id')
        ->where('t1.status', 2)
        ->orWhere('t1.status', 3)->get();
        return view('livewire.admin-professional-availability', compact('data'));
    }
}
