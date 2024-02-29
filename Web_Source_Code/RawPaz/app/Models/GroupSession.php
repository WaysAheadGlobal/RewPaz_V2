<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupSession extends Model
{
    use HasFactory;
    protected $fillable = [
        'professional_id',
        'employee_id',
        'date',
        'day',
        'time',
        'uuid',
        'created_at',
        'updated_at',
        'created_by',
        'status',
    ];
}
