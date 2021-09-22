<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class OurHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(About::select('history')->where('id',1)->exists()){
            $history =About::select('history')->where('id',1)->get();
            if($history[0]->history==null){
                $history=null;
                return view('backend.admin.pages.history.ourHistory',compact('history'));
            }
            return view('backend.admin.pages.history.ourHistory',compact('history'));
        }
        $history = null;
        return view('backend.admin.pages.history.ourHistory',compact('history'));

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
            $history= About::find(1);
            $history->history = $request->history;
            $history->save();
            toast('Our History Updated Successfully!','success');
            return redirect('/our-history');
        }
        $history =new About();
        $history->history = $request->history;
        $history->save();
        toast('Our History Saved Successfully!','success');
        return redirect('/our-history');
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
        $history =About::find($id);
        $history->history = $request->history;
        $history->save();
        toast('Our History Updated Successfully!','success');
        return redirect('/our-history');
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
