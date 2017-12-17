<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Doctor;
use App\Education;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','birth_date','role','phone_number','fb_link',
        'tw_link','linkedin_link','address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function Doctor()
    {
        return $this->hasOne(Doctor::class);
    }
    public function Education()
    {
        return $this->hasMany(Education::class);
    }
}
