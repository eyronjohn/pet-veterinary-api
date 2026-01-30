<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $fillable = [
        'pet_id',
        'owner_id',
        'appointment_date',
        'appointment_time',
        'service_type',
    ];
}
