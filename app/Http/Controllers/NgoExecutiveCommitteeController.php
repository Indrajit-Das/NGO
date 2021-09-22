<?php

namespace App\Http\Controllers;

use App\Models\NgoExecutiveCommittee;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
class NgoExecutiveCommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ngoCom = NgoExecutiveCommittee::paginate(20);
        return view('backend.admin.pages.ngo_executive_committee.ngoCommitteeManage',compact('ngoCom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.pages.ngo_executive_committee.ngoExecutiveComitteeEntry');
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
            'name' =>'required',
            'organization_name' => 'required|max:100',
            'committee_title' => 'required|max:100',
            'phone' => 'required',
            'email' => 'required'
        ]);
        $ngoCom = new NgoExecutiveCommittee();
        $ngoCom->name = $request->name;
        $ngoCom->order_no = $request->order_no;
        $ngoCom->organization = $request->organization_name;
        $ngoCom->title_in_committee = $request->committee_title;
        $ngoCom->phone = $request->phone;
        $ngoCom->email = $request->email;
        $ngoCom->created_by = Auth::user()->name;
        $ngoCom->save();
        toast('Ngo-executive saved Successfully!','success');
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
        $ngoCom = NgoExecutiveCommittee::find($id);
        return view('backend.admin.pages.ngo_executive_committee.ngoCommitteeEdit',compact('ngoCom'));
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
            'name' =>'required',
            'organization_name' => 'required|max:100',
            'committee_title' => 'required|max:100',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $ngoCom = NgoExecutiveCommittee::find($id);
        $ngoCom->name = $request->name;
        $ngoCom->organization = $request->organization_name;
        $ngoCom->title_in_committee = $request->committee_title;
        $ngoCom->phone = $request->phone;
        $ngoCom->email = $request->email;
        $ngoCom->order_no = $request->order_no;
        $ngoCom->save();

        toast('Ngo-executive updated Successfully!','success');
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
        $ngoCom = NgoExecutiveCommittee::find($id);
        $ngoCom->delete();
        return redirect()->back();
    }
}
