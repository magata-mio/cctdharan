<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Save;
use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\NoticeCategory;
use Illuminate\Http\Request;

class NoticeController extends Controller
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
    {   $categories = NoticeCategory::all();
        $notices = Notice::all();
        $notices->load('category');
        return view('admin.notice.create',compact('categories','notices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject'=>'required',
            'notice_category_id'=>'required|exists:notice_categories,id'
        ]);
        $notice = new Notice();
        $notice->subject = $request->subject;
        $notice->notice_category_id = $request->notice_category_id;
        $notice->description= $request->editor;
        if($request->has('upload_file')){
            $notice->file = Save::SaveFile($request->upload_file);
        }
        $notice->save();
        return redirect()->back()->with('success','Notice Added');
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
        $categories = NoticeCategory::all();
        $notice= Notice::findOrFail($id);
        $notices = Notice::all();
        $notices->load('category');
        return view('admin.notice.edit',compact('categories','notices','notice'));
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
        $request->validate([
            'subject'=>'required',
            'notice_category_id'=>'required|exists:notice_categories,id'
        ]);
        $notice = Notice::findOrFail($id);
        $notice->subject = $request->subject;
        $notice->notice_category_id = $request->notice_category_id;
        $notice->description= $request->editor;
        if($request->has('upload_file')){
            $notice->file = Save::SaveFile($request->upload_file);
        }
        $notice->update();
        return redirect()->back()->with('success','Notice Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();
        return redirect(route('notices.create'))->with('success','Notice Deleted');
    }
}
