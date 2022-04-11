<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini

    NIM     : 2041720063
    Nama    : Bella_07
    Kelas   : TI-2E
    Nama sesuai folder controller : (contoh Aisyah_02 )

*/

use App\Http\Controllers\bella_07\TvController;
use Illuminate\Support\Facades\Route;

// silahkan tulis code router dibawah ini
Route::resource('tv', TvController::class);
Route::get('cari',[TvController::class, 'search']);
