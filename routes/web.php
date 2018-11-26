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


Route::get('welcome/cafe', 'HelloController@functionName');
Route::resource('user','UsersController');     
Route::get('menu', 'shopController@functionName');
Route::get('order', 'shopController@functionName03');
Route::get('confirm', 'shopController@functionName04');
Route::get('/', 'shopController@functionName05');