<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPassword extends Controller
{
    public function forgot(){
        return view('auth.forget-password');
    }
}
