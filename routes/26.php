<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720170    
    Nama    : Ridho Triadilaksono
    Kelas   : TI 2E
    Nama sesuai folder controller : (Ridho_26 )
    
*/
use App\Http\Controllers\ridho_26\MinumanController;

use Illuminate\Support\Facades\Route;

// silahkan tulis code router dibawah ini 
Route::get('/', function () {
    return view('welcome');
});
Route::resource('minuman', MinumanController::class);
Route::get('/search', [MinumanController::class, 'search'])->name('search');