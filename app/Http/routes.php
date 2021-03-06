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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
    'plans' => 'criminal\PlansController'

]);
Route ::get('criminal', 'criminal\criminalController@index');
/*Route ::get('plans', 'criminal\PlansController@index');*/
/* when stripe answers, we get token*/

/*Route ::post('plans', 'criminal\PlansController@getToken');*/
