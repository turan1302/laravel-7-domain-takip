<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('settings.index',compact('setting'));
    }

    public function update(Request $request,Setting $setting){

        $data=$this->validateData();

        if ($request->file('site_logo')){
            if (File::exists($setting->site_logo)){
                File::delete(public_path($setting->site));

                $file = $request->file('site_logo');
                $file_name = Str::slug($request->site_title).".".$file->getClientOriginalExtension();
                $file->storeAs('site_logo/',$file_name);
                $data['site_logo']='storage/site_logo/'.$file_name;

                $setting->update($data);
                return redirect()->back();
            }
        }else{
            $setting->update($data);
            return redirect()->back();
        }
    }

    public function validateData(){
        return \request()->validate(array(
            "site_logo"=>"mimes:jpeg,jpg,png",
            "site_title"=>"required",
            "site_description"=>"required",
            "owner_mail"=>"required"
        ),array(
            "site.logo.mimes"=>"JPEG, JPG, PNG Harici Resim Yüklenemez",
            "site_title.required"=>"Site Başlığı Boş Bırakılamaz",
            "site_description.required"=>"Site Açıklama Alanı Boş Bırakılamaz",
            "owner_mail"=>"Site Sahibinin Maili Boş Bırakılamaz"
        ));
    }
}
