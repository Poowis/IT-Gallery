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

Route::get('/new', function () {
    return view('NEW_template');
});

Route::get('/home', 'MainController@showhome');

Route::get('/list', 'MainController@showlist');

Route::get('/album/{name}', 'MainController@showalbum');

Route::get('/about', 'MainController@showabout');

Route::get('/upload', function () {
    return view('upload', ['name' => '', 'nameErr' => '','uploader' => '', 'uploaderErr' => '', 'description' => '', 'coverErr' => '', 'filesErr' => '']);
});

Route::post('/upload', 'UploadController@check_then_upload');

Route::get('/uploadabout', 'AboutController@aboutupload');