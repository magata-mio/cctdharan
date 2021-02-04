<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\FacultyMember;
use App\Models\Notice;
use App\Models\NoticeCategory;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public $notices;

    /**
     * Get All Faculties Members
     */
    public function getFacultiesMember()
    {
        $notices = Notice::all();
        $fmembers = FacultyMember::paginate(500000);
        return view('frontend.members.faculties-members',compact('fmembers','notices'));
    }

    /**
     * Online Entrance Form
     */

     public function onlineform()
     {
         return view('frontend.onlineform.create');
     }


     public function notice($id){
         $notice = Notice::findOrFail($id);
         return view('frontend.notice.show',compact('notice'));
     }
     public function noticeCategory($id){
         $category = NoticeCategory::findOrFail($id);
         $category->load('notices');
         return view('frontend.notice-category.show',compact('category'));
     }

     //  Department List
    public function department()
    {
        $departments = Department::all();
        return view('frontend.department.index',compact('departments'));
    }

    // Show Single Department
    public function show($id)
    {
        $department = Department::findOrFail($id);
        return view('frontend.department.show',compact('department'));
    }

    

}
