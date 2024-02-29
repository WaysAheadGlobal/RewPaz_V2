<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Professional;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Appointment;
use App\Models\Notification;

class Professionals extends Component
{
    protected $paginationTheme = 'bootstrap';
    protected $totalItemFetched = 0;
    public $pagination = 10;
    public $orderColumn = "expertise";
    public $sortOrder = "asc";
    public $filteration = [
        'experience' => '',
        'availabilityDays' => '',
        'availabilitySlot' => '',
        'group_session' => '',
        'distanceRange' => '',
        'language' => '',
        'gender' => '',
    ];

public $userId, $professionalId, $sosAppointmentType;

public function configure(): void
{
    $this->setPaginationMethod('simple');
}

    public $searchTerm = '';
    use WithPagination;

    public function updatedSearchTerm()
    {
        $this->resetPage();
    }

    public function openModalForUpdate($professionalId){
        $this->professionalId = $professionalId;
    }

    public function bookSOSAppointment(){
        $appointmentId = time().str_shuffle(substr('ABCDEFGHIJKLMNOPQRSTUVWXYZ', 0,2)).$this->userId;

        $appointmentDate = date('Y-m-d H:i:s', strtotime("30 minutes", strtotime(date('Y-m-d H:i:s'))));

        $appointmentTimeSlot = date('h:i a'). ' - ' .date('h:i a', strtotime($appointmentDate));

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
            // 'uid' => date('Y-m-d H:i:s'),
            'appointmentType' => 1,
            'session' => $this->sosAppointmentType
        ];

        $appointsave = Appointment::create($processedData);
        if($appointsave){

            $notification= new Notification();
            $notification->sender_id = Auth::user()->id;
            $notification->reciver_id = $this->professionalId;
            $notification->title = 'SOS Appointment Booked';
            $notification->msg = 'SOS Appointment is booked to you for the date '.date('d, M, Y', strtotime($appointmentDate)).' time '.date('H:i a', strtotime($appointmentDate));
            //$notification->row = $insertedUserId;
            $notification->userType = 'Employee';
            $notification->uuid = str::uuid();
            $notification->save();

            session()->flash('success', 'SOS Appointment Requested successfully');
        }else{
            session()->flash('error', 'Process failed please try again!.');
        }
    }

    public function mount(){
        $this->userId = auth()->user()->id;
    }

    public function render()
    {
        sleep(1);

        DB::enableQueryLog();

        $result= User::where('users.id', Auth::user()->id)->join('employees', 'employees.user_id','=','users.id')->get()->first();
        $query = Professional::from( 'professionals as t1')->leftJoin('users as t2', 't1.user_id', 't2.id');
        if(!empty($this->searchTerm)){
            $query->orWhere('t1.expertise','like',"%".$this->searchTerm."%");
            $query->orWhere('t1.gender','like',"%".$this->searchTerm."%");
            $query->orWhere('t2.name','like',"%".$this->searchTerm."%");
        }
        if(!empty($this->filteration['availabilityDays'])){
            $query->where('t1.availability_days','like',"%".$this->filteration['availabilityDays']."%");
        }
        if(!empty($this->filteration['availabilitySlot'])){
            $query->where('t1.availability_time','like',"%".$this->filteration['availabilitySlot']."%");
        }
        if(!empty($this->filteration['language'])){
            $query->where('t1.language','like',"%".$this->filteration['language']."%");
        }
        if(!empty($this->filteration['experience'])){
            $query->where('t1.experience_year',  '>=',$this->filteration['experience']);
        }
        if(!empty($this->filteration['gender'])){
            $query->where('t1.gender',ucfirst($this->filteration['gender']));
        }
        if(!empty($this->filteration['group_session'])){
            $query->where('t1.is_group_session_provided','>=',$this->filteration['group_session']);
        }
        // if($result->household_service){
        //     $expertiseArr = explode(',', $result->household_service);
        //     foreach($expertiseArr as $expertise){
        //         $query->orWhere('t1.expertise','LIKE', '%'.$expertise.'%');
        //     }
        // }
        // query->whereIn('t1.expertise',$expertiseArr);
        $query->where('t1.language','LIKE', '%'.$result->language_preferred.'%');
        // ->where('t1.availability_days','LIKE', '%'.$result->suitable_day.'%')
        // ->where('t1.availability_time','LIKE', '%'.$result->preferred_time_slot.'%');
        $query->orderby($this->orderColumn,$this->sortOrder);

    //    $query->dd();




        $employees = $query->paginate($this->pagination);

        $qlog = DB::getQueryLog();

        // dd($qlog);

        return view('livewire.professionals', [
            'professionals' => $employees,
            'filteration' => $this->filteration
        ]);




    }
}
