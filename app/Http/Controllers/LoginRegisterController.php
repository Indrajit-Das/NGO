<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\FrontendLogoAndNameSetting;
use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    //
    public function login_form(){
         $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.main-site.login_form',compact('admins','frontendLogoAndNameSetting'));
    }
    public function register_form(){
         $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.main-site.register_form',compact('admins','frontendLogoAndNameSetting'));
    }
}
