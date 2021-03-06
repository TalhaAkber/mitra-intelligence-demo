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
    return view('index');
});

Route::get('/api/get-all-data', 'DataController@getAll');
Route::get('/api/get-data', 'DataController@get');
Route::get('/api/get-years', 'DataController@getYears');

Route::get('/demo', function () {
    return view('demo');
});