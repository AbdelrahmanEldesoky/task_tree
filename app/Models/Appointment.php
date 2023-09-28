<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $guarded = [];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');

    }//end of doctor

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');

    }//end of user

}
