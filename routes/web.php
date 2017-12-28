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

})->name('home');

Route::resource('records', 'RecordsController');

Route::get('/records', 'RecordsController@index')->name('records.index');

Route::get('/names', 'NamesController@generate')->name('names');

Route::post('/addNames', 'NamesController@addNames');

Route::get('/data', 'DataController@index')->name('data.index');

Route::post('/records', 'RecordsController@index');