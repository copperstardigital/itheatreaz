<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', ['as' => 'home', 'uses' => 'Home\IndexController@index']);
Route::get('news', 'Home\NewsController@index');
Route::resource('contact', 'Home\ContactController');
Route::get('donate', 'Home\DonateController@index');

Route::get('collaborators', 'About\CollaboratorsController@index');
Route::get('location', 'About\LocationController@index');
Route::get('mission', 'About\MissionController@index');
Route::get('staff-biographies', 'About\StaffController@index');
Route::get('about', 'About\AboutController@index');
Route::get('email', 'About\EmailListController@index');

Route::get('history', 'History\HistoryController@index');
Route::get('history/productions/{season}', 'History\HistoryController@show');

Route::get('productions/{season}/{show}', 'Productions\ShowController@index');
Route::get('productions/{season}', 'Productions\ProductionsController@index');

Route::resource('mailchimp', 'Home\MailChimpController');

