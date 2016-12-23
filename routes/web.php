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

Route::get('api/place', 'Api\PlaceDataController@index');

Route::resource('place', 'PlaceController');


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

Route::get('/map_bank', function (){

    return view('map.bank-map');

});

Route::get('/map_worship', function (){

    return view('map.worship-map');

});

Route::get('/map_parking', function (){

    return view('map.parking-map');

});

Route::get('/map_shopping', function (){

    return view('map.shopping-map');

});

Route::get('/map_test', function (){

    return view('map.test-map');
});