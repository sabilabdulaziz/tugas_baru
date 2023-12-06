<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/masuk',[LoginController::class,'masuk'])->name('masuk');
Route::get('/daftar',[RegisterController::class,'daftar'])->name('daftar');
Route::post('/proses-daftar',[RegisterController::class,'proses_daftar'])->name('proses-daftar');
