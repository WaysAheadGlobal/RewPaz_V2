<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\Token_use;

class AppointmentsAdmin extends Component
{

    public $userId;
    public $pagination = 10;
    public $showNew = false;
    public $calendarDate = '';
    public $calendarDateForSelect = '';

    protected $listeners = ['postAdded'];


    public function configure(): void
{
    $this->setPaginationMethod('simple');
}

public function postAdded($data){
    $data = date($data);
    $this->calendarDate = date(('Y-m-d'), strtotime($data));
    $this->calendarDateForSelect = $this->calendarDate;

}

public function dehydrate()
{
    $this->dispatchBrowserEvent('initSomething');
}

public function __construct() {
    $this->calendarDate = date('Y-m-d');
    $this->userId = Auth::user()->id;
}
    use WithPagination;

    public function updateStatus($status, $uuid)
    {

        DB::beginTransaction();
        DB::connection()->enableQueryLog();
        // $this->counter = $this->counter + $this->size;

        $update = Appointment::where('uid', $uuid)->update(['status' => $status]);
        if($update){
            $appointmentData =  Appointment::where('uid', $uuid)->first();
            $createdBy = $appointmentData->created_by;
            $userDetails = User::where('id', $createdBy)->first();
            $companyCode = $userDetails->unique_company_code;
            $tokenUsedCreate = new Token_use;
            $tokenUsedCreate->user_id = $createdBy;
            $tokenUsedCreate->unique_company_code = $companyCode;
            $tokenUsedCreate->used_token = 1;
            $tokenUsedCreate->appointment_id = $appointmentData->id;

            if($status == 2){
                $tokenUsedCreate = $tokenUsedCreate->save();
            } 

            if($tokenUsedCreate){
                DB::commit();
                session()->flash('message_success', 'Appointment Status updated successfully.');
            }else{
                DB::rollback();
                session()->flash('message_failed', 'Oops something went wrong, please try again');
            }
        }else{
            session()->flash('message_failed', 'No Changes detected please select another status.');
        }
        $queries = DB::getQueryLog();
        // dd($queries);
    }

    public function render()
    {
        // $this->calendarDate = date('M d, Y');
        sleep(1);

        /*
        $query = Appointment::query();
        $query->select('t1.*', 't2.name');
        $query->from('appointments as t1')->leftJoin('users as t2','t1.created_by','=','t2.id')
        ->where('t1.professional_id', $this->userId)->get();
        was not working
        */

        $query = Appointment::select('t1.*', 't2.name')->from( 'appointments as t1')->leftJoin('users as t2', 't1.created_by', 't2.id');
        if($this->showNew){
            $this->calendarDateForSelect = '';
            $this->calendarDate = date('Y-m-d');
            $query->where('t1.status', 0);
        }
        if($this->calendarDateForSelect){
            $this->showNew = false;
            $query->whereRaw("DATE(t1.appointmentDate) = '".$this->calendarDateForSelect."'");
        }
        $query = $query->get();
        $data = $query;
        return view('livewire.appointments-admin', compact('data'));
    }
}
