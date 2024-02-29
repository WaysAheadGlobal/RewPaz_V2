<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'appointmentId','session','created_by','appointmentDate','appointment_timing','meeting_link','meeting_username','meeting_password','appointmentType','professional_id','uid',
    ];
}
