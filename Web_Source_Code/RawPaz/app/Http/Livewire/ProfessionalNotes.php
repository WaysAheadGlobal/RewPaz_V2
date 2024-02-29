<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use App\Models\Note;
use App\Models\Journal;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\CustomStuffs\EncryptionClass;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class ProfessionalNotes extends Component
{
    public $showJournals = false;
    public $isAuthenticatedWithOTP = false;
    public $appointment;
    public $appointmentId;
    public $customerName;
    public $dateSelected;
    public $timeSelected;
    public $timeArr;
    public $serviceProvider;
    public $serviceSeeker;
    public $advice, $notes_datetime, $sessionDurationHr, $sessionDurationMin, $summary, $termsAccepted, $actiononsave, $followUpDate, $followUpHr, $followUpMin;
    public $editId;
    public $journalDate;
    public $i = 4;
    public $inputs = [];
public $otp = [
        'otp1' => '',
        'otp2' => '',
        'otp3' => '',
        'otp4' => ''
    ];

    protected $listeners = ['postAdded'];


    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function openNote($time) {
        // dd($time);
        $this->timeSelected = $time;
        $this->editId = '';
        $this->formReset();
        $this->inputs = [];
    }

    public function openEditNote($time) {
        // dd($time);
        $decryptionObj = new EncryptionClass;
        $this->timeSelected = $time;
        $note = Note::where('appointmentId', $this->appointmentId)
        ->whereRaw("TIME(notes_datetime) = '".$this->timeSelected."'")->first();
        $this->editId = $note->id;
        $this->sessionDurationHr = explode(" ",$note->session_duration)[0];
        $this->sessionDurationMin = explode(" ",$note->session_duration)[2];
        $this->summary = $decryptionObj->decryptString($note->summary);
        $this->followUpDate = ($note->follow_up) ? date('Y-m-d H:i:s', strtotime($note->follow_up)) : '';
        $this->followUpHr = $note->follow_up_hour;
        $this->followUpMin = $note->follow_up_minute;
        $this->termsAccepted = true;
        if($note->advice){
            $this->advice = explode(',', $note->advice);
            $this->i = count($this->advice)+1;
            $this->inputs = [];
            // dd($this->i);
        }

        // dd($this->advice);
        // $this->advice1  =
    }

    public function openViewJournal($uid) {
        $decryptionObj = new EncryptionClass;
        $journal = Journal::where('uid', $uid)->first();
        $this->summary = $decryptionObj->decryptString($journal->summary);
        $this->journalDate = $journal->journal_datetime;
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

    public function showJournals(){
        $this->showJournals = true;
    }

    public function hideJournals(){
        $this->showJournals = false;
    }



    public function postAdded($data){
        $data = date($data);
        $this->dateSelected = date(('Y-m-d'), strtotime($data));
    }

    public function dehydrate()
    {
        $this->dispatchBrowserEvent('initSomething');
    }

    /*
    public function __construct($data) {
        // echo $data;
        // dd($data);
        // $this->appointment = $data['appointment'];
    }
    */

    public function mount($data){
        $this->customerName = $data['customerName'];
        $this->appointmentId = $data['appoitmentId'];
        $otpvalidationsession =  session()->get('authenticatedWithOtp');
        if($otpvalidationsession){
            $this->isAuthenticatedWithOTP = true;
        }
        $this->serviceProvider = $data['serviceProvider'];
        $this->serviceSeeker = $data['serviceSeeker'];

        // $this->customerName = 'shaha';
        $this->dateSelected = date('Y-m-d');
        $this->timeArr = [
            ['12hr' => '08.00 AM', '24hr' => '08:00:00'],
            ['12hr' => '09.00 AM', '24hr' => '09:00:00'],
            ['12hr' => '10.00 AM', '24hr' => '10:00:00'],
            ['12hr' => '11.00 AM', '24hr' => '11:00:00'],
            ['12hr' => '12.00 PM', '24hr' => '12:00:00'],
            ['12hr' => '01.00 PM', '24hr' => '13:00:00'],
            ['12hr' => '02.00 PM', '24hr' => '14:00:00'],
            ['12hr' => '03.00 PM', '24hr' => '15:00:00'],
            ['12hr' => '04.00 PM', '24hr' => '16:00:00'],
            ['12hr' => '05.00 PM', '24hr' => '17:00:00'],
            ['12hr' => '06.00 PM', '24hr' => '18:00:00'],
            ['12hr' => '07.00 PM', '24hr' => '19:00:00'],
            ['12hr' => '08.00 PM', '24hr' => '20:00:00'],
        ];
    }

    public function updateDate($action){
        $this->appointment  = $this->appointment;
        $date = Carbon::createFromDate($this->dateSelected);
        if($action == 'increment'){
            $this->dateSelected = $date->addDays(1);
        }else{
            $this->dateSelected = $date->subDays(1);
        }
        $this->dateSelected = date('Y-m-d', strtotime($this->dateSelected));
    }

    public function submit($action)
    {
        $this->notes_datetime = $this->dateSelected.' '.$this->timeSelected;
        $this->actiononsave = $action;
        $encryptionObj = new EncryptionClass;
        $validatedData = $this->validate([
                'customerName' => 'required',
                'dateSelected' => 'required',
                'sessionDurationHr' => 'required',
                'sessionDurationMin' => 'required',
                'sessionDurationMin' => 'required',
                'summary' => 'required',
                'termsAccepted' => 'required',
                // 'advice.*' => 'required',
            ],
            [
                'sessionDurationHr' => 'Session Duration Hour is required',
                'sessionDurationMin' => 'Session Duration Minute is required',
                'summary' => 'Summary Minute is required',
                'termsAccepted' => 'Please accept the terms',
                // 'advice.0.required' => 'Advice field is required',
                // 'advice.*.required' => 'phone field is required',
            ]
        );
        $processData = new Note();
        $processData->session_duration = $this->sessionDurationHr.' hour '.$this->sessionDurationMin.' minutes';
        $processData->notes_datetime = $this->notes_datetime;
        $processData->summary = $encryptionObj->encryptString($this->summary);
        if($this->advice){
            $processData->advice = implode(',',$this->advice);
        }
        if($this->followUpDate){
            $processData->follow_up = $this->followUpDate;
        }
        $processData->follow_up_hour = $this->followUpHr;
        $processData->follow_up_minute = $this->followUpMin;
        $processData->advice = $this->advice;
        $processData->is_shared = ($this->actiononsave == 'save and share') ? 1 : 0;
        if($this->editId){
            $processData->updated_by = auth()->user()->id;
            $processData->id = $this->editId;
            $processData = $processData->toArray();
            $processData['updated_at'] = date('Y-m-d H:i:s');
            $processData['advice'] = ($processData['advice']) ? implode(',', $processData['advice']) : '';
            $id = Note::where('id', $this->editId)->update($processData);
        }else{
            $processData->created_by = auth()->user()->id;
            $processData->created_at = now();
            if($this->advice){
                $processData->advice = implode(',', $this->advice);
            }
            $processData->professional_id = $this->serviceProvider;
            $processData->appointmentId = $this->appointmentId;
            $processData->employee_id = $this->serviceSeeker;
            $processData->uid = Str::uuid();
            $id = $processData->save();

            $notification= new Notification();
            $notification->sender_id = Auth::user()->id;
            $notification->reciver_id = $processData->employee_id;
            $notification->title = 'Note Shared';
            $notification->msg = 'New Note is shared with you on '.date('d, M, Y', strtotime($processData->created_at)).'';
            //$notification->row = $insertedUserId;
            $notification->userType = 'Professional';
            $notification->uuid = str::uuid();
            $notification->save();
        }
        if($id){
            $this->formReset();
            $this->dispatchBrowserEvent('close-modal');
            session()->flash('success', 'Note has een '.($this->actiononsave == 'save and share') ? 'Saved and Shared with Client' : 'Saved'.' Successfully.');
        }else{
            session()->flash('error', 'Failed to save the Note, please try again.');
        }
    }

    public function formReset(){
        $inputs = [];
        $this->advice = '';
        $this->sessionDurationHr = '';
        $this->sessionDurationMin = '';
        $this->summary = '';
        $this->termsAccepted = '';
        $this->actiononsave = '';
        $this->followUpDate = '';
        $this->followUpHr = '';
        $this->followUpMin = '';
    }

    public function openOtpModal()
    {
        if(!$this->isAuthenticatedWithOTP){
            $this->dispatchBrowserEvent('open-otp-modal');
        }
    }

    public function render()
    {
        $notes = Note::where('appointmentId', $this->appointmentId)->get();
        $journals = Journal::where('appointmentId', $this->appointmentId)
        ->whereRaw("DATE(journal_datetime) = '".$this->dateSelected."'")->get();
        return view('livewire.professional-notes', compact('notes', 'journals'));
    }
}
