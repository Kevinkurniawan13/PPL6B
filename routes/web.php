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


use Illuminate\Support\Facades\Route;

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::resource('jadwal', 'JadwalController');
    Route::resource('laporan', 'LaporanController');
    Route::resource('pakar', 'PakarController');
    Route::get('/', 'HomeController@dashboard');
    Route::get('/laporanlitbang', 'LaporanController@laporanlitbang');
    Route::get('/indexmandor', 'JadwalController@indexmandor');
    Route::get('/pakar', 'PakarController@index');
    Route::get('/konsultasi', 'PakarController@konsultasi');
    Route::get('/kamus','PakarController@kamus');
    Route::post('/konsultasi', 'PakarController@prosesGejala');
           
});

Route::get('/indexlitbang', 'JadwalController@indexlitbang')->middleware(['auth', 'litbang']);


Route::group(['middleware' => ['auth', 'admin']], function () {
    // Route::get('/tambahuser', 'UserController@tambahuser');
    // Route::post('/simpanuser', 'UserController@simpanuser');
    Route::resource('sawah', 'SawahController');
    Route::resource('gejala', 'GejalaController');
    Route::get('/indexadmin', 'LaporanController@indexadmin');
});

Route::resource('users', 'UserController');



// Route::get('/home', 'HomeController@index')->name('home');
