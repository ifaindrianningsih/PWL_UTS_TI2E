<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720035
    Nama    : IRMA MAULIDIA
    Kelas   : TI 2E
    Nama sesuai folder controller : (contoh Aisyah_02 )
    
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\irma_15\RumahController_15;

Route::resource('rumah', RumahController_15::class);
