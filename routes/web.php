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

Route::get('/', 'UserController@getLogin');

Route::group(['prefix' => 'user'], function () {
    Route::post('/login', 'UserController@postLogin');
    Route::group(['middleware' => ['user']], function () {
        Route::get('/', 'UserController@getUser');
        Route::get('/logout', 'UserController@getLogout');
        Route::get('/register', 'UserController@getRegister');
        Route::post('/register', 'UserController@postRegister');
        Route::get('/profile', 'UserController@getProfile');
    });
});