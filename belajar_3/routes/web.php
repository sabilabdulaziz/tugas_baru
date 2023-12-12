<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\verifyMailController;
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



Route::get('/masuk',[LoginController::class,'masuk'])->name('login');
Route::post('/proses-masuk',[LoginController::class,'proses_masuk'])->name('proses-masuk');
Route::get('/daftar',[RegisterController::class,'daftar'])->name('daftar');
Route::post('/proses-daftar',[RegisterController::class,'proses_daftar'])->name('proses-daftar');

Route::get('/email/verification',[verifyMailController::class,'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verification/{id}/{hash}',[verifyMailController::class,'verify'])->middleware(['auth','signed'])->name('verification.verify');
Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
});
