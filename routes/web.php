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

/*
 * Sabahudin Kodro
 */

Route::get('clients', ['as' => 'clients', 'uses' => 'ClientController@index']);
Route::get('client/create', ['as' => 'client.create', 'uses' => 'ClientController@create']);
Route::get('client/edit/{id}', ['as' => 'client.edit', 'uses' => 'ClientController@edit']);
Route::post('client/store', ['as' => 'client.store', 'uses' => 'ClientController@store']);

Route::get('mailinglists', ['as' => 'mailinglists', 'uses' => 'MailingListController@index']);
Route::get('mailinglist/create', ['as' => 'mailinglist.create', 'uses' => 'MailingListController@create']);
Route::post('mailinglist/store', ['as' => 'mailinglist.store', 'uses' => 'MailingListController@store']);
Route::get('mailinglist/edit/{id}', ['as' => 'mailinglist.edit', 'uses' => 'MailingListController@edit']);
Route::get('mailinglist/view{id}', ['as' => 'mailinglist.view', 'uses' => 'MailingListController@view']);


Route::get('campaigns', ['as' => 'campaigns', 'uses' => 'CampaignController@index']);
Route::get('campaign/create', ['as' => 'campaign.create', 'uses' => 'CampaignController@create']);
Route::post('campaign/store', ['as' => 'campaign.store', 'uses' => 'CampaignController@store']);
Route::get('campaign/edit/{id}', ['as' => 'campaign.edit', 'uses' => 'CampaignController@edit']);

/*
 * Sabahudin Kodro
 */

Route::get('/emails', function () {
    return view('emailview');
});



