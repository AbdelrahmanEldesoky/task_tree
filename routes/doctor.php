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
Route::prefix('doctors')->name('doctors.')->group(function () {

    Route::group(['middleware'=>'guest'],function (){
        Route::get('login','AuthController@login');
        Route::post('login','AuthController@loginPost')->name('login');
        Route::get('logout','AuthController@logout')->middleware('doctor');
    });

    Route::group(['middleware'=>'doctors'],function (){

       ######################### Route Home ###############################
       Route::get('/','HomeController@index')->name('home');
       ######################### Route Appointment ###############################
       Route::resource('appointment','AppointmentController');
       ######################### Route User ###############################
       Route::resource('user','UserController');
        ######################### Route Information ###############################
       Route::resource('information','InformationController');
       ######################### Route Profile ###############################
       Route::get('profile',  'HomeController@profile')->name('profile');
       Route::post('profile',  'HomeController@profileSave')->name('profile');
       Route::post('update/password',  'HomeController@updatePassword')->name('update.password');
    });

});

