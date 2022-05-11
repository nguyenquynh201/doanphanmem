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
Route::get('/admin/manager', function () {
    return view('/admin/manager');
});
Route::get('/admin/tab/header', function () {
    return view('admin/tab/header');
});
Route::get('/admin/tab/navbar', function () {
    return view('admin/tab/navbar');
});
Route::get('/admin/tab/footer', function () {
    return view('admin/tab/footer');
});
