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

//首页，帮助页，关于页
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('help', 'StaticPagesController@help')->name('help');
Route::get('about', 'StaticPagesController@about')->name('about');

//注册页面
Route::get('signup', 'UsersController@create')->name('signup');

//用户资源路由
Route::resource('users', 'UsersController');

//用户登录
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

//编辑用户
Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');

//用户列表
Route::get('index', 'UsersController@index')->name('users.index');

//激活账户
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');