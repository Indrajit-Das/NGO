<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\PhotoGallery;
use Illuminate\Support\Facades\Storage;

class NgoUsersPhotoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $photoGallery = PhotoGallery::where('user_id',Auth::user()->id)->paginate(10);
        // dd($photoGallery);
        return view('backend.users.pages.photo_gallery.photoGalleryManage',compact('photoGallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.users.pages.photo_gallery.photoGalleryEntry');
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
            'photo' => 'required',
        ]);

        if($request->hasFile('photo')){
            $images =array();
            foreach($request->photo as $key=>$photo){
                $imageName = time() . '_'.++$key. $photo->getClientOriginalName();
                $photo->storeAs('photo_gallery', $imageName, 'public');

                array_push($images,$imageName);
            }
            $photoGallery = new PhotoGallery();
            $photoGallery->title = $request->title;
            $photoGallery->description = $request->description;
            $photoGallery->photo = json_encode($images);
            $photoGallery->created_by = Auth::user()->name;
            $photoGallery->user_id = Auth::user()->id;
            $photoGallery->save();
        }

        toast('Gallery Image Saved Successfully!','success');
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
        // $photoGallery = PhotoGallery::find($id);
        // if($photoGallery->status =='inactive'){
        //     $photoGallery->status = 'active';
        //     $photoGallery->save();
        // }
        // else{
        //     $photoGallery->status='inactive';
        //     $photoGallery->save();
        // }
        // return redirect()->back();
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
        $photoGallery = PhotoGallery::find($id);
        return view('backend.users.pages.photo_gallery.photoGalleryEdit',compact('photoGallery'));
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
        $photoGallery = PhotoGallery::find($id);

        if (request()->hasFile('photo')) {
            foreach($photoGallery->photo as $ph){
                Storage::disk('public')->delete('photo_gallery/'.$ph);
            }

            $images =array();
            foreach($request->photo as $key=>$photo){
                $imageName = time() . '_'.++$key. $photo->getClientOriginalName();
                $photo->storeAs('photo_gallery', $imageName, 'public');
                array_push($images,$imageName);
            }

            $photoGallery->title = $request->title;
            $photoGallery->description = $request->description;
            $photoGallery->photo = json_encode($images);
            $photoGallery->updated_by = Auth::user()->name;
            $photoGallery->save();
        }
        toast('Gallery Image updated Successfully!','success');
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
        $photoGallery = PhotoGallery::find($id);
        foreach($photoGallery->photo as $pt){
            Storage::disk('public')->delete('photo_gallery/'.$pt);
        }

        $photoGallery->delete();
        return redirect()->back();
    }
}
