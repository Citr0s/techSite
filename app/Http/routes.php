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

//Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::get('/', 'IndexController@index');
Route::get('/login', 'LoginController@index');
Route::get('/register', 'RegisterController@index');
Route::get('/logout', 'LoginController@logout');
Route::get('/create', 'IndexController@create');
Route::get('/{id}', 'IndexController@show');

Route::post('/', 'IndexController@store');
Route::post('/login', 'LoginController@auth');
Route::post('/register', 'RegisterController@check');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
