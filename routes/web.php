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
    Route::get('/kelas/{user?}', 'UserController@showKelas')->name('kelas')->middleware('auth');
    Route::get('/jadwal/{user?}', 'UserController@showJadwal')->name('jadwal')->middleware('auth');
    Route::post('/', 'UserController@store')->name('store')->middleware('auth');
    Route::put('/{user?}', 'UserController@update')->name('update')->middleware('auth');
    Route::delete('/{user?}', 'UserController@destroy')->name('destroy')->middleware('auth');
});

// Data Sekolah Routes
Route::prefix('/sekolah')->name('sekolah.')->group(function () {
    Route::get('/', 'SekolahController@index')->name('index')->middleware('auth');
    Route::post('/', 'SekolahController@store')->name('store')->middleware('auth');
    Route::put('/{sekolah?}', 'SekolahController@update')->name('update')->middleware('auth');
    Route::delete('/{sekolah?}', 'SekolahController@destroy')->name('destroy')->middleware('auth');
});

// Data Mata Pelajaran Routes
Route::prefix('/pelajaran')->name('pelajaran.')->group(function () {
    Route::get('/', 'PelajaranController@index')->name('index')->middleware('auth');
    Route::post('/', 'PelajaranController@store')->name('store')->middleware('auth');
    Route::put('/{pelajaran?}', 'PelajaranController@update')->name('update')->middleware('auth');
    Route::delete('/{pelajaran?}', 'PelajaranController@destroy')->name('destroy')->middleware('auth');
});

// Kurikulum Routes
Route::prefix('/kurikulum')->name('kurikulum.')->group(function () {
    Route::get('/', 'KurikulumController@index')->name('index')->middleware('auth');
    Route::post('/', 'KurikulumController@store')->name('store')->middleware('auth');
    Route::put('/{kurikulum?}', 'KurikulumController@update')->name('update')->middleware('auth');
    Route::delete('/{kurikulum?}', 'KurikulumController@destroy')->name('destroy')->middleware('auth');
});

// Siswa Routes
Route::prefix('/siswa')->name('siswa.')->group(function () {
    Route::get('/', 'SiswaController@index')->name('index')->middleware('auth');
    Route::post('/', 'SiswaController@store')->name('store')->middleware('auth');
    Route::put('/{siswa?}', 'SiswaController@update')->name('update')->middleware('auth');
    Route::delete('/{siswa?}', 'SiswaController@destroy')->name('destroy')->middleware('auth');
});

// Tahun Ajaran Routes
Route::prefix('/tahun')->name('tahun.')->group(function () {
    Route::get('/', 'TahunAjaranController@index')->name('index')->middleware('auth');
    Route::post('/', 'TahunAjaranController@store')->name('store')->middleware('auth');
    Route::put('/{tahunAjaran?}', 'TahunAjaranController@update')->name('update')->middleware('auth');
    Route::delete('/{tahunAjaran?}', 'TahunAjaranController@destroy')->name('destroy')->middleware('auth');
});

// Kelas Routes
Route::prefix('/kelas')->name('kelas.')->group(function () {
    Route::get('/', 'KelasController@index')->name('index')->middleware('auth');
    Route::get('/create', 'KelasController@create')->name('create')->middleware('auth');
    Route::post('/', 'KelasController@store')->name('store')->middleware('auth');
    Route::get('/{kelas?}', 'KelasController@show')->name('show')->middleware('auth');
    Route::delete('/{kelas?}', 'KelasController@destroy')->name('destroy')->middleware('auth');
});

// Jadwal Routes
Route::prefix('/jadwal')->name('jadwal.')->group(function () {
    Route::put('/{kelas?}', 'JadwalController@update')->name('update')->middleware('auth');
});

// Raport Routes
Route::prefix('/raport')->name('raport.')->group(function () {
    Route::get('/export/{kelas?}', 'RaportController@export')->name('export')->middleware('auth');
    Route::post('/import/{kelas?}', 'RaportController@import')->name('import')->middleware('auth');
});
