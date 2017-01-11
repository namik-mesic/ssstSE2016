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

Route::get('/', function () { /* Damir Cengic */
    return view('main');
});

Route::get('/help', function () { /* Damir Cengic */
    return view('help');
});


Auth::routes();

Route::get('/home', 'HomeController@index'); 

Route::get('/dashboard', 'DashboardController@index');  // Damir Cengic

Route::get('/settings', 'SettingsController@index'); // Damir Cengic

Route::get('/help', function () { /* Damir Cengic */
    return view('/help');
});

Route::get('auth/login', function () { /* Damir Cengic */
    return view('login');
});

Route::get('auth/register', function () { /* Damir Cengic */
    return view('register');
});



/*
 * Sabahudin Kodro
 */

Route::get('clients', ['as' => 'clients', 'uses' => 'ClientController@index']);
Route::get('client/create', ['as' => 'client.create', 'uses' => 'ClientController@create']);
Route::get('client/edit/{id}', ['as' => 'client.edit', 'uses' => 'ClientController@edit']);
Route::post('client/store', ['as' => 'client.store', 'uses' => 'ClientController@store']);
Route::get('client/delete/{id}', ['as' => 'client.delete', 'uses' => 'ClientController@delete']); /* Inda Kreso*/


Route::get('mailinglists', ['as' => 'mailinglists', 'uses' => 'MailingListController@index']);
Route::get('mailinglist/create', ['as' => 'mailinglist.create', 'uses' => 'MailingListController@create']);
Route::post('mailinglist/store', ['as' => 'mailinglist.store', 'uses' => 'MailingListController@store']);
Route::get('mailinglist/edit/{id}', ['as' => 'mailinglist.edit', 'uses' => 'MailingListController@edit']);
Route::get('mailinglist/view/{id}', ['as' => 'mailinglist.view', 'uses' => 'MailingListController@view']);
Route::get('mailinglist/delete/{id}', ['as' => 'mailinglist.delete', 'uses' => 'MailingListController@delete']);

Route::get('mails', ['as' => 'mails', 'uses' => 'MailController@index']);
Route::get('mail/create', ['as' => 'mail.create', 'uses' => 'MailController@create']);
Route::post('mail/store', ['as' => 'mail.store', 'uses' => 'MailController@store']);
Route::get('mail/edit/{id}', ['as' => 'mail.edit', 'uses' => 'MailController@edit']);
Route::get('mail/delete/{id}', ['as' => 'mail.delete', 'uses' => 'MailController@delete']);

Route::get('schedules', ['as' => 'schedules', 'uses' => 'CampaignScheduleController@index']);
Route::get('schedule/archived', ['as' => 'schedule.archived', 'uses' => 'CampaignScheduleController@index']);
Route::get('schedule/create', ['as' => 'schedule.create', 'uses' => 'CampaignScheduleController@create']);
Route::post('schedule/store', ['as' => 'schedule.store', 'uses' => 'CampaignScheduleController@store']);
Route::get('schedule/send/{id}', ['as' => 'schedule.send', 'uses' => 'CampaignScheduleController@send']);
Route::get('schedule/delete/{id}', ['as' => 'schedule.delete', 'uses' => 'CampaignScheduleController@delete']);

/*
 * Sabahudin Kodro
 */

Route::get('/emails', function () {
    return view('emailview');
});



