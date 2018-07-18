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
Route::get('search', 'MahasiswaController@search')->name('search');
Route::get('', 'MahasiswaController@index')->name('index');
Route::get('dashboard', 'MahasiswaController@dashboard')->name('dashboard');
Route::get('create', 'MahasiswaController@create')->name('create');
Route::post('insert', 'MahasiswaController@insert')->name('insert');
Route::get('delete/{id}', 'MahasiswaController@delete')->name('delete');
Route::get('edit/{id}', 'MahasiswaController@edit')->name('edit');
Route::post('edit/{id}', 'MahasiswaController@submitedit')->name('submitedit');
