<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact= Contact::all();

        if(!$contact->isEmpty()){
            if(($contact[0]->phone==null)&&($contact[0]->telephone==null)&&($contact[0]->email==null)&&($contact[0]->fax==null)&&($contact[0]->address==null)){
                $contact=null;
                return view('backend.admin.pages.contact.contact',compact('contact'));
            }
            return view('backend.admin.pages.contact.contact',compact('contact'));
        }
        $contact = null;
        return view('backend.admin.pages.contact.contact',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('backend.pages.contact.contact');
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
            'phone' => 'required',
            // 'telephone' => 'required',
            'email' => 'required',
            // 'fax' => 'required',
            'address' => 'required',
        ]);
        if(Contact::find(1)){
            $contact = Contact::find(1);
            $contact->phone = $request->phone;
            $contact->telephone = $request->telephone;
            $contact->email = $request->email;
            $contact->fax = $request->fax;
            $contact->address = $request->address;
            $contact->created_by = Auth::user()->name;
            $contact->save();
            toast('Contact saved Successfully!','success');
            return redirect('/contact');
        }
        $contact = new Contact();
        $contact->phone = $request->phone;
        $contact->telephone = $request->telephone;
        $contact->email = $request->email;
        $contact->fax = $request->fax;
        $contact->address = $request->address;
        $contact->created_by = Auth::user()->name;
        $contact->save();
        toast('Contact saved Successfully!','success');
        return redirect('/contact');
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
        // $contact = Contact::find($id);
        // return view('backend.pages.contact.contactManage',compact('contact'));
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
        $contact =Contact::find($id);
        $contact->phone = $request->phone;
        $contact->telephone = $request->telephone;
        $contact->email = $request->email;
        $contact->fax = $request->fax;
        $contact->address = $request->address;
        $contact->save();
        toast('Contact Updated Successfully!','success');
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
    }
}
