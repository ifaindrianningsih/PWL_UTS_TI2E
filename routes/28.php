<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720088
    Nama    : Shintya Rahmawati
    Kelas   : TI 2E
    Nama sesuai folder controller : (contoh Aisyah_02 )
    
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shintya_28\AksesorisPakaianController28;

Route::resource('aksesoris',AksesorisPakaianController28::class);

