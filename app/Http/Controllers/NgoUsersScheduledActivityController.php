<?php

namespace App\Http\Controllers;

use App\Models\ScheduledActivity;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
class NgoUsersScheduledActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $activities = ScheduledActivity::whereBetween('activity_date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('ngo_id',Auth::user()->ngo->id)->latest()->paginate(10);
        return view('backend.users.pages.scheduledActivity.scheduledActivityList',compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.users.pages.scheduledActivity.scheduledActivityEntry');
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
             'activity_date' => 'required',
            'title' => 'required | max:80',
            'description' => 'required',
        ]);
        $activity= new ScheduledActivity();
        $activity->activity_date = $request->activity_date;
        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->ngo_id = Auth::user()->ngo->id;
        $activity->save();
        toast('Activity Saved Successfully!','success');
        return redirect()->back();
        // dd($request->all());

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
        $activity = ScheduledActivity::find($id);
        return view('backend.users.pages.scheduledActivity.scheduledActivityDetails',compact('activity'));
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
        $activity = ScheduledActivity::find($id);
        return view('backend.users.pages.scheduledActivity.scheduledActivityEdit',compact('activity'));
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
        $activity = ScheduledActivity::find($id);
        $activity->activity_date = $request->activity_date;
        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->save();
        toast('Activity Updated Successfully!','success');
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
        $activity = ScheduledActivity::find($id);
        $activity->delete();
        toast('Activity Deleted Successfully!','success');
        return redirect()->back();
    }
}
