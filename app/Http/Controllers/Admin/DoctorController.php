<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Information;
use Illuminate\Http\Request;
use Validator;
use Mail;
use App\Mail\DemoMail;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::with('information')->get();

        return view('admin.doctor.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:doctors,email',
            'phone'=>'required|unique:doctors,phone',
            'state'=>'required',
            'specialities'=>'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error',$validator->errors()->toJson());
        }

        $doctor = Doctor::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'password'=>bcrypt($request->email)
                ]);

                if($request->state =='male'){
                    $image = 'default_male.jpg';
                }else{
                    $image = 'default_female.jpg';
                }

        $information = Information::create([
            'doctor_id'=>$doctor->id,
            'specialities'=>$request->specialities,
            'state' =>$request->state,
            'image'=>$image
        ]);


        $mailData = [
            'title' => 'register Done',
            'body' => 'You have been registered successfully'
        ];

        Mail::to($request->email)->send(new DemoMail($mailData));



        return redirect()->route('admin.doctor.index')->with('message','successfully registered');
    }

    /**
     * Display the spec
     * ified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $doctor =  Doctor::findOrFail($id);

        $doctor->delete();

        return redirect()->back()->with('message', 'successfully deleted');

    }
}
