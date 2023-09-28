<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\About;

//use Illuminate\Foundation\Auth\AuthenticatesUsers;
class AuthController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['login','loginPost']);
     }

    public function login()
    {
        if (Auth::guard('admin')->check()){
            return redirect()->intended('admin')->with('message','Login Successfully');
        }elseif(Auth::guard('doctors')->check()){
            return redirect()->intended('doctor')->with('message','Login Successfully');
        }
       // $setting = About::findOrFail(1);
        return view('admin.auth.login')->with('message','Doctor has been Successfully Created');
        return redirect()->back()->with(['error' => 'يجب تسجيل الخروج اولا']);

    }



    public function loginPost(Request $request): RedirectResponse
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }elseif(Auth::guard('doctors')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('doctors');
        }else{
            return back()->with('status', 'verification-link-sent');
        }

     //   return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);


    }


    /**
     * Log the user out of the application.
     */
    public function logout(Request $request): RedirectResponse
    {

        if(Auth::guard('admin')->check()) // this means that the admin was logged in.
        {
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login');
        }

        $this->guard()->logout();
        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');

    }



}

