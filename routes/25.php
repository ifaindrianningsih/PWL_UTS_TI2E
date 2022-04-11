<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720195
    Nama    : Novitasari
    Kelas   : TI2E
    Nama sesuai folder controller : (contoh Aisyah_02 )
    
*/

use App\Http\Controllers\novitasari_25;
use Illuminate\Support\Facades\Route;

// silahkan tulis code router dibawah ini 

Route::resource('mobil', mobilController::class);

Route::get('/', function () {
    return view('welcome');
});