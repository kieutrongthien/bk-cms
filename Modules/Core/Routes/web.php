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

Route::group(['prefix' => 'install', 'middleware' => ['web', 'isNotInstall']], function() {
    Route::get('/', 'CoreController@installFirst')->name('install');
    Route::post('/database', 'CoreController@installSecond')->name('install.second');
    Route::post('/administrator', 'CoreController@installThird')->name('install.third');
});
