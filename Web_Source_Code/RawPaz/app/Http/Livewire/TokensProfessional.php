<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class TokensProfessional extends Component
{
    public function render()
    {
        $userId = auth()->user()->id;
        $earnings = Appointment::select('t1.*', 't2.name',DB::raw('COUNT(t1.id) as tokens'))->from( 'appointments as t1')
        ->leftJoin('users as t2', 't1.created_by', 't2.id')
        ->where('t1.professional_id', $userId)
        ->where('t1.status', 2)
        ->groupBy('t2.id')
        ->get();
        return view('livewire.tokens-professional', compact('earnings'));
    }
}
