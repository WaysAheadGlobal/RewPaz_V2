<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Appointment;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use App\Models\Notification;

class AppointmentsEmployee extends Component
{
    public $userId;
public $feedbackDescription, $rating, $appointmentId;

    public function mount() {
        $this->userId = Auth::user()->id;
    }
    
    protected $listeners = [ 'setRating' ];

   public function setRating($rating){
        $this->rating = $rating;
   }
   public function resetFeedbackForm($uid){
        $this->rating = '';
        $this->appointmentId = $uid;
        $this->feedbackDescription = '';
   }

   public function submitFeedback()
    {
        /*
        $validatedData = $this->validate([
            'feedbackDescription' => 'required'
        ],
        [
            'feedbackDescription' => 'Please enter your feedback',
            ]
        );
        */
        if(!$this->rating){
            return session()->flash('ratingError', 'Please Select your Rating');
        }

        $appointmentDetails = Appointment::where('uid', $this->appointmentId)->first();

        $processData = new Feedback();
        $processData->appointmentId = $this->appointmentId;
        $processData->description = $this->feedbackDescription;
        $processData->rating =  $this->rating;

        $processData->created_by = auth()->user()->id;
        $processData->created_at = now();

        $processData->professional_id =$appointmentDetails->professional_id;
        $processData->employee_id = $appointmentDetails->created_by;

        $processData->uid = Str::uuid();
        $id = $processData->save();

        if($id){

            $notification= new Notification();
            $notification->sender_id = Auth::user()->id;
            $notification->reciver_id = $processData->professional_id;
            $notification->title = 'New Feedback from User';
            $notification->msg = 'You Recieved a new Feedback';
            //$notification->row = $insertedUserId;
            $notification->userType = 'Employee';
            $notification->uuid = Str::uuid();
            $notification->save();

        session()->flash('success', 'Thanks for your valuable Feedback.');
        $this->dispatchBrowserEvent('close-modal');
        }else{
            session()->flash('error', 'Failed to save your Feedback, please try again.');
$this->dispatchBrowserEvent('close-modal');
        }


        // dd($rating);
    }

    public function render()
    {
        // $data = Appointment::where('created_by', auth()->user()->id)->orderBy('id', 'desc')->get();
        $data = Appointment::select('t1.*', 't2.name', 't3.expertise')->from( 'appointments as t1')
        ->leftJoin('users as t2', 't1.professional_id', 't2.id')
        ->leftJoin('professionals as t3', 't1.professional_id', 't3.user_id')
        ->where('t1.created_by', $this->userId)
        ->orderBy('t1.id', 'desc')->get();
        return view('livewire.appointments-employee', compact('data'));
    }
}
