<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720007
    Nama    : ifa_14
    Kelas   : TI 2E
    Nama sesuai folder controller : (contoh Aisyah_02 )
    
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ifa_14\BajuController;
use Illuminate\Http\Request;

// silahkan tulis code router dibawah ini
Route::resource('baju', BajuController::class); 
