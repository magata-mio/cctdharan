<?php

namespace App\Http\Controllers;

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
}
