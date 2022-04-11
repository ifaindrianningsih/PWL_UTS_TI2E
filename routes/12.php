<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini

    NIM     : 2041720207
    Nama    : Firgi Sotya Izzuddin
    Kelas   :
    Nama sesuai folder controller : firgi_12

*/

use App\Http\Controllers\firgi_12\LaptopController;
use Illuminate\Support\Facades\Route;

// silahkan tulis code router dibawah ini
Route::get('/laptop', [LaptopController::class, 'index']);
