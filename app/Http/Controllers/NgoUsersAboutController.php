<?php

namespace App\Http\Controllers;

use App\Models\AboutTable;
use Auth;
use Illuminate\Http\Request;

class NgoUsersAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->ngo->id;

        if(AboutTable::select('about_us')->where('ngo_id',$id)->exists()){
            $about =AboutTable::select('about_us','id')->where('ngo_id',$id)->get();
            if($about[0]->about_us==null){
                $about=null;
                return view('backend.users.pages.about.about',compact('about'));
            }
            return view('backend.users.pages.about.about',compact('about'));
        }
        $about  = null;
        return view('backend.users.pages.about.about',compact('about'));
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
         $id=Auth::user()->ngo->id;
        // dd($id);
        if(AboutTable::where('ngo_id',$id)->exists()){
            // dd($id);
            $mission= AboutTable::where('ngo_id',$id)->update(['about_us' => $request->about_us]);
            return redirect('/user/abouts');
        }
        $about =new AboutTable();
        $about->about_us = $request->about_us;
        $about->ngo_id = $id;
        $about->save();
        toast('About-us saved Successfully!','success');
        return redirect('/user/abouts');
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
        //
        AboutTable::where('ngo_id',$id)->update(['about_us' => $request->about_us]);
        toast('About-us updated Successfully!','success');
        return redirect('/user/abouts');
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
