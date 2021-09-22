<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Notice;
use App\Models\NgoSeen;
use App\Models\Ngo;

use RealRashid\SweetAlert\Facades\Alert;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notices = Notice::paginate(10);
        return view('backend.admin.pages.notice.allNotice',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.admin.pages.notice.noticeEntry');
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
            'title' => 'required|max:255',
            'notice' => 'required',
        ]);
        $notice = new Notice();
        $notice->title = $request->title;
        $notice->notice = $request->notice;
        $notice->created_by =Auth::user()->name;
        $notice->save();
        toast('Notice Saved Successfully!','success');


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
        $notice = Notice::find($id);
        if($notice->status =='inactive'){
            $notice->status = 'active';
            $notice->save();
        }
        else{
            $notice->status='inactive';
            $notice->save();
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
        $notice = Notice::find($id);
        return view('backend.admin.pages.notice.editNotice',compact('notice'));
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
        $notice = Notice::find($id);
        $notice->title = $request->title;
        $notice->notice = $request->notice;
        $notice->updated_by =Auth::user()->name;
        $notice->save();
        toast('Notice Updated Successfully!','success');
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
        $notice = Notice::find($id);
        $notice->delete();
        toast('Notice Deleted Successfully!','success');
        return redirect()->back();
    }

    // to manage the notices
    public function manage(){
        $notices=Notice::paginate(10);
        return view('backend.admin.pages.notice.manageNotice',compact('notices'));
    }

    // to show individual notice
     public function detail($id){
         $notice = Notice::find($id);
         return view('backend.admin.pages.notice.noticeDetails',compact('notice'));
     }


}
