<?php

namespace App\Http\Controllers;
use App\Models\FrontendLogoAndNameSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontendSiteSettingController extends Controller
{
    //
    public function show(){
        $data =  FrontendLogoAndNameSetting::first();
        return view('backend.admin.pages.frontendSetting.frontendUpdate',compact('data'));
    }
    public function save(Request $request){

        $validated = $request->validate([
            'title' => 'required'
        ]);
        $data =  FrontendLogoAndNameSetting::first();

        if(request()->hasFile('photo')){
            Storage::disk('public')->delete('frontend/'.$data->logo);
            $image = request()->file('photo');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('frontend', $imageName, 'public');
            $data->logo = $imageName;
        }
        $data->name = $request->title;
        $data->save();
        toast('Frontend Logo/Name Updated Successfully!','success');
        return redirect()->back();
    }
}
