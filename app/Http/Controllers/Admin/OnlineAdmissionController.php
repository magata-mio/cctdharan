<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OnlineAdmission;
use Illuminate\Http\Request;

class OnlineAdmissionController extends Controller
{
    public function index()
    {
        $forms = OnlineAdmission::all();
        return view('admin.online-admission.index',compact('forms'));
    }

    public function show($id)
    {
        // return "hello";
        $form = OnlineAdmission::find($id);
        return view('admin.online-admission.show',compact('form'));
    }
}
