<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720127
    Nama    : Afvanie Rama Ardyansah
    Kelas   : TI - 2E
    Nama sesuai folder controller : (contoh Aisyah_02 )
    
*/



use App\Http\Controllers\afvanie_01\SepedaController;
use Illuminate\Support\Facades\Route;

// silahkan tulis code router dibawah ini 



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('sepeda', SepedaController::class);

Route::get('/', function () {
    return view('welcome');
});