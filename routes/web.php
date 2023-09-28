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
        ############################## Route Auth ############################
        Route::get('login_user','AuthController@login')->name('login_user');
        Route::post('login','AuthController@loginPost')->name('login');

        Route::post('register1','AuthController@register')->name('register1');
        Route::get('logout','AuthController@logout')->middleware('auth')->name('logout');
        Route::get('/','HomeController@index')->name('home');
        Route::post('message','HomeController@message')->name('message');
        Route::get('doctor-detail/{id}','DoctorController@index')->name('doctor-detail');
        Route::get('doctors_all','NavbarController@doctors')->name('doctors_all');
        Route::get('about','NavbarController@about')->name('about');
        Route::get('news','NavbarController@news')->name('news');
        Route::get('message_get','NavbarController@message')->name('message_get');
        Route::get('contact','NavbarController@contact')->name('contact');
        ######################### Route Appointment ###############################
        Route::post('appointment','DoctorController@appointment')->name('appointment');

    Route::group(['middleware'=>'auth'],function (){
       ######################### Route User ###############################
       Route::resource('user','UserController');
       ######################### Route Profile ###############################
       Route::get('profile',  'HomeController@profile')->name('profile');
       Route::post('profile',  'HomeController@profileSave')->name('profile');
       Route::post('update/password',  'HomeController@updatePassword')->name('update.password');
    });


Route::auth();
