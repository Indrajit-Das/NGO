<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Models\Ngo;
use App\Models\User;

class NgoUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $ngo =Ngo::find($id);
        return view('backend.users.pages.ngoInfo.ngoinfoUpdate',compact('ngo'));
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
        $ngo =Ngo::find($id);
        $user = User::find($ngo->user_id);

        $ngo->english_name = $request->english_name;
        $ngo->bangla_name = $request->bangla_name;
        $ngo->address = $request->address;
        $ngo->telephone = $request->telephone;
        $ngo->phone = $request->phone;
        $ngo->fax = $request->fax;
        $ngo->email = $request->email;
        $ngo->webAddress = $request->webAddress;
        $ngo->numberOfEmployees = $request->numberOfEmployees;

        if (request()->hasFile('logo')) {
            $logo = request()->file('logo');
            $imageName = time() . '_' . $logo->getClientOriginalName();
            if (Storage::disk('public')->exists('ngo_logo/'.$ngo->logo)) {
                Storage::disk('public')->delete('ngo_logo/'.$ngo->logo);
                $ngo->logo = $imageName;
                $user->image = $imageName;

                $logo->storeAs('ngo_logo', $imageName, 'public');

            }
            else{
                $logo->storeAs('ngo_logo', $imageName, 'public');
                $ngo->logo = $imageName;
                $user->image = $imageName;
            }
        }
        $ngo->save();
        $user->save();
        toast('Ngo info updated Successfully!','success');
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
    }
}
