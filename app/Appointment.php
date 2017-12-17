<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $fillable = [
        'first_name', 'last_name', 'email','phone_number'
        ,'gender','service', 'date','time','msg'
    ];
}
