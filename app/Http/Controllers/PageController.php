<?php

namespace App\Http\Controllers;

use App\Models\CampusProfile;
use App\Models\Department;
use App\Models\FacultyMember;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Get All Faculties Members
     */
    public function getFacultiesMember()
    {
        $fmembers = FacultyMember::paginate(500000);
        return view('frontend.members.faculties-members',compact('fmembers'));
    }

    /**
     * Online Entrance Form
     */

     public function onlineform()
     {
         return view('frontend.onlineform.create');
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

    // Campus Profile
    public function cprofile()
    {
        $profile = CampusProfile::first();
        return view('frontend.campusprofile.index',compact('profile'));
    }
}
