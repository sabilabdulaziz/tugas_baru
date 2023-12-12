<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


class verifyMailController extends Controller
{
    public function notice(){
        return view('auth.verifyMail');
    }
    public function verify(EmailVerificationRequest $request){
        $request->fulfill();
        return redirect()->route('welcome');
    }

}
