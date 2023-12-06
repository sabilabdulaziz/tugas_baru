<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //ini untuk proses masuk nya
    public function daftar(){
        return view('Login-Register-Logout.register');
    }
    //akhir dari proses masuk

    //ini untuk proses daftar nya
    public function proses_daftar(Request $request){
        //ini untuk ngefalidasi jika user tidak menginputkan salah satu inputan dan ngefalidasi jika user salah memasukan email
       $request->validate([
        'name' => 'required',
        'email' => 'required|email:dns',
        'password' => 'required|min:6|max:12'

       ]);
       // ini akhir dari validasi datanya

       //ini untuk pemisah datanya yang akan di kirim kan
       $data =[
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
      ];
      //ini akhir dari validasi datanya

      //ini untuk mengirimkan data user baru ke database
      User::create($data);
      //ini akhir dari pengiriman datanya

      //ini untuk mengembalikan user ke halaman login
      return redirect()->route('masuk')->with('succes','sip akun berhasil terdaftarkan');
    }
}
