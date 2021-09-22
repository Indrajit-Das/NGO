<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $serviceCategory = Service::paginate(10);
        return view('backend.admin.pages.service_category.serviceCategoryManage',compact('serviceCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.admin.pages.service_category.serviceCategoryEntry');
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
            'order_no' =>'required',
            'category' => 'required|max:100'
        ]);
        $service = new Service();
        $service->title = $request->category;
        $service->order_no = $request->order_no;
        $service->created_by = Auth::user()->name;
        $service->save();
        toast('Service-category saved Successfully!','success');
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
        $service = Service::find($id);
        if($service->status =='inactive'){
            $service->status = 'active';
            $service->save();
        }
        else{
            $service->status='inactive';
            $service->save();
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
        $serviceCategory = Service::find($id);
        return view('backend.admin.pages.service_category.serviceCategoryEdit',compact('serviceCategory'));
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
            'order_no' =>'required',
            'category' => 'required|max:100'
        ]);
        $serviceCategory = Service::find($id);
        $serviceCategory->order_no = $request->order_no;
        $serviceCategory->title = $request->category;
        $serviceCategory->updated_by = Auth::user()->name;
        $serviceCategory->save();

        toast('Service-category updated Successfully!','success');
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
        $serviceCategory = Service::find($id);
        $serviceCategory->delete();
        return redirect()->back();
    }
}
