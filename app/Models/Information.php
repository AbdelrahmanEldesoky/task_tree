<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Information extends Model
{
    protected $table = 'informations';
    protected $guarded = [];
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('doctor/images/' . $this->image);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');

    }//end of doctor
}
