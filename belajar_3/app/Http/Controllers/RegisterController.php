<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //ini untuk proses masuk nya
    public function daftar(){
        return view('Login-Register-Logout.register');
    }
    //akhir dari proses masuk

    //ini untuk proses daftar nya
    public function proses_daftar(Request $request){
        $request->validate([
            ''
        ]);
    }
}
