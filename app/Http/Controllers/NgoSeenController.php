<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon;
use DB;
use Auth;
use App\Models\Notice;
use App\Models\NgoSeen;
use RealRashid\SweetAlert\Facades\Alert;

class NgoSeenController extends Controller
{
    //
    public function notice_count(){
        $notice_count = NgoSeen::where(['ngo_id'=>Auth::user()->ngo->id,'seen_at'=>null])->get();
        return $notice_count;
    }
    public function unseen(){
        $ngo_id = Auth::user()->ngo->id;
        $unseen = DB::select("SELECT * FROM notices WHERE id NOT IN (SELECT notice_id FROM ngo_seens WHERE ngo_id = $ngo_id)");

        $li = '';
        $count = count($unseen);
        if($count > 0){
            foreach ($unseen as $un)
            {
                $li .='<li >
                <a class="app-notification__item notice_link" href="'.route('seen',$un->id).'">
                <span class="app-notification__icon"> <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x text-primary"></i>  <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span>  </span> <div>
                <p class="app-notification__message">'.$un->title.'</p>
                <p class="app-notification__meta">2 min ago</p></div> </a></li>';
            }
        }else{
            $li .= '<p>No Notife Found</p>';
        }
        $result = array(
            'notification' => $li,
            'count' => $count,
        );
        return response()->json($result);
    }
    public function seen($id){
        $notice = Notice::find($id);

        // if the user already seen the notice
        $noticeId = NgoSeen::where(['notice_id'=>$notice->id,'ngo_id'=>Auth::user()->ngo->id])->exists();
        if($noticeId ===false){
            $seen = new NgoSeen();
            $seen->notice_id = $notice->id;
            $seen->ngo_id = Auth::user()->ngo->id;
            $seen->seen_at = date('Y-m-d h:i:s a');
            $seen->updated_by = Auth::user()->name;
            $seen->save();
            $seenId = $seen->id;
            return view('backend.users.pages.notice.noticeShow',compact('notice','seenId','seen'));
        }
        else{
            $seen = NgoSeen::where(['notice_id'=>$notice->id,'ngo_id'=>Auth::user()->ngo->id])->first();
            $seenId = $seen->id;
            return view('backend.users.pages.notice.noticeShow',compact('notice','seenId','seen'));
        }




    }

    public function comment(Request $request){
        $ngoSeen = NgoSeen::find($request->seenId);
        $ngoSeen->comment = $request->comment;
        $ngoSeen->save();
        toast('Comment saved Successfully!','success');
        return redirect()->back();
    }

    public function allNotice(){
        // $all = NgoSeen::where('ngo_id',Auth::user()->ngo->id)->get();
        $all = DB::table('ngo_seens')
                ->join('notices','notices.id','=','ngo_seens.notice_id')
                ->select('ngo_seens.*','notices.title')
                ->where('ngo_seens.ngo_id',Auth::user()->ngo->id)
                ->get();
        return view('backend.users.pages.notice.allNoticification',compact('all'));
    }

}
