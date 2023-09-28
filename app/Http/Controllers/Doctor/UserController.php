<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::with('user')
        ->where('doctor_id',auth('doctors')->user()->id)
        ->distinct()->get();

        return view('doctor.users.index', get_defined_vars());
    }

}
