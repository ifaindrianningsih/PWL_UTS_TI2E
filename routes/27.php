<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720138
    Nama    : Salwa Zhafira Pratiwi Wahyudi
    Kelas   : TI 2E
    Nama sesuai folder controller : (contoh Aisyah_02 )
    
*/

use App\Http\Controllers\salwa_27\SmartphoneController_27;
use Illuminate\Support\Facades\Route;


// silahkan tulis code router dibawah ini 
Route::resource('/salwa_27', SmartphoneController_27::class);

