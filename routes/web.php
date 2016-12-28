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
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('admin', function () {
    return view('admin2');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/terms', function () {
    return view('ToS');
});

Route::get('/editor', function () {
    return view('emailcreator');
});

Route::get('/camp', function () {
    return view('campaigns');
});

Route::get('/profile', function () {
    return view('profilepage');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/mlists', function () {
    return view('mailing');
});

Route::get('/emails', function () {
    return view('emailview');
});


Route::post('register_action', function()
{
    $obj = new RegisterController() ;
    return $obj->store();
});

