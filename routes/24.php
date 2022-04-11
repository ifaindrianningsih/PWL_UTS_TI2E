<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720173
    Nama    : Novianawati
    Kelas   : TI-2E
    Nama sesuai folder controller : (contoh Aisyah_02 )
    
*/

use App\Http\Controllers\novianawati_24\MotorController;
use Illuminate\Support\Facades\Route;

// silahkan tulis code router dibawah ini 
Route::resource('motor', MotorController::class);