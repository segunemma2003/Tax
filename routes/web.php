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
Route::get('layouts/messaging', 'MessageController@message')->Middleware('auth');
Route::post('layouts/messaging', 'MessageController@store')->name('store');
Route::get('layouts/details/{id}', 'MessageController@details')->name('details')->middleware('admin');
Route::get('layouts/view_messages', 'MessageController@view')->name('view')->middleware('admin');
Route::get('layouts/view_messages/{id}', 'MessageController@delete')->name('delete');
Route::get('admin/index','DashboardController@dashboard')->name('dashboard')->middleware('admin');

