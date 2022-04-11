<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720059
    Nama    : Gilang Setyawan
    Kelas   : TI 2E
    Nama sesuai folder controller : (contoh Gilang_13 )
    
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gilang_13\MesinCuciController;
// silahkan tulis code router dibawah ini
Route::resource('/mesincuci13',MesinCuciController::class);