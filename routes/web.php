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
use Illuminate\Support\Facades\Input;
use App\User;



Route::get('/home', 'HomeController@index');

Route::get('/destroy', 'testControl@destroy');

Route::post('/destroy', 'testControl@destroy');

Route::get('/confirm', 'confirmControl@confirmationForm');

Auth::routes();
Route::get('profile', 'ProfileController@index');

Route::get('/users', function (){

    $query = Request::get('q');

    $users = $query
    ? User::where('name', 'LIKE', "%$query%") -> get()
    : User::all();

    return View::make('users') -> withUsers($users);

});


