<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720030
    Nama    : Nazela Hanum Mukhidah
    Kelas   : TI 2E
    Nama sesuai folder controller : (contoh Aisyah_02 )
    
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nazela_23\SepatuController_23;
use Illuminate\Http\Request;

// silahkan tulis code router dibawah ini 
Route::resource('/nazela_23', SepatuController_23::class);
