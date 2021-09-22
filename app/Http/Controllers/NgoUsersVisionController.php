<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\AboutTable;
use Illuminate\Http\Request;

class NgoUsersVisionController extends Controller
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
        if(AboutTable::select('vision')->where('ngo_id',$id)->exists()){
            $vision =AboutTable::select('vision','id')->where('ngo_id',$id)->get();
            if($vision[0]->vision==null){
                $vision=null;
                return view('backend.users.pages.vision.vision',compact('vision'));
            }
            return view('backend.users.pages.vision.vision',compact('vision'));
        }
        $vision  = null;
        return view('backend.users.pages.vision.vision',compact('vision'));
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
            $mission= AboutTable::where('ngo_id',$id)->update(['vision' => $request->vision]);
            return redirect('/user/visions');
        }
        $mission =new AboutTable();
        $mission->vision = $request->vision;
        $mission->ngo_id = $id;
        $mission->save();
        toast('Vision saved Successfully!','success');
        return redirect('/user/visions');
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
        AboutTable::where('ngo_id',$id)->update(['vision' => $request->vision]);
        toast('Vision updated Successfully!','success');
        return redirect('/user/visions');
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
