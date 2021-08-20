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

Route::get('/jadwalvaksinadmin', 'admin\\JadwalVaksinasiController@index');
Route::get('/jenisvaksin', 'admin\\JenisVaksinController@index');
Route::get('/laporanvaksin', 'admin\\LaporanController@index');
Route::get('/pegawai', 'admin\\PegawaiController@index');
Route::get('/vaksinator', 'admin\\VaksinatorController@index');
Route::get('/jadwalvaksinpegawai', 'pegawai\\JadwalVaksinasiController@index');
Route::get('/riwayat', 'pegawai\\RiwayatController@index');
