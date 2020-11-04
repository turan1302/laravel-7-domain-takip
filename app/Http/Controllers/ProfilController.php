<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function edit(User $user){
        return view('profil.index',compact('user'));
    }

    public function update(User $user){
       $user->update($this->validateData());
       return redirect()->back();
    }

    public function validateData(){

        return \request()->validate(array(
            "name"=>"required",
            "email"=>"required",
            "password"=>"confirmed"
        ),array(
            "name.required"=>"İsim Alanı Boş Bırakılamaz",
            "email.required"=>"E-Mail Alanı Boş Bırakılamaz",

            "password.confirmed"=>"Şifreler Eşleşmiyor"
        ));

    }
}
