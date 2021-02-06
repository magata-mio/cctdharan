<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\FacultyMember;
use Illuminate\Http\Request;

class FacultyMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $fmembers = FacultyMember::all();
        return view('admin.faculty-menber.create',compact('fmembers','departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'designation' => 'required',
            'gender' => 'required',
            'name' => 'required',
            'status' => 'required',

        ]);

        $member = new FacultyMember();
        $member->designation = $request->designation;
        $member->gender = $request->gender;
        $member->name = $request->name;
        $member->department_id = $request->department_id;
        $member->phd = $request->phd;
        $member->status = $request->status;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $imageName = time() . $file->getClientOriginalName();
            $file->move('faculty-member',$imageName);
            $member->image = 'faculty-member/' . $imageName;
        }

        $member->save();
        return redirect()->back();
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
    {    $departments = Department::all();
        $fmembers = FacultyMember::all();
        $fmember = FacultyMember::find($id);
        return view('admin.faculty-menber.edit',compact('fmember','fmembers','departments'));
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
        $validator = $request->validate([
            'designation' => 'required',
            'gender' => 'required',
            'name' => 'required',
            'status' => 'required',

        ]);
        $member = FacultyMember::find($id);
        $member->designation = $request->designation;
        $member->gender = $request->gender;
        $member->name = $request->name;
        $member->department_id = $request->department_id;
        $member->phd = $request->phd;
        $member->status = $request->status;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $imageName = time() . $file->getClientOriginalName();
            $file->move('faculty-member',$imageName);
            $member->image = 'faculty-member/' . $imageName;
        }

        $member->update();
        return redirect()->back();
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
}
