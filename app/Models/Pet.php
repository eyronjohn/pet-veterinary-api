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
}
