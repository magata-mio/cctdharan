<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminFormController;
use App\Http\Controllers\Admin\AdminNoticeCategoryController;
use App\Http\Controllers\Admin\AdminPopupController;
use App\Http\Controllers\Admin\CampusProfileController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\FactController;
use App\Http\Controllers\Admin\FacultyMemberController;
use App\Http\Controllers\Admin\FAQSController;
use App\Http\Controllers\Admin\GoverningBodyController;
use App\Http\Controllers\Admin\NonTeachingStaffController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PedagogyController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\ResearchController;
use App\Http\Controllers\Admin\SustainabilityController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostFormController;
use App\Models\About;
use App\Models\CampusProfile;
use App\Models\Department;
use App\Models\Facility;
use App\Models\Fact;
use App\Models\FacultyMember;
use App\Models\FAQ;
use App\Models\GoverningBody;
use App\Models\Notice;
use App\Models\NoticeCategory;
use App\Models\OnlineForm;
use App\Models\Pedagogy;
use App\Models\Popup;
use App\Models\Program;
use App\Models\Research;
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
    $departments = Department::all();
    $notices = Notice::all();
    $categories = NoticeCategory::all();
    $popup = Popup::where('show',TRUE)->orderBy('created_at','DESC')->first();
    return view('frontend.index',compact('notices','categories','popup','departments'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Notice
Route::resource('notices',NoticeController::class)->middleware('admin');

// Faculty Backend
Route::resource('departments',DepartmentController::class)->middleware('admin');

// Faculty member Backend
Route::resource('fmembers',FacultyMemberController::class)->middleware('admin');

// Nont Teaching Staff
Route::resource('nonteachingstaffs',NonTeachingStaffController::class)->middleware('admin');

// Campus profile
Route::resource('cprofile',CampusProfileController::class)->middleware('admin');

Route::resource('pedagogy',PedagogyController::class)->middleware('admin');
Route::resource('sustainability',SustainabilityController::class)->middleware('admin');


//Notice Category
Route::resource('noticecategories',AdminNoticeCategoryController::class)->middleware('admin');

Route::resource('popups',AdminPopupController::class)->middleware('admin');
Route::resource('about',AboutController::class)->middleware('admin');
Route::resource('facilities',FacilityController::class)->middleware('admin');

Route::resource('form',AdminFormController::class)->middleware('admin');
Route::resource('programs',ProgramController::class)->middleware('admin');
Route::resource('governingbodies',GoverningBodyController::class)->middleware('admin');
Route::resource('faqs',FAQSController::class)->middleware('admin');
Route::resource('research',ResearchController::class)->middleware('admin');
Route::resource('facts',FactController::class)->middleware('admin');
/**
 * Front End Route
 * Only Front End Route are allowed here
 */
Route::get('faculties-member',[PageController::class,'getFacultiesMember']);
Route::get('onlineform',[PageController::class,'onlineform']);
Route::post('onlineform',PostFormController::class)->name('form');
Route::get('notice/{id}',[PageController::class,'notice'])->name('frontend.notice');
Route::get('notice-category/{id}',[PageController::class,'noticeCategory'])->name('frontend.notice-category');

/**
 * Who are we Menu
 */
// Campus Profile
Route::get('campus-chief',function(){
    return view('frontend.message.campus-chief' );
});

Route::get('chairperson',function(){
    return view('frontend.message.chairperson' );
});


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

Route::get('contact',function(){
    return view('frontend.who_are_we.contact');
});


Route::get('facilities-page',function(){
    $facility = Facility::first();
    return view('frontend.facilities.facilities-page',compact('facility'));
});


Route::get('library',function(){
    return view('frontend.facilities.library');
});


Route::get('extra-activities',function(){
    return view('frontend.facilities.extra-curriculam');
});

Route::get('hostel',function(){
    return view('frontend.facilities.hostel');
});

Route::get('transportation',function(){
    return view('frontend.facilities.transportation');
});

Route::get('quarters',function(){
    return view('frontend.facilities.quarters');
});

Route::get('multimedia',function(){
    return view('frontend.facilities.multimedia');
});

Route::get('museam',function(){
    return view('frontend.facilities.mesuem');
});

Route::get('lab',function(){
    return view('frontend.facilities.lab');
});

Route::get('seminar-hall',function(){
    return view('frontend.facilities.seminal-hall');
});

Route::get('cafeteria',function(){
    return view('frontend.facilities.cafeteria');
});

Route::get('temple',function(){
    return view('frontend.facilities.temple');
});
Route::get('botanical',function(){
    return view('frontend.facilities.botanical');
});

Route::get('water-fountain',function(){
    return view('frontend.facilities.water-fountain');
});

Route::get('other',function(){
    return view('frontend.facilities.other');
});



Route::get('program-page',function(){
    $program = Program::first();
    return view('frontend.academic.program-page',compact('program'));
});

Route::get('gbody-page',function(){
    $gbody = GoverningBody::first();
    return view('frontend.component.gbody',compact('gbody'));
});

Route::get('faqs-page',function(){
    $faq = FAQ::first();
    return view('frontend.component.faqs-page',compact('faq'));
});

Route::get('research-page',function(){
    $research = Research::first();
    return view('frontend.research-and-publication.research',compact('research'));
});

Route::get('facts-page',function(){
    $fact = Fact::first();
    return view('frontend.academic.facts',compact('fact'));
});


// Department
Route::get('sdepartments',function(){
    $departments = Department::all();
        return view('frontend.academic.departments',compact('departments'));
});

Route::get('sdepartments/{id}',function($id){
    $members = FacultyMember::where('department_id',$id)->get();
    $department = Department::findOrFail($id);
    return view('frontend.academic.department-profile',compact('department','members'));
});

Route::get('admitcard/{id}',function($id){
    $form = OnlineForm::findOrFail($id);
    return view('frontend.admitcard.show',compact('form'));   
})->name('admitcard');