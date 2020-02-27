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
    return view('result');
});

Route::get('/result','IndexController@result');
Route::post('/get_result','IndexController@get_result');
Route::get('/store_result','IndexController@store_result');
Route::post('/store','IndexController@store');
Route::get('/total','IndexController@total');
Route::get('/get_total','IndexController@get_total');


// Route::get('/index', 'DatabaseController@index');