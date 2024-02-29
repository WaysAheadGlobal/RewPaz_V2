<?php

namespace App\Http\Livewire;
use App\Models\Note;
use App\Models\Journal;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\CustomStuffs\EncryptionClass;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class EmployeeJournals extends Component
{

    public $showJournals = false;
    public $isAuthenticatedWithOTP = false;
    public $defaultAction;
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
    public $noteDate;
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

    public function openNote($time, $id) {
        // dd($time);
        $this->timeSelected = $time;
        $this->editId = '';
        $this->formReset();
        $this->inputs = [];
    }

    public function openEditNote($uid) {
        $decryptionObj = new EncryptionClass;
        $note = Journal::where('appointmentId', $this->appointmentId)
        ->where('uid', $uid)->first();
        $this->editId = $note->id;
        $this->summary = $decryptionObj->decryptString($note->summary);
        $this->termsAccepted = true;
    }
    public function openViewNote($uid) {
        $decryptionObj = new EncryptionClass;
        $note = Note::where('uid', $uid)->first();
        $this->summary = $decryptionObj->decryptString($note->summary);
        $this->advice = explode(',',$note->advice);
        $this->noteDate = date('d, M, Y', strtotime($note->notes_datetime));
        $this->sessionDurationHr = explode(' ', $note->session_duration)[0];
        $this->sessionDurationMin = explode(' ', $note->session_duration)[2];
        $this->followUpDate = $note->follow_up;
        $this->followUpHr = $note->follow_up_hour;
        $this->followUpMin = $note->follow_up_minute;
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

        $this->defaultAction = $data['defaultAction'];
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
        if($this->defaultAction == 'list'){
            $this->showJournals = true;
        }else{
            $this->showJournals = false;
        }
    }


    public function openOtpModal()
    {
        if(!$this->isAuthenticatedWithOTP){
            $this->dispatchBrowserEvent('open-otp-modal');
        }
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

        $validatedData = $this->validate([
                'customerName' => 'required',
                'dateSelected' => 'required',
                'summary' => 'required',
                'termsAccepted' => 'required',
                // 'advice.*' => 'required',
            ],
            [
                'summary' => 'Summary Minute is required',
                'termsAccepted' => 'Please accept the terms',
                // 'advice.0.required' => 'Advice field is required',
                // 'advice.*.required' => 'phone field is required',
            ]
        );
        $encryptionObj = new EncryptionClass;
        $processData = new Journal();
        $processData->journal_datetime = $this->dateSelected.' '.$this->timeSelected;
        $processData->summary =  $encryptionObj->encryptString($this->summary);
        $processData->is_shared = 1;
        if($this->editId){
            $processData->updated_by = auth()->user()->id;
            $processData->id = $this->editId;
            $processData = $processData->toArray();
            $processData['updated_at'] = date('Y-m-d H:i:s');
            $id = Journal::where('id', $this->editId)->update($processData);
        }else{
            $processData->created_by = auth()->user()->id;
            $processData->created_at = now();
            $processData->professional_id = $this->serviceProvider;
            $processData->appointmentId = $this->appointmentId;
            $processData->employee_id = $this->serviceSeeker;
            $processData->uid = Str::uuid();
            $id = $processData->save();

            $notification= new Notification();
            $notification->sender_id = Auth::user()->id;
            $notification->reciver_id = $processData->professional_id;
            $notification->title = 'Journal Shared';
            $notification->msg = 'New Journal is shared with you on '.date('d, M, Y', strtotime($processData->created_at)).'';
            //$notification->row = $insertedUserId;
            $notification->userType = 'Employee';
            $notification->uuid = str::uuid();
            $notification->save();
        }
        if($id){
            $this->formReset();
            $this->dispatchBrowserEvent('close-modal');
            session()->flash('success', ' Journal has been shared successfully.');
        }else{
            session()->flash('error', 'Failed to save the Journal, please try again.');
        }
    }

    public function formReset(){
        $this->summary = '';
        $this->termsAccepted = '';
    }

    public function render()
    {
        $notes = Note::where('appointmentId', $this->appointmentId)->get();
        $journals = Journal::where('appointmentId', $this->appointmentId)
        ->whereRaw("DATE(journal_datetime) = '".$this->dateSelected."'")->get();
        return view('livewire.employee-journals', compact('notes', 'journals'));
    }

}
