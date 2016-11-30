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

Route::get('/historicalrates', 'HistoricalRatesController@index');

Route::post('/historicalrates', 'HistoricalRatesController@process');

Route::get('/offices', 'OfficesController@index');

Route::get('/offices1', 'OfficesController@index1');

Route::get('/offices2', 'OfficesController@index2');

Route::get('/', 'CurrencyController@index');

Route::post('/', 'CurrencyController@process');

Auth::routes();

Route::get('/home', 'HomeController@index');

