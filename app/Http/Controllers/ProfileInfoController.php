<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Ngo;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class ProfileInfoController extends Controller
{
    //
    public function personal_info(Request $request){
        if(Auth::user()->role==='admin'){

            $id= Auth::user()->id;
            $user = User::find($id);
            $user->name = $request->english_name;
            $user->email = $request->email;
            $user->phone =$request->phone;

            if($request->hasFile('image')){
                Storage::disk('public')->delete('admin/'.Auth::user()->image);
                $image = request()->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('admin', $imageName, 'public');
                $user->image =$imageName;
            }
            $user->save();
            return redirect()->back();
        }
        else{
            $id= Auth::user()->id;
            $user = User::find($id);
            $ngo_id = Auth::user()->ngo->id;
            $ngo = Ngo::find($ngo_id);

            $user->name = $request->english_name;
            $user->email = $request->email;
            $user->phone =$request->phone;
            $user->save();

            $ngo->english_name = $request->english_name;
            $ngo->email = $request->email;
            $ngo->phone = $request->phone;
            $ngo->save();

            return redirect()->back();
        }

    }

    public function update_password(Request $request){

        // dd($request);
        $validated = $request->validate([
            'current_password' => 'required',
            'password' => 'required |confirmed'
        ]);

        $pass= Auth::user()->password;

        if(Hash::check($request->current_password,$pass)){
            $user = User::find(Auth::id());
			$user->password = Hash::make($request->password);
			$user->save();

			return redirect()->back();
        }
        else{
            return redirect()->back()->with('wrong','Passowrd Not Matched !');
        }

    }
}
