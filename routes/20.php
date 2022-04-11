<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini

    NIM     : 2041720009
    Nama    : Mahisa Aghisni Fadhli
    Kelas   : TI 2E
    Nama sesuai folder controller : (contoh mahisa_20 )

*/

use App\Http\Controllers\mahisa_20\MahasiswaController;
use Illuminate\Support\Facades\Route;

// silahkan tulis code router dibawah ini
Route::get('/search', [MahasiswaController::class, 'search'])->name('search');
Route::resource('/mahasiswa', MahasiswaController::class);
