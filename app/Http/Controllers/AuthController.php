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
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\DemoMail;
use Validator;

class AuthController extends Controller
{
    public function login()
    {
        $news = News::orderBy('created_at','desc')->paginate(3);
        $contact = Contact::findOrFail(1);


        return view('auth',get_defined_vars());
    }

    public function loginPost(Request $request)
    {


        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
/*
*/
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        return redirect()->route('home')->with('message', 'updated Successfully');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:doctors,email',
            'phone'=>'required|unique:doctors,phone',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error',$validator->errors()->toJson());
        }

        $doctor = User::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'password'=>bcrypt($request->password)
                ]);


        $mailData = [
            'title' => 'register Done',
            'body' => 'You have been registered successfully'
        ];

        Mail::to($request->email)->send(new DemoMail($mailData));



        return redirect()->route('login_user')->with('message','successfully registered');
    }



    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
