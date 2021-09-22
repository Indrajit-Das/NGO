<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderImage;
use Auth;
use Illuminate\Support\Facades\Storage;


class SliderImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slider = SliderImage::paginate(10);
        return view('backend.admin.pages.slider_image.sliderManage',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.admin.pages.slider_image.sliderEntry');
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
        $image = request()->file('photo');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('slider_image', $imageName, 'public');

        $slider =new SliderImage();
        $slider->slider_image = $imageName;
        $slider->created_by = Auth::user()->name;
        $slider->save();
        toast('Slider Image Saved Successfully!','success');
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
        $slider = SliderImage::find($id);
        if($slider->status=='inactive'){
            $slider->status = 'active';
            $slider->save();
        }
        else{
            $slider->status = 'inactive';
            $slider->save();
        }
        toast('Slider Image Status Changed Successfully!','success');
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
        $slider = SliderImage::find($id);
        return view('backend.admin.pages.slider_image.sliderEdit',compact('slider'));
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
        $slider = SliderImage::find($id);
        if(request()->hasFile('photo')){
            Storage::disk('public')->delete('slider_image/'.$slider->slider_image);
            $image = request()->file('photo');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('slider_image', $imageName, 'public');

            $slider->slider_image = $imageName;
            $slider->updated_by = Auth::user()->name;
            $slider->save();
            toast('Slider Image Updated Successfully!','success');
            return redirect()->back();
        }

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
        $slider = SliderImage::find($id);
        Storage::disk('public')->delete('slider_image/'.$slider->slider_image);
        $slider->delete();
        toast('Slider Image Deleted Successfully!','success');
        return redirect()->back();
    }
}
