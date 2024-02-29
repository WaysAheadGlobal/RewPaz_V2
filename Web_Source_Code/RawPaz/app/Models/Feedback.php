<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedbacks';
    protected $fillable = [
        'appointmentId',
        'rating',
        'description',
        'created_at',
        'created_by','professional_id','uid',
        'employee_id',
        'created_by',
    ];
}
