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

//Route::get('/', function () {
   // return view('welcome.blade.php');

//});


Route::get('/chart', 'ChartController@index');

Route::get('/', 'CurrencyController@index');

Route::post('/', 'CurrencyController@process');

Auth::routes();

Route::get('/home', 'HomeController@index');

