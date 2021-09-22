<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\MainImageVideo;
use App\Models\PhotoGallery;
use App\Models\SliderImage;
use App\Models\Administrator;
use App\Models\NgoExecutiveCommittee;
use App\Models\Ngo;
use App\Models\Contact;
use App\Models\OurResponsibility;
use App\Models\About;
use App\Models\FrontendLogoAndNameSetting;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notices = Notice::where('status','active')->latest()->paginate(4);
        $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        // getting the services along with service details by relationship hasMany()
        $services = Service::where('status','active')->get();
        $image_video = MainImageVideo::where('status','active')->first();
        $sliders = SliderImage::where('status','active')->latest()->paginate(3);
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.main-site.index',compact('image_video','notices','services','sliders','admins','frontendLogoAndNameSetting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function about(){
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        return view('frontend.main-site.about',compact('admins','frontendLogoAndNameSetting'));
    }
    public function responsibility(){
        $res = OurResponsibility::first();
        $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.main-site.responsibility',compact('res','admins','frontendLogoAndNameSetting'));
    }
    public function message($id){
        $message = Administrator::find($id);
         $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.main-site.message',compact('admins','message','frontendLogoAndNameSetting'));
    }
    public function mission(){
        $res = About::first();
         $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.main-site.mission',compact('res','admins','frontendLogoAndNameSetting'));
    }
    public function history(){
        $res = About::first();
         $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.main-site.history',compact('res','admins','frontendLogoAndNameSetting'));
    }
    public function committee(){
        $ngoComs = NgoExecutiveCommittee::orderBy('order_no','asc')->latest()->paginate(20);
        $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.main-site.committee',compact('ngoComs','admins','frontendLogoAndNameSetting'));
    }
    public function gallery(){
        $galleries = PhotoGallery::where('status','active')->latest()->get();
         $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.main-site.gallery',compact('galleries','admins','frontendLogoAndNameSetting'));
    }
    public function photos($id){
        $photos = PhotoGallery::where('id',$id)->get();
        $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        $galleries = PhotoGallery::where('status','active')->latest()->get();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        // dd($photos);
        return view('frontend.main-site.galleryIndividual',compact('galleries','photos','admins','frontendLogoAndNameSetting'));
    }
    public function all_notice(){
        $notices = Notice::latest()->paginate(10);
        $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.main-site.all-notice',compact('notices','admins','frontendLogoAndNameSetting'));
    }
    public function details_notice($id){
        $notice = Notice::find($id);
        $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.main-site.notice-update-details',compact('notice','admins','frontendLogoAndNameSetting'));
    }
    public function list_of_nogo(){
        $ngos = Ngo::where('status','active')->latest()->paginate(10);
        $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        $admins = Administrator::where('status','active')->orderBy('order_no','asc')->get();
        return view('frontend.main-site.list-ngo',compact('ngos','admins','frontendLogoAndNameSetting'));
    }

    public function contact_us(){
        $contacts = Contact::first();
        $frontendLogoAndNameSetting = FrontendLogoAndNameSetting::first();
        return view('frontend.main-site.contact',compact('contacts','frontendLogoAndNameSetting'));
    }
}
