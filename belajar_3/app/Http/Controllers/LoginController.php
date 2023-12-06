<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{   // proses masuk ke halaman login
    public function masuk(){
        return view('Login-Register-Logout.login');
    }
    //akhir dari masuk halaman login

    public function proses_masuk(Request $request){
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required"min:6|max:12'
        ]);
        if(auth()->attempt(request(['email','password']))){
            dd('masuk');
        } else{
            dd('gak masuk');
        }
    }

}
