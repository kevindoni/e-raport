<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('dashboard');

Auth::routes();

// User Routes
Route::prefix('/user')->name('user.')->group(function () {
    Route::get('/', 'UserController@index')->name('index')->middleware('auth');
    Route::post('/', 'UserController@store')->name('store')->middleware('auth');
    Route::put('/{user?}', 'UserController@update')->name('update')->middleware('auth');
    Route::delete('/{user?}', 'UserController@destroy')->name('destroy')->middleware('auth');
});

// Siswa Routes
Route::prefix('/siswa')->name('siswa.')->group(function () {
    Route::get('/', 'SiswaController@index')->name('index')->middleware('auth');
    Route::get('/create', 'SiswaController@create')->name('create')->middleware('auth');
    Route::post('/', 'SiswaController@store')->name('store')->middleware('auth');
    Route::put('/{siswa?}', 'SiswaController@update')->name('update')->middleware('auth');
    Route::delete('/{siswa?}', 'SiswaController@destroy')->name('destroy')->middleware('auth');
});

// Tahun Ajaran Routes
Route::prefix('/tahun')->name('tahun.')->group(function () {
    Route::get('/', 'TahunAjaranController@index')->name('index')->middleware('auth');
    Route::post('/', 'TahunAjaranController@store')->name('store')->middleware('auth');
    Route::put('/{tahun?}', 'TahunAjaranController@update')->name('update')->middleware('auth');
    Route::delete('/{tahun?}', 'TahunAjaranController@destroy')->name('destroy')->middleware('auth');
});
