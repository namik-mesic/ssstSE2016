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

Route::get('/', 'StartController@index');

Route::post('/', 'StartController@process');

Route::get('/main', 'CurrencyController@index');

Route::post('/main', 'CurrencyController@process');

Route::get('/contact', 'ContactController@index');

Route::post('/contact', 'ContactController@store');

Route::get('/liverates', 'LiveRatesController@index');

Auth::routes();
use Illuminate\Support\Facades\Input;
use App\User;

Route::get('/home', 'HomeController@index');

Route::get('/destroy', 'testControl@destroy');

Route::post('/destroy', 'testControl@destroy');

Route::get('/confirm', 'confirmControl@confirmationForm');

Auth::routes();
Route::get('profile', 'ProfileController@index');

// Route::get('/success',function (){

//    return View::make('success');
// });

// Route::post('/take', 'testControl@take');

