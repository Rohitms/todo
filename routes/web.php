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


Route::get('/', 'todoController@todowd');
Route::get('/a','todoController@todo');
Route::post('/done','todoController@save');
Route::get('/disp','todoController@view');
Route::get('/delete/{d}','todoController@del');
Route::get('/edit/{d}','todoController@edit');
Route::post('/edit','todoController@sav');