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

Route::group(['prefix' => config('app.admin_prefix', 'admin'), 'middleware' => ['web', 'admin']], function() {
    Route::resource('pages', 'AdminController');
});

Route::group(['middleware' => 'web'], function() {
    Route::get('/', 'PagesController@index');
    Route::get('/{slug}', 'PagesController@show');
});
