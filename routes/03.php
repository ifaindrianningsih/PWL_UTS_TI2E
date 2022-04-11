<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720219
    Nama    : Rossa Akmalia
    Kelas   : TI 2E
    Nama sesuai folder controller : (contoh Aisyah_02 )
    
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\akmalia_03\AnggotaPerpus_03Controller;

// silahkan tulis code router dibawah ini 

Route::resource('anggota', AnggotaPerpus_03Controller::class);

Route::get('search', [AnggotaPerpus_03Controller::class,'search'])->name('search');
