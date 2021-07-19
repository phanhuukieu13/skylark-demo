<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/','AdminController@index')->name('index');
    Route::get('/create','AdminController@create')->name('create');
    Route::group(['prefix' => 'users', 'as' => 'users.'], function() {

        Route::get('/','Admin\UserController@index')->name('index');
        Route::get('/create', 'Admin\UserController@create')->name('create');
    });

});