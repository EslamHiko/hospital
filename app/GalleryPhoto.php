<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryPhoto extends Model
{
    //
    protected $table = "gallery";

    protected $fillable = [
        'img_path'
    ];
}
