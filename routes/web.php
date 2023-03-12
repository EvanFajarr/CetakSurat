<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratIzinController;
use App\Http\Controllers\IzinKantorController;
use App\Http\Controllers\CetakController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', SuratIzinController::class);


Route::resource('/suratizin', IzinKantorController::class);

Route::get('/cetak',[SuratIzinController::class,'tampil']);
// Route::get('/home/{$id}/cetak',[CetakController::class,'cetak']);


Route::get('/print',[IzinkantorController::class,'print']);

// Route::post('/create',[SuratIzinController::class,'create']);
// Route::post('/create',[SuratIzinController::class,'store']);