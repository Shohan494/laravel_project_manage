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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'index'
]);

/**
 *  Authentication routes
 */
Route::get('/auth/register', [
    'uses' => 'AuthController@getRegister',
    'as'   => 'auth.register',
    'middleware' => ['guest']
]);
 
Route::post('/auth/register', [
    'uses' => 'AuthController@postRegister',
    'middleware' => ['guest']
]);
 
Route::get('/auth/signin', [
    'uses' => 'AuthController@getLogin',
    'as'   => 'auth.login',
    'middleware' => ['guest']
]);
 
Route::post('/auth/signin', [
    'uses' => 'AuthController@postLogIn',
    'middleware' => ['guest']
]);

Route::get('/logout', [
    'uses' => 'AuthController@logOut',
    'as'   => 'auth.logout'
]);

Route::resource('projects', 'ProjectController');