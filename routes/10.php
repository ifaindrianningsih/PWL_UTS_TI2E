<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\della_10\TasController_10;
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720034
    Nama    : Della Jannata Febiana
    Kelas   : TI-2E
    Nama sesuai folder controller : (contoh Aisyah_02 )
    
*/


// silahkan tulis code router dibawah ini 

Route::resource('/tas', TasController_10::class);
