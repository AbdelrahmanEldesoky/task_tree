<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Advice;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
class DoctorController extends Controller
{
    public function index($id)
    {
        $news = News::orderBy('created_at','desc')->paginate(3);
        $contact = Contact::findOrFail(1);

        $doctor = Doctor::with('information')->findOrFail($id);

        return view('user.doctor-detail',get_defined_vars());
    }

    public function message(Request $request)
    {
        $message = Message::create($request->all());

        return redirect()->route('home')->with('message', 'updated Successfully');
    }

    public function appointment(Request $request)
    {

        Appointment::create([
            'doctor_id'=> $request->doctor_id,
            'from'=>$request->from,
            'status'=>'processing',
            'user_id'=>auth()->user()->id,
        ]);

        $doctor = Doctor::findOrFail($request->doctor_id);
        $user = User::findOrFail(auth()->user()->id);
        $mailData = [
            'title' => 'Your reservation has been completed successfully',
            'body' => 'You have an appointment with a doctor'. $doctor->name  .'on '. $request->from,
        ];

        Mail::to($user->email)->send(new DemoMail($mailData));

        $mailData = [
            'title' => 'Your have a new booking ',
            'body' => 'You have an appointment with a mr '. $user->name  .'on '. $request->from,
        ];

        return redirect()->route('home');
    }

    public function doctors(Request $request)
    {
        $news = News::orderBy('created_at','desc')->paginate(3);
        $contact = Contact::findOrFail(1);
        $doctors = Doctor::get();

        return view('user.doctors',get_defined_vars());
    }
}
