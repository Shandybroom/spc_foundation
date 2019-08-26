<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

//LOGIN HERE
Route::get('/login','AuthController@login')->name('login');
Route::get('/logout','AuthController@logout');
Route::get('/register','AuthController@register');
Route::post('/registersave','AuthController@registersave');
Route::post('/postlogin','AuthController@postlogin');

//WHAT ARE YOU GOIN TO DO
Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard','AdminController@dashboard');
    Route::resource('monster','Monster\MonsterController');
});

