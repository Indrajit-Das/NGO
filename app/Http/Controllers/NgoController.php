<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Ngo;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class NgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ngos = Ngo::paginate(10);
        return view('backend.admin.pages.ngo.ngoList',compact('ngos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.admin.pages.ngo.ngoEntry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $validated = $request->validate([
            // 'bangla_name' =>'required',
            'english_name' =>'required',
            'phone' => 'required',
            'email' => 'required',
            // 'address' => 'required',
            'web_site' =>'required',
            'password' =>'required | min:6 |confirmed',
            // 'logo' => 'required'
        ]);

        // creating the user first
        $user =new User();
        $user->name = $request->english_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();

        $ngo = new Ngo();
        $ngo->slug = Str::of($request->english_name)->slug('-');
        if (request()->hasFile('logo')) {
            $logo = request()->file('logo');
            $imageName = time() . '_' . $logo->getClientOriginalName();
            $logo->storeAs('ngo_logo', $imageName, 'public');
            $ngo->logo = $imageName;
        }
        $ngo->english_name = $request->english_name;

        $ngo->bangla_name = $request->bangla_name;
        $ngo->email = $request->email;
        $ngo->phone = $request->phone;
        $ngo->telephone = $request->telephone;
        $ngo->fax = $request->fax;
        $ngo->address = $request->address;
        $ngo->user_id = $user->id;
        // dd($user->id);
        $ngo->webAddress = $request->web_site;
        $ngo->regNo = time();
        $ngo->created_by = Auth::user()->name;
        $ngo->save();
        toast('Ngo Saved Successfully!','success');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ngo = Ngo::find($id);
        return view('backend.admin.pages.ngo.ngoDetails',compact('ngo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ngo = Ngo::find($id);
        return view('backend.admin.pages.ngo.ngoEdit',compact('ngo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ngoEdit = Ngo::find($id);
        $ngoEdit->slug = Str::of($request->english_name)->slug('-');
        if (request()->hasFile('logo')) {
            Storage::disk('public')->delete('ngo_logo/'.$ngoEdit->logo);
            $logo = request()->file('logo');
            $imageName = time() . '_' . $logo->getClientOriginalName();
            $logo->storeAs('ngo_logo', $imageName, 'public');
            $ngoEdit->logo = $imageName;
        }
        $ngoEdit->english_name = $request->english_name;
        $ngoEdit->bangla_name = $request->bangla_name;
        $ngoEdit->email = $request->email;
        $ngoEdit->phone = $request->phone;
        $ngoEdit->telephone = $request->telephone;
        $ngoEdit->fax = $request->fax;
        $ngoEdit->address = $request->address;
        $ngoEdit->webAddress = $request->web_site;
        $ngoEdit->updated_by = Auth::user()->name;
        $ngoEdit->save();

        toast('Ngo updated Successfully!','success');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ngo = Ngo::find($id);
        $ngo->delete();
        return redirect()->back();
    }

    public function status($id){
        $ngo = Ngo::find($id);
        if($ngo->status =='inactive'){
            $ngo->status = 'active';
            $ngo->save();
        }
        else{
            $ngo->status='inactive';
            $ngo->save();
        }
        return redirect()->back();
    }
}
