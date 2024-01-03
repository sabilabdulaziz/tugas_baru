<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChangeProfileController extends Controller
{
    public function ubah_profil(){
        return view('auth.profile-menu');
    }

    public function upload_foto(Request $request){
        $this->validate($request,[
            'photo' => 'image|mimes:png,jpg,jpeg',
            'email' => 'email:dns'
        ]);


        $photo = null;

        if($request->file('photo')){




        }
        else{
            $foto = '';
        }
        $OriginalName = $request->file('photo')->getClientOriginalExtension();
        $name = $request->file('photo')->getClientOriginalName().'-'.now()->timestamp.'.'.$OriginalName;
        $photo = $request->file('photo')->storeAs('photo',$name);

        $id = auth()->user()->id;
        $pengguna = User::find($id);
        $pengguna->name = $request->name;
        $pengguna->email= $request->email;
        $pengguna->photo = $request->photo;
        $pengguna->update();

        return view('login.index');
    }

    public function image(){
        $id = Auth::id();
        $pengguna = User::find($id);
        if(!$pengguna){
            $profileImage = 'img/44.jpg';
        }
        return view('auth.profile-menu', compact('profileImage'));

    }
}
