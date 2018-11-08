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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/home/checklogin','HomeController@checklogin');
Route::get('/home/sucesslogin', 'HomeController@successlogin');
Route::get('home/logout', 'HomeController@logout');
Route::get('/user/tax_details', 'AdminController@pay');
Route::get('user/profile', 'UserController@file');

//code for the images
Route::post('user/profile','UserController@upload')->name('upload.doc')->middleware('auth');
Route::get('user/profile', function(){
    return view('user.profile');
 }) -> middleware('auth');


