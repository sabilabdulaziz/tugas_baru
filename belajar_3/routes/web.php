<?php

use App\Http\Controllers\ForgotPassword;
use App\Http\Controllers\ForgotpasswordController;
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
Route::get('/lupa-pw',[ForgotpasswordController::class,'lupa_pw'])->name('lupa-pw');

Route::middleware('auth')->group(function(){
    Route::get('/logout',[LoginController::class,'Logout'])->name('logout');
    Route::get('/home', function () {
        return view('login.index');
    })->name('rumah');

    Route::get('/kategori',function(){
        return view('login.categories');
    })->name('kat1');

    Route::get('/categori2',function(){
        return view('login.categories2');
    })->name('kat2');

    Route::get('/categori3',function(){
        return view('anime.categories3');
    })->name('kat3');

    Route::get('/categori4',function(){
        return view('login.categories4');
    })->name('kat4');

    Route::get('/categori5',function(){
        return view('login.categories5');
    })->name('kat5');

    Route::get('/nonton',function(){
        return view('login.anime-watching');
    })->name('nt1');

    Route::get('/nonton',function(){
        return view('login.anime-watching2');
    })->name('nt2');

    Route::get('/nonton',function(){
        return view('login.anime-watching3');
    })->name('nt3');

    Route::get('/nonton',function(){
        return view('login.anime-watching4');
    })->name('nt4');

    Route::get('/nonton',function(){
        return view('login.anime-watching5');
    })->name('nt5');

    Route::get('/detil',function(){
        return view('login.anime-details');
    })->name('detil-anime');

    Route::get('/blog-detils',function(){
        return view('login.blog');
    })->name('blog');

    Route::get('/blog-detil',function(){
        return view('login.blog-details');
    })->name('blog-detil');

});





Route::middleware('guest')->group(function(){
    Route::get('/masuk',[LoginController::class,'masuk'])->name('login');
    Route::post('/proses-masuk',[LoginController::class,'proses_masuk'])->name('proses-masuk');

    Route::get('/daftar',[RegisterController::class,'daftar'])->name('daftar');
    Route::post('/proses-daftar',[RegisterController::class,'proses_daftar'])->name('proses-daftar');

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
    })->name('anime');

    Route::get('/anime-details',function(){
        return view('anime.anime-details');
    })->name('detil1');

    Route::get('/watch',function(){
        return view('anime.anime-watching');
    })->name('tonton');

    Route::get('/watch2',function(){
        return view('anime.anime-watching2');
    })->name('tonton2');

    Route::get('/watch3',function(){
        return view('anime.anime-watching3');
    })->name('tonton3');

    Route::get('/watch4',function(){
        return view('anime.anime-watching4');
    })->name('tonton4');


    Route::get('/watch5',function(){
        return view('anime.anime-watching5');
    })->name('tonton5');



    Route::get('/blog-detil',function(){
        return view('anime.blog-details');
    })->name('detil');



});
