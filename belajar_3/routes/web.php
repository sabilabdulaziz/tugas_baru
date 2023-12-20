<?php

use App\Http\Controllers\ForgotPassword;
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



Route::get('/masuk',[LoginController::class,'masuk'])->name('login');
Route::post('/proses-masuk',[LoginController::class,'proses_masuk'])->name('proses-masuk');

Route::get('/daftar',[RegisterController::class,'daftar'])->name('daftar');
Route::post('/proses-daftar',[RegisterController::class,'proses_daftar'])->name('proses-daftar');


Route::middleware('auth')->group(function(){
    Route::get('/home', function () {
        return view('anime.index');
    })->name('rumah');
});

Route::get('/forgot-password',[ForgotPassword::class,'forgot'])->name('lupa-pw');



Route::middleware('guest')->group(function(){
    Route::get('/',function (){
        return view('anime.index');
    })->name('home');

    Route::get('/categori',function(){
        return view('anime.categories');
    })->name('kategori');

    Route::get('/kategori2',function(){
        return view('anime.categories2');
    })->name('kategori2');

    Route::get('/kategori3',function(){
        return view('anime.categories3');
    })->name('kategori3');

    Route::get('/kategori4',function(){
        return view('anime.categories4');
    })->name('kategori4');

    Route::get('/kategori5',function(){
        return view('anime.categories5');
    })->name('kategori5');

    Route::get('/blog',function(){
        return view('anime.blog');
    })->name('blog');

    Route::get('/anime-details',function(){
        return view('anime.anime-details');
    })->name('detil1');

    Route::get('/watch',function(){
        return view('anime.anime-watching');
    })->name('tonton');

    Route::get('/blog-detil',function(){
        return view('anime.blog-details');
    })->name('detil');

});
