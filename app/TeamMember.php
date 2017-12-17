<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    //
    protected $table = 'team';
    protected $fillable = [
        'name', 'title', 'fb_link',
        'tw_link','linkedin_link','desc','img_path'
    ];
}
