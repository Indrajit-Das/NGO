<?php

namespace App\Http\Controllers;

use App\Models\OurResponsibility;
use Auth;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class ResponsibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(OurResponsibility::select('responsi')->where('id',1)->exists()){
            $responsibility =OurResponsibility::select('responsi','id')->where('id',1)->first();
            if($responsibility->responsi==null){
                $responsibility=null;
                return view('backend.admin.pages.responsibility.responsibilityEntry',compact('responsibility'));
            }
            return view('backend.admin.pages.responsibility.responsibilityEntry',compact('responsibility'));
        }
        $responsibility  = OurResponsibility::first();
        return view('backend.admin.pages.responsibility.responsibilityEntry',compact('responsibility'));
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
        if(OurResponsibility::find(1)){
            $responsibility= OurResponsibility::find(1);
            $responsibility->responsi = $request->responsibility;
            $responsibility->save();
            toast('Our Responsibility Updated Successfully!','success');
            return redirect('/our-responsibility');
        }
        $responsibility = new OurResponsibility();
        $responsibility->responsi = $request->responsibility;
        $responsibility->created_by = Auth::user()->name;
        $responsibility->save();
        toast('Our Responsibility Saved Successfully!','success');
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
        $responsibility = OurResponsibility::find($id);
        $responsibility->responsi = $request->responsibility;
        $responsibility->updated_by= Auth::user()->name;
        $responsibility->save();
        toast('Our Responsibility Updated Successfully!','success');
        $responsibility = OurResponsibility::find($id);
        if($responsibility==null){
            return redirect('/our-responsibility',compact('responsibility'));
        }
        return redirect('/our-responsibility');
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
