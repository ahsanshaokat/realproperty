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

Route::get('/','PageController@index');
Route::get('/home','PageController@index');
Route::get('/house','PageController@index');
Route::get('/land','PageController@land');
Route::get('/apartment','PageController@apartment');
Route::get('/building','PageController@building');
Route::get('/warehouse','PageController@warehouse');
Route::get('/blog','PageController@blog');
Route::get('/about','PageController@about');
Route::get('/contactus','PageController@contactus');



Route::post('/search','PageController@store');
Route::post('/sendmessage','MessageController@store');


Auth::routes();