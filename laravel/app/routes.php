<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@getIndex']);

#login user
Route::get('login', ['as' => 'user-login', 'uses' => 'LoginController@getLogin']);
Route::post('login', ['uses' => 'LoginController@postLogin']);

include_once 'admin-routes.php';
include_once 'resto-routes.php';

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', ['as' => 'login', 'uses' => 'UsersController@login']);
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');

Route::get('forgot-password', ['as' => 'forgot-password', 'uses' => 'UsersController@forgotPassword']);
Route::post('forgot-password', ['as' => 'forgot-password', 'uses' => 'UsersController@doForgotPassword']);

Route::get('reset-password/{token}', ['as' => 'reset-password', 'uses' => 'UsersController@resetPassword']);
Route::post('reset-password', ['as' => 'reset-password', 'uses' => 'UsersController@doResetPassword']);

Route::get('users/logout', 'UsersController@logout');
