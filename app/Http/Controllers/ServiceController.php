<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $serviceDetails = ServiceDetail::paginate(10);
        $serviceDetails = DB::table('service_details')
            ->join('services','services.id','=','service_details.service_id')
            ->select('service_details.*','services.id as service_table_id','services.title as service_title')
            ->paginate(10);
        return view('backend.admin.pages.service.serviceManage',compact('serviceDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Service::all();
        return view('backend.admin.pages.service.serviceEntry',compact('category'));
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
            'categoryId' =>'required',
            'title' => 'required|max:150',
            'link' =>'required'
        ]);
        $service = new ServiceDetail();
        $service->service_id = $request->categoryId;
        $service->title = $request->title;
        $service->order_no = $request->order_no;
        $service->link = $request->link;
        $service->created_by = Auth::user()->name;
        $service->save();

        toast('Service saved Successfully!','success');
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
        $service = ServiceDetail::find($id);
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
        $data = DB::table('service_details')
            ->join('services','services.id','=','service_details.service_id')
            ->select('service_details.*','services.id as service_table_id','services.title as service_title')
            ->where('service_details.id','=',$id)
            ->first();
        $category = Service::all();
        return view('backend.admin.pages.service.serviceEdit',compact('data','category'));
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
            'categoryId' =>'required',
            'title' => 'required|max:150',
            'link' =>'required'
        ]);
        $service = ServiceDetail::find($id);
        $service->service_id = $request->categoryId;
        $service->title = $request->title;
        $service->order_no = $request->order_no;
        $service->link = $request->link;
        $service->updated_by = Auth::user()->name;
        // dd($request,$id);
        $service->save();
        toast('Service updated Successfully!','success');
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
        $service = ServiceDetail::find($id);
        $service->delete();
        return redirect()->back();
    }
}
