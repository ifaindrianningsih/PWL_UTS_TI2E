<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini

    NIM     : 2041720240
    Nama    : Farrel Valentino Bekti
    Kelas   : TI - 2E
    Nama sesuai folder controller : (contoh Aisyah_02 )

*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukMakananController;
use Illuminate\Http\Request;
// silahkan tulis code router dibawah ini
Route::get('/produkmakanan', [ProdukMakananController::class, 'ProdukMakanan']);
