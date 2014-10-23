<?php

/*
  |--------------------------------------------------------------------------
  | admin Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an admin.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */
#admin
Route::group(array('prefix' => 'admin'), function () {
            //after loign
            Route::get('/', ['as' => 'admin-home', 'uses' => 'AdminDashboardController@getIndex']);
            Route::get('dashboard', ['as' => 'admin-home', 'uses' => 'AdminDashboardController@getIndex']);
            Route::get('account', ['as' => 'admin-profile', 'uses' => 'AdminDashboardController@getAccount']);
            Route::post('account', ['as' => 'update-admin-profile', 'uses' => 'AdminDashboardController@postAccount']);
            //resto-management
            Route::post('resto-management', ['as' => 'resto-management', 'uses' => 'AdminDashboardController@postAccount']);
            Route::resource('restaurant', 'AdminRestaurantController');
            Route::resource('menucategory', 'AdminMenucategoryController');
            //resto menu management
            Route::resource('menu-category', 'AdminMenucategoryController');
            //user management
            Route::resource('user', 'AdminUserController');
            //system
            Route::resource('settings', 'AdminSettingsController');
            //Pages
            Route::resource('page', 'AdminPageController');
        });