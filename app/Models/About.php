<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class About extends Model
{

    protected $table = 'abouts';
    protected $guarded = [];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('doctor/images/' . $this->image);
    }


}
