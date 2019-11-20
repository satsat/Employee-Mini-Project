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

Route::group(['middleware'=>['auth', 'admin']], function(){

Route::get('/dashboard', 'AdminController@show_all_reports');
Route::get('/report1', 'AdminController@show_report1');
Route::get('/report2', 'AdminController@show_report2');
Route::get('/report3', 'AdminController@show_report3');
Route::get('/report4', 'AdminController@show_report4');
Route::get('/report5', 'AdminController@show_report5');
});


Route::get('/home', 'HomeController@index');
//Route::resource('dashboard2', 'AdminController');
