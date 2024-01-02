<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangeProfileController extends Controller
{
    public function ubah_profil(){
        return view('auth.profile-menu');
    }

    public function upload_foto(Request $request){
        $OriginalName = $request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('photo',$OriginalName);
    }
}
