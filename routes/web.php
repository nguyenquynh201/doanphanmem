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
Route::get('/login', 'AdminController@loginManager');
Route::get('/admin/dashboard', 'AdminController@manager');
Route::get('/body', 'AdminController@body');

// Message
Route::get('/admin/message', 'MessageController@message');

/// manager recruiter
Route::get('/admin/recruiter', 'RecruiterController@recruiter');
/// manager recruit
Route::get('/admin/recruit', 'RecruitController@recruit');
