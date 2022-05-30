<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NonTeachingStaff;
use Illuminate\Http\Request;

class NonTeachingStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = NonTeachingStaff::all();
        return view('admin.non-teaching-staff.index',compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.non-teaching-staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff = new NonTeachingStaff();
        $staff->designation = $request->designation;
        $staff->workplace = $request->workplace;
        $staff->name = $request->name;
        $staff->gender = $request->gender;
        $staff->status = $request->status;
       if($request->hasFile('image')){
           $fileName = $request->image;
           $newName = time() . $fileName->getClientOriginalName();
           $fileName->move('nonteaching-staff-image',$newName);
           $staff->image = 'nonteaching-staff-image/' . $newName;
       }
       $staff->save();
       $request->session()->flash('message','Record Saved');
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
    {
        $staff = NonTeachingStaff::find($id);
        return view('admin.non-teaching-staff.edit',compact('staff'));
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
        $staff = NonTeachingStaff::find($id);
        $staff->designation = $request->designation;
        $staff->workplace = $request->workplace;
        $staff->name = $request->name;
        $staff->gender = $request->gender;
        $staff->status = $request->status;
       if($request->hasFile('image')){
           $fileName = $request->image;
           $newName = time() . $fileName->getClientOriginalName();
           $fileName->move('nonteaching-staff-image',$newName);
           $staff->image = 'nonteaching-staff-image/' . $newName;
       }
       $staff->update();
       $request->session()->flash('message','Record Updated Successfully');
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
