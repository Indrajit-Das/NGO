<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
// use App\Http\Controllers\ForgotPasswordController;

use App\Http\Controllers\NoticeController;
use App\Http\Controllers\FrontendSiteSettingController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\NgoExecutiveCommitteeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\NgoController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\OurHistoryController;
use App\Http\Controllers\OurMissionController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\MainImageVideoController;
use App\Http\Controllers\SliderImageController;
use App\Http\Controllers\ScheduledActivityController;
use App\Http\Controllers\ResponsibilityController;
use App\Http\Controllers\FrontendNgoDetailsController;
use App\Http\Controllers\NgoUsersController;
use App\Http\Controllers\NgoUsersMissionController;
use App\Http\Controllers\NgoUsersVisionController;
use App\Http\Controllers\NgoUsersAboutController;
use App\Http\Controllers\NgoUsersEmployeesController;
use App\Http\Controllers\NgoUsersScheduledActivityController;
use App\Http\Controllers\NgoUsersOfficersController;
use App\Http\Controllers\NgoUsersProjectsController;
use App\Http\Controllers\NgoUsersPhotoGalleryController;
use App\Http\Controllers\NgoSeenController;

// for profile info change
use App\Http\Controllers\ProfileInfoController;

// models for dahsboard
use App\Models\Notice;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Models\Administrator;
use App\Models\Ngo;
use App\Models\NgoExecutiveCommittee;
use App\Models\PhotoGallery;
use App\Models\SliderImage;
use App\Models\Employee;
use App\Models\Officer;
use App\Models\Project;
use App\Models\NgoSeen;
use App\Models\ScheduledActivity;
use Carbon\Carbon;


// Frontend controllers
use App\Http\Controllers\FrontendController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// return view('auth.login');

// for frontend
Route::get('/',[FrontendController::class,'index'])->name('/home');
Route::get('/login',[LoginRegisterController::class,'login_form'])->name('login');
Route::get('/register',[LoginRegisterController::class,'register_form'])->name('register');
// Route::get('/forgot-password',[ForgotPasswordController::class,'forgot_password'])->name('forgot-password');
Route::get('/profile',[FrontendController::class,'about'])->name('/profile');
Route::get('/responsibility',[FrontendController::class,'responsibility'])->name('/responsibility');
Route::get('/administrator/message/{id}',[FrontendController::class,'message'])->name('/message');
Route::get('/mission',[FrontendController::class,'mission'])->name('/mission');
Route::get('/history',[FrontendController::class,'history'])->name('/history');
Route::get('/committee',[FrontendController::class,'committee'])->name('/committee');
Route::get('/gallery',[FrontendController::class,'gallery'])->name('/gallery');
Route::get('gallery/{id}',[FrontendController::class,'photos'])->name('/gallery.individual');
Route::get('/all-notice',[FrontendController::class,'all_notice'])->name('/all_notice');
Route::get('/details-notice/{id}',[FrontendController::class,'details_notice'])->name('/details_notice');
Route::get('/list-ngo',[FrontendController::class,'list_of_nogo'])->name('/list_of_nogo');
Route::get('{id}/details',[FrontendNgoDetailsController::class,'ngo_details'])->name('details');
Route::get('{id}/mission',[FrontendNgoDetailsController::class,'ngo_mission'])->name('mission');
Route::get('{id}/vision',[FrontendNgoDetailsController::class,'ngo_vision'])->name('vision');
Route::get('{id}/officers',[FrontendNgoDetailsController::class,'ngo_officers'])->name('officers');
Route::get('{id}/employees',[FrontendNgoDetailsController::class,'ngo_employees'])->name('employees');
Route::get('{id}/projects',[FrontendNgoDetailsController::class,'ngo_projects'])->name('projects');
Route::get('{id}/gallery',[FrontendNgoDetailsController::class,'ngo_gallery'])->name('ngo.gallery');
Route::get('{id}/gallery/{i}',[FrontendNgoDetailsController::class,'ngo_gallery_individual'])->name('ngo.gallery.individual');
// Route::get('projects/details/{id}',[FrontendNgoDetailsController::class,'ngo_project_details'])->name('projects/details');
Route::get('{i}/projects/details/{id}',[FrontendNgoDetailsController::class,'ngo_project_details'])->name('projects/details');
Route::get('{id}/about',[FrontendNgoDetailsController::class,'ngo_about'])->name('about');
Route::get('{id}/contact',[FrontendNgoDetailsController::class,'ngo_contact'])->name('contact');
Route::get('/contact-us',[FrontendController::class,'contact_us'])->name('/contact_us');



// for normal user
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard', function () {
        $ngoId = Auth::user()->ngo->id;
        $employee = count(Employee::where('ngo_id',$ngoId)->get());
        $officer = count(Officer::where('ngo_id',$ngoId)->get());
        $projects = count(Project::where('ngo_id',$ngoId)->get());
        $photoGallery = count(PhotoGallery::where('user_id',Auth::user()->id)->get());
        $activities =ScheduledActivity::whereBetween('activity_date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('ngo_id',Auth::user()->ngo->id)->latest()->paginate(10);
        return view('backend.users.pages.dashboard.dashboard',compact('employee','officer','projects','photoGallery','activities'));
    })->name('dashboard');

    Route::get('unseen',[NgoSeenController::class,'unseen'])->name('unseen');
    Route::get('user/notice/seen/{id}',[NgoSeenController::class,'seen'])->name('seen');
    Route::post('user/notice/seen',[NgoSeenController::class,'comment'])->name('notice.comment');

    Route::get('user/all-notice/seen/all',[NgoSeenController::class,'allNotice'])->name('all.notice');


    Route::get('/user/profile',function(){
        return view('backend.admin.pages.profile.profile-edit');
    })->name('user.profile.show');


    Route::put('/user/profile/personal-info',[ProfileInfoController::class,'personal_info'])->name('personal-info');
    Route::put('/user/profile/update-password',[ProfileInfoController::class,'update_password'])->name('update-password');

    Route::resource('/user/ngo-info', NgoUsersController::class);

    Route::resource('/user/scehduled-activity',NgoUsersScheduledActivityController::class);

    Route::resource('/user/missions',NgoUsersMissionController::class);
    Route::resource('/user/visions',NgoUsersVisionController::class);
    Route::resource('/user/abouts',NgoUsersAboutController::class);
    Route::resource('/user/employee',NgoUsersEmployeesController::class);
    Route::get('/user/employee/status/{id}',[NgoUsersEmployeesController::class,'status']);
    Route::resource('/user/officer',NgoUsersOfficersController::class);
    Route::get('/user/officer/status/{id}',[NgoUsersOfficersController::class,'status']);
    Route::resource('/user/project',NgoUsersProjectsController::class);
    Route::get('/user/project/status/{id}',[NgoUsersProjectsController::class,'status']);
    Route::resource('/user/photo-gallery', NgoUsersPhotoGalleryController::class);
});

// for backend admin
Route::middleware(['auth:sanctum', 'verified','admin'])->group(function(){
    Route::get('/admin/dashboard', function () {

        $activities =ScheduledActivity::whereBetween('activity_date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->latest()->paginate(10);

        $notices = Notice::all();
        $notices = count($notices);

        $service_category = Service::all();
        $service_category = count($service_category);

        $services = ServiceDetail::all();
        $services = count($services);

        $administrators = Administrator::all();
        $administrators = count($administrators);

        $ngo = Ngo::all();
        $ngo= count($ngo);

        $ngo_exe_com_members = NgoExecutiveCommittee::all();
        $ngo_exe_com_members = count($ngo_exe_com_members);

        $gallery_photo = PhotoGallery::all();
        $gallery_photo = count($gallery_photo);

        $slider = SliderImage::all();
        $slider = count($slider);
        // dd($gallery_photo);

        return view('backend.admin.pages.dashboard.dashboard',compact('notices','service_category','services','administrators','ngo','ngo_exe_com_members','gallery_photo','slider','activities'));
    })->name('admin/dashboard');
    //profile section
    Route::get('/admin/profile',function(){
        return view('backend.admin.pages.profile.profile-edit');
    })->name('profile.show');


    Route::put('/admin/profile/personal-info',[ProfileInfoController::class,'personal_info'])->name('personal-info');
    Route::put('/admin/profile/update-password',[ProfileInfoController::class,'update_password'])->name('update-password');
    // frontend site setting
    Route::get('/admin/frontend/setting',[FrontendSiteSettingController::class,'show'])->name('admin.frontend.setting');
    Route::post('/admin/frontend/setting',[FrontendSiteSettingController::class,'save'])->name('admin.frontend.setting.save');

    // ** Administrator section
    Route::resource('/administrator', AdministratorController::class);
    Route::get('/administrator/status/{id}', [AdministratorController::class,'status'])->name('/administrator/status');
    // admin ends here

    //** notice section */
    Route::get('/notice/manage',[NoticeController::class,'manage'])->name('/notice/manage');
    Route::get('/notice/detail/{id}',[NoticeController::class,'detail'])->name('/notice/detail');
    Route::resource('/notice', NoticeController::class);


    // Ngo-scheduled-activity
    Route::get('/ngo/scheduled-activity/list',[ScheduledActivityController::class,'activity_list'])->name('activity.list');
    Route::get('/ngo/scheduled-activity/list/details/{id}',[ScheduledActivityController::class,'details'])->name('activity.details');
    Route::put('/ngo/scheduled-activity/list/details/{id}',[ScheduledActivityController::class,'comment'])->name('activity.comment');
    // **Notice section ends here

    // **Service section */
    Route::resource('/service', ServiceController::class);
    Route::resource('/services/category', ServiceCategoryController::class);
    //service section ends here

    // **NgoExecutiveCommittee section here
    Route::resource('/ngo/committee', NgoExecutiveCommitteeController::class);
    // **NgoExecutiveCommittee section ends here

    // **Contact section here
    Route::resource('/contact',ContactController::class);
    // **contact ends here

    //** Photo gallery*/
    Route::resource('/photo-gallery', PhotoGalleryController::class);
    // ** photo gallery ends here

    // ** slider image
    Route::resource('/slider-image',SliderImageController::class);
    // slider ends here

    // ** ngo section
    Route::resource('/ngo', NgoController::class);
    Route::get('/ngo/status/{id}', [NgoController::class,'status'])->name('/ngo/status');
    // ngo ends here

    // ** Other routes
    Route::resource('/about-us', AboutUsController::class);
    Route::resource('/our-history', OurHistoryController::class);
    Route::resource('/our-mission', OurMissionController::class);
    Route::resource('/our-responsibility', ResponsibilityController::class);
    Route::resource('/image-video', MainImageVideoController::class);

});
