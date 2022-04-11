<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LemariEsController;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
//Route::resource('lemaries', LemariEsController::class);
=======
>>>>>>> 20cff88d406511345ec50f25280340f357825eac
