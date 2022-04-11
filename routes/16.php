<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini

    NIM     : 2041720005
    Nama    : Judha Maygustya
    Kelas   : TI - 2E
    Nama sesuai folder controller : judha_16

*/

use App\Http\Controllers\judha_16\JamTanganController;
use Illuminate\Support\Facades\Route;

// silahkan tulis code router dibawah ini

Route::resource('jamtangan', JamTanganController::class);
