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

Route::get('/', function () {
    $mahasiswa = [
        [
        "nama" => "I Made Deva Kerti Wijaya",
        "nim" => "2015051012",
        "prodi" => "Prodi Mahasiswa",
        "jurusan" => "Jurusan Mahasiswa",
        "poinSkp" => "Perolehan Poin"
        ]
    ];
    return view('home',[
        "tittle" => "Home",
        "home" => $mahasiswa
    ]);
});

Route::get('/akun', function () {
    return view('akun',[
        "tittle" => "Akun Mahasiswa"
    ]);
});

Route::get('/skp', function () {
    return view('skp', [
        "tittle" => "Tambah SKP"
    ]);
});

Route::get('/portofolio', function () {
    return view('portofolio',[
        "tittle" => "Portofolio"
    ]);
});