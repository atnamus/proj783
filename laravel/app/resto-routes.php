<?php

/*
  |--------------------------------------------------------------------------
  | Restaurant Owner Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an resto.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::group(array('prefix' => 'resto'), function () {
            //after loign
            Route::get('/', ['as' => 'resto-home', 'uses' => 'RestoDashboardController@getIndex']);
            Route::get('dashboard', ['as' => 'resto-home', 'uses' => 'RestoDashboardController@getIndex']);
            Route::get('account', ['as' => 'resto-profile', 'uses' => 'RestoDashboardController@getAccount']);
            Route::post('account', ['as' => 'update-resto-profile', 'uses' => 'RestoDashboardController@postAccount']);
            //resto-management
            Route::post('resto-management', ['as' => 'resto-management', 'uses' => 'RestoDashboardController@postAccount']);
            Route::get('restaurant', ['as' => 'my-restaurant', 'uses' => 'RestoRestaurantController@getRestaurant']);
            Route::post('update/restaurant', ['as' => 'update-my-restaurant', 'uses' => 'RestoRestaurantController@postRestaurant']);
            //menu
            Route::resource('menu', 'RestoMenuController');
            //user management
            Route::resource('user', 'RestoUserController');
        });