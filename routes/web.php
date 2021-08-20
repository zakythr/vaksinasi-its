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

Route::get('/jadwalvaksinasiadmin', 'admin\\JadwalVaksinasiController@index');
Route::get('/addjadwalvaksinasiadmin', 'admin\\JadwalVaksinasiController@create');
Route::post('/addjadwalvaksinasiadmin', 'admin\\JadwalVaksinasiController@store');
Route::get('/detailjadwalvaksinasiadmin/{id}', 'admin\\JadwalVaksinasiController@detail');
Route::get('/jenisvaksin', 'admin\\JenisVaksinController@index');
Route::post('/jenisvaksin', 'admin\\JenisVaksinController@store');
Route::get('/laporanvaksin', 'admin\\LaporanController@index');
Route::get('/pegawai', 'admin\\PegawaiController@index');
Route::get('/vaksinator', 'admin\\VaksinatorController@index');
Route::post('/vaksinator', 'admin\\VaksinatorController@store');
Route::get('/jadwalvaksinpegawai', 'pegawai\\JadwalVaksinasiController@index');
Route::get('/riwayat', 'pegawai\\RiwayatController@index');
