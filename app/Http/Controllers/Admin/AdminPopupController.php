<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Save;
use App\Http\Controllers\Controller;
use App\Models\Popup;
use Illuminate\Http\Request;

class AdminPopupController extends Controller
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
        $popups = Popup::all();
        return view('admin.popups.create',compact('popups'));
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
            'title'=>'required',
        ]);
        $popup = new Popup();
        $popup->title = $request->title;
        $popup->message = $request->message;
        $popup->show = $request->show;
        $popup->link = $request->link;
        if($request->has('image')){
            $popup->image = Save::SaveImage($request->image);
        }
        $popup->save();
        return redirect()->back()->with('success','Popup Added');
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
        $popup = Popup::findOrFail($id);
        $popups = Popup::all();
        return view('admin.popups.edit',compact('popups','popup'));
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
            'title'=>'required',
        ]);
        $popup = Popup::findOrFail($id);
        $popup->title = $request->title;
        $popup->message = $request->message;
        $popup->show = $request->show;
        $popup->link = $request->link;
        if($request->has('image')){
            $popup->image = Save::SaveImage($request->image);
        }
        $popup->update();
        return redirect()->back()->with('success','Popup Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $popup = Popup::findOrFail($id);
        $popup->delete();
        return redirect(route('popups.create'))->with('success','Popup Deleted');
    }
}
