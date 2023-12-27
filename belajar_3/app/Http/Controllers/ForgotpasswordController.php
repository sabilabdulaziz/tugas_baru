<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotpasswordController extends Controller
{
    public function lupa_pw(){
        return view('auth.forget-password');
    }
}
