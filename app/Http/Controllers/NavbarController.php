<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Advice;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\News;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function about(Request $request)
    {
        $news = News::orderBy('created_at','desc')->paginate(3);
        $contact = Contact::findOrFail(1);
        $about=About::findOrFail(1);

        return view('user.about',get_defined_vars());
    }
    public function doctors(Request $request)
    {
        $news = News::orderBy('created_at','desc')->paginate(3);
        $contact = Contact::findOrFail(1);
        $doctors = Doctor::get();

        return view('user.doctors',get_defined_vars());
    }
    public function news(Request $request)
    {
        $news = News::orderBy('created_at','desc')->paginate(3);
        $contact = Contact::findOrFail(1);
        $news = News::orderBy('created_at','desc')->paginate(3);

        return view('user.news',get_defined_vars());
    }
    public function contact(Request $request)
    {
        $news = News::orderBy('created_at','desc')->paginate(3);
        $contact = Contact::findOrFail(1);

        return view('user.contact',get_defined_vars());
    }
    public function message(Request $request)
    {
        $news = News::orderBy('created_at','desc')->paginate(3);
        $contact = Contact::findOrFail(1);


        return view('user.message',get_defined_vars());
    }

}
