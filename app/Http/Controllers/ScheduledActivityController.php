<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ScheduledActivity;

class ScheduledActivityController extends Controller
{
    //
    public function activity_list(){
        $activities =ScheduledActivity::whereBetween('activity_date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->latest()->paginate(10);
        return view('backend.admin.pages.schedeled-activity.scheduledActivityList',compact('activities'));
    }
    public function details($id){
        $activity = ScheduledActivity::find($id);
        return view('backend.admin.pages.schedeled-activity.scheduledActivityDetails',compact('activity'));
    }
    public function comment(Request $request,$id){
        $activity = ScheduledActivity::find($id);
        $activity->comment = $request->comment;
        $activity->mark_grade = $request->mark;
        $activity->save();

        toast('Comment saved Successfully!','success');
        return redirect()->back();
    }
}
