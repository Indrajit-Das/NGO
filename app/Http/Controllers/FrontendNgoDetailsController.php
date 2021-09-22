<?php

namespace App\Http\Controllers;
use App\Models\AboutTable;
use App\Models\Ngo;
use App\Models\Contact;
use App\Models\Officer;
use App\Models\Project;
use App\Models\Employee;
use App\Models\Notice;
use App\Models\Service;
use App\Models\MainImageVideo;
use App\Models\SliderImage;
use App\Models\Administrator;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class FrontendNgoDetailsController extends Controller
{
    //
    public function ngo_details($id){

        $notices = Notice::where('status','active')->latest()->paginate(4);
        // getting the services along with service details by relationship hasMany()
        $services = Service::where('status','active')->get();
        $image_video = MainImageVideo::where('status','active')->first();
        $sliders = SliderImage::where('status','active')->latest()->paginate(3);
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        $ngoDetails = Ngo::where('slug',$id)->first();
        return view('frontend.ngo-site.index',compact('notices','services','image_video','sliders','admins','ngoDetails'));
    }
    public function ngo_mission($id){
        $ngoDetails = Ngo::where('slug',$id)->first();
        $i = $ngoDetails->id;
        if(AboutTable::where('ngo_id',$i)->exists()){
            $res = AboutTable::where('ngo_id',$i)->first();
            // dd($res);
        }
        else{
            $res=null;
        }
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.ngo-site.mission.mission',compact('res','admins','ngoDetails'));
    }

    public function ngo_vision($id){
        $ngoDetails = Ngo::where('slug',$id)->first();
        $i = $ngoDetails->id;
        if(AboutTable::where('ngo_id',$i)->exists()){
            $res = AboutTable::where('ngo_id',$i)->first();
        }
        else{
            $res=null;
        }
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.ngo-site.vision.vision',compact('res','admins','ngoDetails'));
    }

     public function ngo_about($id){
        $ngoDetails = Ngo::where('slug',$id)->first();
        $i = $ngoDetails->id;
        if(AboutTable::where('ngo_id',$i)->exists()){
            $res = AboutTable::where('ngo_id',$i)->first();
        }
        else{
            $res=null;
        }
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.ngo-site.about-us.about',compact('res','admins','ngoDetails'));

    }
    public function ngo_contact($id){
        // $contact = Contact::where('ngo_id',$id);
        $ngoDetails = Ngo::where('slug',$id)->first();
        // $i = $ngoDetails->id;
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.ngo-site.contact.contact',compact('ngoDetails','admins'));
    }

    public function ngo_officers($id){
        $ngoDetails = Ngo::where('slug',$id)->first();
        $i = $ngoDetails->id;
        $officers = Officer::where('ngo_id',$i)->where('status','active')->paginate(10);
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();

        return view('frontend.ngo-site.officer\'s.officers',compact('ngoDetails','officers','admins'));
    }

    public function ngo_employees($id){
        $ngoDetails = Ngo::where('slug',$id)->first();
        $i = $ngoDetails->id;
        $employees = Employee::where('ngo_id',$i)->where('status','active')->paginate(10);
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();

        return view('frontend.ngo-site.employees.employees',compact('ngoDetails','employees','admins'));
    }

    public function ngo_projects($id){
        $ngoDetails = Ngo::where('slug',$id)->first();
        $i = $ngoDetails->id;
        $projects = Project::where('ngo_id',$i)->get();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();

        return view('frontend.ngo-site.projects.projects',compact('ngoDetails','projects','admins'));

    }
    public function ngo_project_details($i,$id){

        $project = Project::find($id);
        $ngoDetails = Ngo::where('slug',$i)->first();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.ngo-site.projects.projectDetails',compact('ngoDetails','project','admins'));
    }
    public function ngo_gallery($id){
        $ngoDetails = Ngo::where('slug',$id)->first();
        $galleries = PhotoGallery::where(['user_id'=>$ngoDetails->user_id,'status'=>'active'])->get();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.ngo-site.gallery.gallery',compact('admins','galleries','ngoDetails'));
    }
    public function ngo_gallery_individual($id,$i){
        $ngoDetails = Ngo::where('slug',$id)->first();
        $galleries = PhotoGallery::where(['user_id'=>$ngoDetails->user_id,'status'=>'active'])->get();
        $photos = PhotoGallery::where(['id'=>$i,'status'=>'active'])->get();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.ngo-site.gallery.galleryIndividual',compact('admins','galleries','ngoDetails','photos'));


        // $galleries = PhotoGallery::where('status','active')->latest()->get();
        // $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
    }

}
