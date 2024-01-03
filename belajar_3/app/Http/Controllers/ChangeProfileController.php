<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

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

            $OriginalName = $request->file('photo')->getClientOriginalExtension();
            $name = $request->file('photo')->getClientOriginalName().'-'.now()->timestamp.'.'.$OriginalName;
            $photo = $request->file('photo')->storeAs('photo',$name);



        }
        else{
            $foto = '';
        }
        $id = auth()->user()->id;
        $pengguna = User::find($id);
        $pengguna->name = $request->name;
        $pengguna->email= $request->email;
        $pengguna->photo = $request->photo;
        $pengguna->update();
    }
}
