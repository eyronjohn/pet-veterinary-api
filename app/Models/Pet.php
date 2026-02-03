<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    //
    protected $fillable = [
        'owner_id',
        'name',
        'species',
        'sex',
        'birth_date',
        'color',
        'weight'
    ];

    //pet belongs to user/owner
    public function owner(){
        return $this->belongsTo(User::class);
    }

    //pet can have many appointments
    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
