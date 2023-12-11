<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class verifyMailController extends Controller
{
    public function verifikasi(){
        return view('auth.verifyMail');
    }
}
