<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720114
    Nama    : Muhammad Lazuardi Timur
    Kelas   : TI - 2E
    Nama sesuai folder controller : (contoh Aisyah_02 )
    
*/

use App\Http\Controllers\lazuardi_17\BarangElektronikController;
use App\Models\BarangElektronik;
use Illuminate\Support\Facades\Route;

// silahkan tulis code router dibawah ini 
Route::resource('/BarangElektronik', BarangElektronikController::class);
