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

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', ['as' => 'dashboard', 'middleware' => 'auth', 'uses' => 'Dashboard@index']);

Route::resource('task', 'TaskController');

Route::resource('worker', 'WorkerController');

// Authentication routes...
Route::get('/auth/login', ['as' => 'auth.login', 'middleware' => 'guest', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('/auth/register', ['as' => 'auth.register', 'middleware' => 'guest', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('/auth/register', 'Auth\AuthController@postRegister');