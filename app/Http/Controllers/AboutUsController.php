<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        if(About::select('about_us')->where('id',1)->exists()){
            $about =About::select('about_us','id')->where('id',1)->get();
            if($about[0]->about_us==null){
                $about=null;
                return view('backend.admin.pages.about.aboutUs',compact('about'));
            }
            return view('backend.admin.pages.about.aboutUs',compact('about'));
        }
        $about = null;
        return view('backend.admin.pages.about.aboutUs',compact('about'));
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
        if(About::find(1)){
            $about= About::find(1);
            $about->about_us = $request->about;
            $about->save();
            toast('About-us Updated Successfully!','success');
            return redirect('/about-us');
        }
        $about =new About();
        $about->about_us = $request->about;
        $about->save();
        toast('About-us Saved Successfully!','success');
        return redirect('/about-us');
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
        $about =About::find($id);
        $about->about_us = $request->about;
        $about->save();
        toast('About-us Updated Successfully!','success');
        return redirect('/about-us');
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
