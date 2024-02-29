<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class FeedbackProfessional extends Component
{
    public function render()
    {
        $userId = auth()->user()->id;
        $feedbacks = Feedback::select('t1.*', 't2.name')->from('Feedback as t1')
        ->leftJoin('users as t2', 't1.professional_id', 't2.id')
        ->where('t1.professional_id', $userId)
        ->get();
        return view('livewire.feedback-professional', compact('feedbacks'));
    }
}
