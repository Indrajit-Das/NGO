<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Auth;

use Illuminate\Http\Request;

class NgoUsersOfficersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $officers = Officer::latest()->paginate(10);
        return view('backend.users.pages.officers.officersList',compact('officers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.users.pages.officers.officerEntry');
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
            'name' => 'required',
            'designation' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'image' => 'required',
        ]);

        $image = request()->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('officer_image', $imageName, 'public');

        $officer =new Officer();
        $officer->name = $request->name;
        $officer->designation = $request->designation;
        $officer->email = $request->email;
        $officer->phone = $request->phone;
        $officer->photo = $imageName;
        $officer->ngo_id = Auth::user()->ngo->id;
        $officer->save();

        toast('Officer Saved Successfully!','success');
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
        $officer = Officer::find($id);
        return view('backend.users.pages.officers.officerDetails',compact('officer'));
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
        $officer = Officer::find($id);
        return view('backend.users.pages.officers.officerEdit',compact('officer'));
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
            'name' => 'required',
            'designation' => 'required',
            'phone' => 'required',
            'email' => 'required',
            // 'image' => 'required',
        ]);
        $officerEdit = Officer::find($id);

        if (request()->hasFile('image')) {
            Storage::disk('public')->delete('employee_image/'.$officerEdit->photo);

            $image = request()->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('employee_image', $imageName, 'public');
            $officerEdit->photo = $imageName;
        }
        $officerEdit->name = $request->name;
        $officerEdit->designation = $request->designation;
        $officerEdit->email = $request->email;
        $officerEdit->phone = $request->phone;
        $officerEdit->save();
        toast('Officer Updated Successfully!','success');
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
        $employee = Officer::find($id);
        $employee->delete();
        toast('Officer deleted Successfully!','success');
        return redirect()->back();
    }
    public function status($id){
        $officer = Officer::find($id);
        if($officer->status =='inactive'){
            $officer->status = 'active';
            $officer->save();
        }
        else{
            $officer->status='inactive';
            $officer->save();
        }

        return redirect()->back();
    }
}
