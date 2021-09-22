<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Administrator;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $administrator = Administrator::paginate(10);
        return view('backend.admin.pages.adminstrator.administratorList',compact('administrator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.admin.pages.adminstrator.administratorEntry');
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
            'title' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required',
            'join_date' => 'required',
            'order_no' => 'required',

        ]);

        $image = request()->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('administrator_image', $imageName, 'public');

        $admin =new Administrator();
        $admin->order_no = $request->order_no;
        $admin->name = $request->name;
        $admin->title = $request->title;
        $admin->designation = $request->designation;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->telephone = $request->telephone;
        $admin->join_date = $request->join_date;
        $admin->message = $request->message;
        $admin->image = $imageName;
        $admin->leave_date = $request->leave_date;
        $admin->created_by = Auth::user()->name;
        $admin->save();

        toast('Administrator Saved Successfully!','success');
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
        $administrator = Administrator::find($id);
        return view('backend.admin.pages.adminstrator.administratorDetails',compact('administrator'));
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
        $administrator = Administrator::find($id);
        return view('backend.admin.pages.adminstrator.administratorEdit',compact('administrator'));
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
            'title' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'join_date' => 'required',
            'order_no' => 'required',
        ]);
        $adminEdit = Administrator::find($id);

        if (request()->hasFile('image')) {
            Storage::disk('public')->delete('administrator/'.$adminEdit->image);

            $image = request()->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('administrator_image', $imageName, 'public');
            $adminEdit->image = $imageName;
        }
        $adminEdit->order_no = $request->order_no;
        $adminEdit->name = $request->name;
        $adminEdit->title = $request->title;
        $adminEdit->designation = $request->designation;
        $adminEdit->email = $request->email;
        $adminEdit->phone = $request->phone;
        $adminEdit->telephone = $request->telephone;
        $adminEdit->join_date = date('Y-m-d', strtotime($request->join_date));
        $adminEdit->message = $request->message;
        $adminEdit->updated_by = Auth::user()->name;
        $adminEdit->save();
        toast('Administrator Updated Successfully!','success');
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
        $admin = Administrator::find($id);
        $admin->delete();
        return redirect()->back();

    }

    public function status($id){
        $admin = Administrator::find($id);
        if($admin->status =='inactive'){
            $admin->status = 'active';
            $admin->join_date = date('Y-m-d');
            $admin->save();
        }
        else{
            $admin->status='inactive';
            $admin->join_date = date('Y-m-d');
            $admin->save();
        }
        return redirect()->back();
    }
}
