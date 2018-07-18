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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ArtikelController@index');
Route::get('/tampil', 'ArtikelController@tampil')->name('tampil');
Route::get('create', 'ArtikelController@create')->name('create');
Route::post('insert', 'ArtikelController@insert')->name('insert');
Route::get('delete/{id}', 'ArtikelController@delete')->name('delete');
Route::get('edit/{id}', 'ArtikelController@edit')->name('edit');
Route::post('edit/{id}', 'ArtikelController@submitedit')->name('submitedit');
Route::get('search', 'ArtikelController@search')->name('search');
Route::get('print', 'ArtikelController@print')->name('print');
