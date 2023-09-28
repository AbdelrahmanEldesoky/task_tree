<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    protected $table = 'news';
    protected $guarded = [];
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('doctor/images/' . $this->image);
    }


}
