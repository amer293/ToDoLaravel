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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('crud', 'TodoController');


Route::get('/crud', 'TodoController@index')->name('crud');
Route::get('/crud/{crud}', 'TodoController@index')->name('edit');
