<?php

namespace App\Http\Controllers;

use App\Models\AboutTable;
use Auth;
use Illuminate\Http\Request;

class NgoUsersMissionController extends Controller
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
        if(AboutTable::select('mission')->where('ngo_id',$id)->exists()){
            $mission =AboutTable::select('mission','id')->where('ngo_id',$id)->get();
            if($mission[0]->mission==null){
                $mission=null;
                return view('backend.users.pages.mission.mission',compact('mission'));
            }
            return view('backend.users.pages.mission.mission',compact('mission'));
        }
        $mission  = null;
        return view('backend.users.pages.mission.mission',compact('mission'));

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
            $mission= AboutTable::where('ngo_id',$id)->update(['mission' => $request->mission]);
            return redirect('/user/missions');
        }
        $mission =new AboutTable();
        $mission->mission = $request->mission;
        $mission->ngo_id = $id;
        $mission->save();
        toast('Mission saved Successfully!','success');
        return redirect('/user/missions');
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
        AboutTable::where('ngo_id',$id)->update(['mission' => $request->mission]);
        toast('Mission updated Successfully!','success');
        return redirect('/user/missions');
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
