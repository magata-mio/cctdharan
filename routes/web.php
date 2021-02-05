<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminNoticeCategoryController;
use App\Http\Controllers\Admin\AdminPopupController;
use App\Http\Controllers\Admin\CampusProfileController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\FacultyMemberController;
use App\Http\Controllers\Admin\NonTeachingStaffController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PedagogyController;
use App\Http\Controllers\Admin\SustainabilityController;
use App\Http\Controllers\PageController;
use App\Models\About;
use App\Models\CampusProfile;
use App\Models\Department;
use App\Models\Facility;
use App\Models\FacultyMember;
use App\Models\Notice;
use App\Models\NoticeCategory;
use App\Models\Pedagogy;
use App\Models\Popup;
use App\Models\Sustainability;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $notices = Notice::all();
    $categories = NoticeCategory::all();
    $popup = Popup::where('show',TRUE)->orderBy('created_at','DESC')->first();
    return view('frontend.index',compact('notices','categories','popup'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Notice
Route::resource('notices',NoticeController::class);

// Faculty Backend
Route::resource('departments',DepartmentController::class);

// Faculty member Backend
Route::resource('fmembers',FacultyMemberController::class);

// Nont Teaching Staff
Route::resource('nonteachingstaffs',NonTeachingStaffController::class);

// Campus profile
Route::resource('cprofile',CampusProfileController::class);

Route::resource('pedagogy',PedagogyController::class);
Route::resource('sustainability',SustainabilityController::class);


//Notice Category
Route::resource('noticecategories',AdminNoticeCategoryController::class);

Route::resource('popups',AdminPopupController::class);
Route::resource('about',AboutController::class);
Route::resource('facilities',FacilityController::class);

/**
 * Front End Route
 * Only Front End Route are allowed here
 */
Route::get('faculties-member',[PageController::class,'getFacultiesMember']);
Route::get('onlineform',[PageController::class,'onlineform']);
Route::get('notice/{id}',[PageController::class,'notice'])->name('frontend.notice');
Route::get('notice-category/{id}',[PageController::class,'noticeCategory'])->name('frontend.notice-category');

/**
 * Who are we Menu
 */
// Campus Profile
Route::get('campus-profile',function(){
    $profile = CampusProfile::first();
        return view('frontend.who_are_we.campus-profile',compact('profile'));
});

// About us
Route::get('about-us',function(){
    $about = About::first();
    return view('frontend.who_are_we.about',compact('about'));
});

Route::get('pedagogy-page',function(){
    $pedagogy = Pedagogy::first();
    return view('frontend.who_are_we.pedagogy',compact('pedagogy'));
});

Route::get('sustainability-page',function(){
    $sustainability = Sustainability::first();
    return view('frontend.who_are_we.sustainability',compact('sustainability'));
});


Route::get('facilities-page',function(){
    $facility = Facility::first();
    return view('frontend.facilities.facilities-page',compact('facility'));
});





// Department
Route::get('departments',function(){
    $departments = Department::all();
        return view('frontend.academic.departments',compact('departments'));
});

Route::get('sdepartments/{id}',function($id){
    $members = FacultyMember::where('department_id',$id)->get();
    $department = Department::findOrFail($id);
    return view('frontend.academic.department-profile',compact('department','members'));
});
