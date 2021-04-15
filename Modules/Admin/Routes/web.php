<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => config('app.admin_prefix', 'admin'), 'middleware' => 'guest'], function() {    // Login
    Route::get('/login', 'AuthController@login')->name('admin.login');
    Route::post('/login', 'AuthController@handleLogin')->name('admin.login.post');
});


Route::group(['prefix' => config('app.admin_prefix', 'admin'), 'middleware' => 'admin'], function() {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    // Logout
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');    
});