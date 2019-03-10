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


Route::view('/','welcome');
Route::get('/course', 'CourseController@index');
Route::get('/student','StudentController@index');
Route::get('/test','TestController@index');
Route::get('/mark','MarkController@show');
Route::get('/report','StudentController@index');


Route::get('/report/{studentid}/{studentname}','ReportController@show');