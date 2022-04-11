
<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720180
    Nama    : Anjani Dwilestari
    Kelas   : TI-2E
    Nama sesuai folder controller : (contoh Aisyah_02 )
    
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anjani_06\MebelController06;
use Illuminate\Http\Request;

// silahkan tulis code router dibawah ini 
Route::resource('mebel_06', MebelController06::class);
