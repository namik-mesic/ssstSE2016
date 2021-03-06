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


Route::get('/grupa3', function () {
    return view('welcome');
});

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


Route::get('/adm', 'UserController@panel');

Auth::routes();
use Illuminate\Support\Facades\Input;
use App\User;


Route::get('/home', 'HomeController@index');

Route::get('/update-profile', 'UserController@profileView');

Route::get('/confirm2', 'UserController@confirm2View');

Route::post('/confirm2', 'UserController@profileUpdate');

Route::post('/update-profile2', 'UpdateController@update');

Route::get('/add-picture', 'UserController@addPictureView');

Route::post('/add-picture', 'UserController@addPicture');

Route::get('/destroy', 'testControl@destroy');

Route::post('/destroy', 'testControl@destroy');

Route::get('/confirm', 'confirmControl@confirmationForm');

Route::post('/confirm', 'confirmControl@confirmationForm');

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

Route::get('/users/delete/{id}', 'UserController@deleteUser');

Route::get('/privacy', 'PrivacyController@privacy');

Route::get('/privacy', 'UpdatePrivacyController@privacy');

Route::get('/toggle-name-hidden', 'UpdatePrivacyController@toggleNameHidden');

Route::get('/toggle-dob-hidden', 'UpdateDobPrivacyController@toggleDobHidden');

Route::get('/toggle-email-hidden', 'UpdateEmailPrivacyController@toggleEmailHidden');



