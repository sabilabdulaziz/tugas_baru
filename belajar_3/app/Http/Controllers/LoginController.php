<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{   // proses masuk ke halaman login
    public function masuk(){
        return view('auth.login');
    }
    //akhir dari masuk halaman login

    public function proses_masuk(Request $request){
        $data = $request->validate([
            'email' =>'required|email:dns',
            'password' => 'required|min:6|max:12'
        ]);
        if(Auth::attempt($data)){
            return redirect()->route('welcome')->with('succes','kamu berhasil masuk');
        }
        else{
            return back();
        }
    }

}
