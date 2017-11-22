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

// Authentication Routes...
$this->get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('admin/login', 'Auth\LoginController@login');
$this->post('admin/logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');
// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/admin/view', 'AdminController@index');

Route::get('/admin/upload', 'AdminController@upload');

Route::post('/admin/upload', 'AdminController@check_then_upload');

Route::get('/admin/delete', 'AdminController@delete');

Route::post('/admin/delete', 'AdminController@delete_album');

Route::get('/admin/user_list', 'AdminController@users');

Route::get('/admin/approved', 'AdminController@approved');

Route::post('/admin/approved', 'AdminController@approved_admin');

