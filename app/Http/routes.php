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

Route::get('/', 'Dashboard@index');
Route::get('/dashboard', array('as' => 'dashboard', 'uses' => 'Dashboard@index'));

Route::get('/tasks', array('as' => 'tasks', 'uses' => 'Tasks@index'));
Route::get('/tasks/add', array('as' => 'tasks.add', 'uses' => 'Tasks@index'));

Route::get('/workers', array('as' => 'workers', 'uses' => 'Workers@index'));
Route::get('/workers/add', array('as' => 'workers.add', 'uses' => 'Workers@index'));

