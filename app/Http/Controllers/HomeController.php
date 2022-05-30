<?php

namespace App\Http\Controllers;

use App\Models\FacultyMember;
use App\Models\OnlineAdmission;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalFacultyMembers = FacultyMember::count();
        $onlineAdmission = OnlineAdmission::count();
        return view('home',compact('totalFacultyMembers','onlineAdmission'));
    }
}
