<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini

    NIM     : 2041720013
    Nama    : Deatrisya Mirela Harahap
    Kelas   : TI 2E
    Nama sesuai folder controller : deatrisya_09

*/

use App\Http\Controllers\deatrisya_09\PembayaranBarangController;
use Illuminate\Support\Facades\Route;

// silahkan tulis code router dibawah ini
route::resource('barang',PembayaranBarangController::class);
