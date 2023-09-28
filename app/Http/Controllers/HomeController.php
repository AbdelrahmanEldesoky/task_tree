<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Advice;
use App\Models\Contact;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $advice=Advice::findOrFail(1);
        $about=About::findOrFail(1);
        $doctors = Doctor::with('information')->paginate(3);
        $news = News::orderBy('created_at','desc')->paginate(3);
        $contact = Contact::findOrFail(1);
        return view('user.index',get_defined_vars());
    }

    public function message(Request $request)
    {
        $message = Message::create($request->all());

        return redirect()->route('home')->with('message', 'updated Successfully');
    }



}
