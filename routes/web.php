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

Route::get('/map', function (){

    return view('map.default-map');

});

Route::get('/map_food', function (){

    return view('map.food-map');

});

Route::get('/map_drink', function (){

    return view('map.club-map');

});

Route::get('/map_entertainment', function (){

    return view('map.entertainment-map');

});

Route::get('/map_hotel', function (){

    return view('map.hotel-map');

});