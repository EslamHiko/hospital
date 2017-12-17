<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorMessage extends Model
{
    //
    protected $table='public_messages';
    protected $fillable = [
      'msg','first_name','last_name','email'
    ];
}
