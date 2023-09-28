<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('admin')->name('admin.')->group(function () {

    Route::group(['middleware'=>'guest'],function (){
        Route::get('login','AuthController@login');
        Route::post('login','AuthController@loginPost')->name('login');
       // Route::post('logout','AuthController@logout')->name('logout');
    });

    Route::group(['middleware'=>'admin'],function (){
       ######################### Route Home ###############################
       Route::get('/','HomeController@index')->name('home');
       ######################### Route Doctor ###############################
       Route::resource('doctor','DoctorController');
       ######################### Route User ###############################
       Route::get('user','UserController@index')->name('user.index');
       ######################### Route Appointment ###############################
       Route::resource('appointment','AppointmentController');
       ######################### Route News ###############################
       Route::resource('news','NewsController');
       ######################### Route About ###############################
       Route::resource('about','AboutController');
       ######################### Route Contact ###############################
       Route::resource('contact','ContactController');
        ######################### Route Message ###############################
        Route::get('message','MessageController@index')->name('message.index');
       ######################### Route Profile ###############################
       Route::get('profile',  'HomeController@profile')->name('profile');
       Route::post('profile',  'HomeController@profileSave')->name('profile');
       Route::post('update/password',  'HomeController@updatePassword')->name('update.password');
    });
});
