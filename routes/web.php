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
Route::get('/home', function () {
    return view('home');
});
Route::get('/admin/login', 'AdminController@loginManager');
Route::get('/admin/manager', 'AdminController@manager');
Route::get('/admin/tab/header', 'AdminController@header');
Route::get('/admin/tab/navbar', 'AdminController@navbar');
Route::get('/admin/tab/footer', 'AdminController@footer');
Route::get('/admin/tab/body', 'AdminController@body');
