<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class OurMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(About::select('mission')->where('id',1)->exists()){
            $mission =About::select('mission','id')->where('id',1)->get();
            if($mission[0]->mission==null){
                $mission=null;
                return view('backend.admin.pages.mission.ourMission',compact('mission'));
            }
            return view('backend.admin.pages.mission.ourMission',compact('mission'));
        }
        $mission  = null;
        return view('backend.admin.pages.mission.ourMission',compact('mission'));
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
            $mission= About::find(1);
            $mission->mission = $request->mission;
            $mission->save();
            toast('Our Mission Updated Successfully!','success');
            return redirect('/our-mission');
        }
        $mission =new About();
        $mission->mission = $request->mission;
        $mission->save();
        toast('Our Mission Saved Successfully!','success');
        return redirect('/our-mission');
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
        $mission =About::find($id);
        $mission->mission = $request->mission;
        $mission->save();
        toast('Our Mission Updated Successfully!','success');
        return redirect('/our-mission');
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
