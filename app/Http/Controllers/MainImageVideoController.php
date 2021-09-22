<?php

namespace App\Http\Controllers;

use App\Models\MainImageVideo;
use Auth;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class MainImageVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $image_videos = MainImageVideo::paginate(10);
        return view('backend.admin.pages.home_image_video.image_videoList',compact('image_videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.admin.pages.home_image_video.image_videoEntry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'source' =>'required',
            'select_type' =>'required',
        ]);
        $image_video = new MainImageVideo();
        $image_video->src = $request->source;
        $image_video->ofType = $request->select_type;
        $image_video->created_by = Auth::user()->name;
        $image_video->save();
        toast('Video/Image Saved Successfully!','success');
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
        $image_video = MainImageVideo::find($id);

        if($image_video->status =='inactive'){
            $image_video->status = 'active';
            $image_video->save();
        }
        else{
            $image_video->status='inactive';
            $image_video->save();
        }
        return redirect()->back();
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
        $image_video = MainImageVideo::find($id);
        return view('backend.admin.pages.home_image_video.image_videoEdit',compact('image_video'));
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
        $validated = $request->validate([
            'source' =>'required',
            'select_type' =>'required',
        ]);
        $image_video = MainImageVideo::find($id);
        $image_video->src = $request->source;
        $image_video->ofType = $request->select_type;
        $image_video->updated_by = Auth::user()->name;
        $image_video->save();
        toast('Video/Image Updated Successfully!','success');
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
        $image_video = MainImageVideo::find($id);
        $image_video->delete();
        toast('Video/Image Deleted Successfully!','success');
        return redirect('/image-video');
    }
}
