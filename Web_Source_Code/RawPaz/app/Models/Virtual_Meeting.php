<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Virtual_Meeting extends Model
{
    use HasFactory;
    protected $table='virtual_meetings';
    protected $fillable = [
        'created_by', 'link_sent_to', 'username', 'password', 'meeting_link'
    ];
}
