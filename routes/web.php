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

Route::get('auth/login', function () {
    return view('login');
});

Route::get('auth/register', function () {
    return view('register');
});


Route::get('/terms', function () {
    return view('ToS');
});

Route::get('/editor', function () {
    return view('emailcreator');
})->middleware('auth');

Route::get('/camp', function () {
    return view('campaigns');
})->middleware('auth');

Route::get('/profile', function () {
    return view('profilepage');
})->middleware('auth');

Route::get('/settings', function () {
    return view('settings');
})->middleware('auth');


Route::get('/help', function () {
    return view('help');
})->middleware('auth');


Route::get('/mlists', function () {
    return view('mailing');
})->middleware('auth');


Route::get('/emails', function () {
    return view('emailview');
})->middleware('auth');



