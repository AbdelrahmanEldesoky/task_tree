<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Admin;
use App\Models\Ads;
use App\Models\Appointment;
use App\Models\Category;
use App\Models\City;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
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
        $this->middleware('admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $doctor_count = Doctor::count();
        $user_count = User::count();
        $appointment_count = Appointment::count();
        $message_count = Message::count();;

        return view('admin.index',get_defined_vars());
    }
    public function profile()
    {
        $user = Auth::guard('admin')->user();

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
