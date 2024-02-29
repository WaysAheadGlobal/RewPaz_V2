<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'appointmentId',
        'notes_datetime',
        'session_duration',
        'summary',
        'follow_up',
        'follow_up_hour',
        'follow_up_minute',
        'advice',
        'is_shared',
        'created_at',
        'professional_id',
        'employee_id',
        'created_by',
    ];
}
