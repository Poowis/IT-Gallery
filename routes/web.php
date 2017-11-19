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

Route::get('/home', 'MainController@showhome');

Route::get('/list', 'MainController@showlist');

Route::get('/album/{name}', 'MainController@showalbum');

Route::get('/about', 'MainController@showabout');

Auth::routes();

Route::get('/admin', 'AdminController@index');

Route::get('/admin/{order}', 'AdminController@order');

Route::post('/admin/upload', 'UploadController@check_then_upload');
