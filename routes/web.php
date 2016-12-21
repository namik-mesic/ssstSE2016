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
<<<<<<< HEAD
Route::get('/update-profile', 'UserController@profileView');
Route::post('/update-profile', 'UserController@profileUpdate');
Route::get('/add-picture', 'UserController@addPictureView');
Route::post('/add-picture', 'UserController@addPicture');
=======

Route::get('/destroy', 'testControl@destroy');

Route::post('/destroy', 'testControl@destroy');

Route::get('/confirm', 'confirmControl@confirmationForm');

Auth::routes();
Route::get('profile', 'ProfileController@index');

/*
 * Route that calls the color controler to save the
 * forwarded color from the ajax post request to
 * be saved in the dabtase -Edim
 */
Route::post('profile', 'ColorController@update');

Route::get("settings", "SettingsController@getSettings");

Route::post("settings", "SettingsController@postSettings");

Route::get('/users', function () {

    $query = Request::get('q');
    $users = User::where('name', 'LIKE', "%$query%")->get();

    return View::make('users')->withUsers($users);

});

Route::get('register/verify/{token}', 'Auth\RegisterController@verify');

Route::get('/users/{id}', 'SearchController@show');






<<<<<<< HEAD
>>>>>>> 3b70ec9b41879162059ccdba27c3f9dd38499255
=======


>>>>>>> 88831ea580f6c826112ade09c260d5e398a38465
