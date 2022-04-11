<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720145
    Nama    : Mahbub Auliaur Rahman
    Kelas   : TI-2E
    Nama sesuai folder controller : mahbub_19
    
*/

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// silahkan tulis code router dibawah ini 
Route::resource('dosen',\App\Http\Controllers\mahbub_19\Controller19::class);