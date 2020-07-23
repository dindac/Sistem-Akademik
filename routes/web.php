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

Route::get('/', 'PagesController@welcome');


Route::get('home', function () {
    return view('home');
});

Route::get('data_mahasiswa', 'MahasiswasController@data_mahasiswa');

Route::get('lihat_data_mahasiswa', 'MahasiswasController@lihat_data_mahasiswa');

Route::get('lihat_data_mahasiswa2', 'MahasiswasController@lihat_data_mahasiswa2');



//jobsheet 5

Route::get('input_mahasiswa', 'MahasiswasController@input_mahasiswa');

Route::post('mahasiswa', 'MahasiswasController@store');

//jobsheet 6
Route::get('simpan_data', function(){
    DB::table('mahasiswa')->insert([
        [
            'nim' => '0001',
            'nama' => 'Esti Herdina',
            'tanggal_lahir' => '1991-11-02',
            'jenis_kelamin' => 'P'
        ],
        [
            'nim' => '0002',
            'nama' => 'Dite Evita',
            'tanggal_lahir' => '1993-07-22',
            'jenis_kelamin' => 'P'
        ],
        [
            'nim' => '0003',
            'nama' => 'Dinda Cahya',
            'tanggal_lahir' => '2000-06-02',
            'jenis_kelamin' => 'P'
        ],
    ]);
});
