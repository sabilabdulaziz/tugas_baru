<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.admin');
    }
    public function user_menu(){
        return view('admin.user');
    }

    public function profil(){
        return view('admin.profile');
    }

    public function profil_menu(){
        return view('admin.profile-edit');
    }
    public function profil_settings(){
        return view('admin.account-setting');
    }
}
