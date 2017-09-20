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

Route::get('/keywords/', 'KeywordsController@index');
Route::get('/keywords/create', 'KeywordsController@create');
Route::post('/keywords', 'KeywordsController@store');

Route::get('/pracownicy/', 'PracownicyController@index');
Route::get('/pracownicy/create', 'PracownicyController@create');
Route::post('/pracownicy', 'PracownicyController@store');

Route::delete('/pracownicy/del/{id}', 'PracownicyController@destroy');
Route::post('/pracownicy/add/{id}', 'PracownicyController@update');

Route::post('/pracownicy/delkey/{id}', 'PracownicyController@destroy_key');
