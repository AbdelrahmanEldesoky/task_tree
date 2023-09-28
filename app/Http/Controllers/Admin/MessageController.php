<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\CityTranslation;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::get();

        return view('admin.setting.messages', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.city.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $city =City::create(['name'=>$request->name_ar,'locale'=>'ar']);
        $city->name=$request->name_en;
        $city->locale='en';
        $city->save();
        return redirect()->route('admin.city.index')->with('message','successfully registered');

    }

    /**
     * Display the specified resource.
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
        $city =  CityTranslation::findOrFail($id);

        return view('admin.city.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $city =  CityTranslation::findOrFail($id);
        $city->update(['name' => $request->name]);

        return redirect()->route('admin.city.index')->with('message','successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city =  City::findOrFail($id);
        $city->delete();

        return redirect()->route('admin.city.index')->with('message','successfully deleted');
    }
}
