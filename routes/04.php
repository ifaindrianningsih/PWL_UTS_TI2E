<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini

    NIM     : 2041720045
    Nama    : Alpha Pramadhani
    Kelas   : TI-2E
    Nama sesuai folder controller : (contoh Aisyah_02 )

*/

use Illuminate\Support\Facades\Route;

// silahkan tulis code router dibawah ini
Route::resource('/karyawan', KaryawanController::class);
