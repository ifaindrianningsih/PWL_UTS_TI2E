<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720052
    Nama    : Ahmad Dani Maulana
    Kelas   : TI 2E
    Nama sesuai folder controller : (contoh Aisyah_02 )
    
*/

use App\Http\Controllers\dani_08\SekolahController;
use Illuminate\Support\Facades\Route;
Route::resource('/sekolah', SekolahController::class);

// silahkan tulis code router dibawah ini 
