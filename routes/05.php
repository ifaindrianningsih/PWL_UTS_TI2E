<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720234
    Nama    : Anisa Rizki Nurrahma
    Kelas   : TI2E
    Nama sesuai folder controller : (contoh Aisyah_02 )
    
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anisa_05\LemariEsController;
use Illuminate\Http\Request;


Route::resource('lemaries', LemariEsController::class);

// silahkan tulis code router dibawah ini 
