<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    //
    protected $table = 'contact_us_messages';

    protected $fillable = [
        'msg', 'name', 'email','phone_number','subject',
    ];
}
