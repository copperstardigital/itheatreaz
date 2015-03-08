<?php

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');
Route::get('dashboard', 'Home\DashboardController@index');


Route::controllers([
	'login' => 'Auth\AuthController',
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

Route::get('history', 'History\HistoryController@index');
Route::get('history/productions/{season}', 'History\HistoryController@show');

Route::get('productions/{season}/{show}', 'Productions\ShowController@index');
Route::get('productions/{season}', 'Productions\ProductionsController@index');

Route::resource('mailchimp', 'Home\MailChimpController');

