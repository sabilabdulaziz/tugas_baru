<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function tampilan_user(Request $request){
        $pengguna = User::all();

        return view('auth.profile-menu', [
            'pengguna' => $pengguna
        ]);
    }

}
