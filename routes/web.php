<?php

use App\Http\Controllers\Admin\CampusProfileController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\FacultyMemberController;
use App\Http\Controllers\Admin\NonTeachingStaffController;
use App\Http\Controllers\Admin\NoticeCategoryController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\PageController;
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
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Notice Category
Route::resource('categories',NoticeCategoryController::class);

// Notice
Route::resource('notices',NoticeController::class);

// Faculty Backend
Route::resource('departments',DepartmentController::class);

// Faculty member Backend
Route::resource('fmembers',FacultyMemberController::class);

// Nont Teaching Staff
Route::resource('nonteachingstaffs',NonTeachingStaffController::class);

// Profile of Campuse 
Route::resource('campusprofile',CampusProfileController::class);


/**
 * Front End Route
 * Only Front End Route are allowed here
 */
Route::get('faculties-member',[PageController::class,'getFacultiesMember']);
Route::get('onlineform',[PageController::class,'onlineform']);

// Department
Route::get('departments',[PageController::class,'department']);
Route::get('sdepartments/{id}',[PageController::class,'show']);

// Campus Profile
Route::get('cprofile',[PageController::class,'cprofile']);

