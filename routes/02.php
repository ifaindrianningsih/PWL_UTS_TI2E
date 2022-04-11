<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini

    NIM     : 2041720061
    Nama    : Siti Aisyah
    Kelas   : TI-2E
    Nama sesuai folder controller : (contoh Aisyah_02 )

*/


//use App\Http\Controllers\KendaraanUmumController;

use App\Http\Controllers\aisyah_02\KendaraanUmumController;
use Illuminate\Support\Facades\Route;


// silahkan tulis code router dibawah ini

Route::resource('aisyah_02', KendaraanUmumController::class);
