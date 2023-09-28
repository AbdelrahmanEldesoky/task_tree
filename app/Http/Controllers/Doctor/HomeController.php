<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('doctors');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $appointment_count = Appointment::where('doctor_id',auth('doctors')->user()->id)->count();
        return view('doctor.index',get_defined_vars());
    }
    public function profile()
    {
        $user = Auth::guard('doctors')->user();

        return view('admin.setting.profile', get_defined_vars());
    }
    public function profileSave(Request $request)
    {

        $changes = [];
        $doctor = User::findOrFail(Auth::user()->id);
        if ($request->profile_image)
        {
            $base64Image = explode(";base64,", $request->profile_image);
            $explodeImage = explode("image/", $base64Image[0]);
            $imageType = $explodeImage[1];
            $image_base64 = base64_decode($base64Image[1]);
            $image_name = time().'.png';
            $image_path = 'uploads/images/'.$image_name;
            file_put_contents($image_path, $image_base64);
            $request['image'] = $image_name;
            $changes['image'] = $doctor->image;
        }

        User::findOrFail(Auth::user()->id)->update($request->all());
        UserInformation::updateOrCreate(['user_id'=> Auth::user()->id],$request->all());
        return redirect()->back()->with('message', 'Updated successfully');
    }

        public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'confirmed'],
        ]);
        $user = User::findOrFail(Auth::user()->id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('message', 'Updated successfully');
    }
}
