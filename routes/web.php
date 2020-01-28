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

Route::get('blogs','blogController@index');
Route::get('blogs/{blogId}','blogController@show');
Route::get('new-blog','blogController@create');
Route::post('store-blogs','blogController@store');
Route::get('blogs/{id}/edit','blogController@edit');
Route::post('/blogs/{id}/update','blogController@update');
Route::get('/blogs/{blog}/delete','BlogController@destroy');
Route::get('/blogs/{blog}/complete','blogController@complete');
