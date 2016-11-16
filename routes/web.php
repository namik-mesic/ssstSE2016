<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/update-profile', 'UserController@profileView');
Route::post('/update-profile', 'UserController@profileUpdate');
Route::get('/add-picture', 'UserController@addPictureView');
Route::post('/add-picture', 'UserController@addPicture');
