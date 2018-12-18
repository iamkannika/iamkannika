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
Route::get('menu', 'shopController@menuPage')->name('menu');
Route::get('order', 'shopController@orderPage')->name('order');
Route::get('confirm', 'shopController@functionName04')->name('confirm');
Route::get('/', 'shopController@functionName05')->name('public');
Route::view('/bootstrap','bootstrap');
Route::get('admin','AdminController@create')->name('admin-create');
Route::post('admin','AdminController@save');
Route::post('admin','AdminCobtroller@store');
Route::get('admin/delete','AdminController@delete')->name('admin-delete');
Route::get('admin/edit','AdminController@edit')->name('admin-edit');
Route::post('admin/update','AdminController@Update')->name('admin-update');