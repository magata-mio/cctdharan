<?php

namespace App\Http\Controllers;

use App\Helpers\Save;
use App\Models\OnlineForm;
use Illuminate\Http\Request;

class PostFormController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'pradesh'=>'required',
            'district'=>'required',
            'municipality'=>'required',
            'ward'=>'required',
            'student_mobile'=>'required',
            'dob'=>'date|required',
            'tole'=>'required',
            'a'=>'required',
            'b'=>'required',
            'c'=>'required',
            // 'd'=>'required',
            // 'e'=>'required',
            // 'f'=>'required',
            'g'=>'required',
            'h'=>'required',
            'i'=>'required',
            'j'=>'required',
            'k'=>'required',
            // 'l'=>'required',
            // 'm'=>'required',
            // 'n'=>'required',
            'o'=>'required',
            'p'=>'required',
            'marks'=>'required|numeric|digits_between:1,3',
            'slcmarksheet'=> 'required|file|max:512',
            'slccharacter'=>'required|file|max:512',
            'ptranscript' => 'file|max:512|required',
            'pcharacter' => 'file|max:512|nullable',
            'citizenship'=>'file|max:512|nullable',
            'ppphoto'=>'required|file|max:512',
            'bankslip'=>'nullable|file|max:512',
        ]);
        $onlineform = new OnlineForm();
        $onlineform->fill($request->except(['id',
        '_token',
        'created_at',
        'updated_at',
        'slcmarksheet',
        'slccharacter',
        'ptranscript',
        'pcharacter',
        'citizenship',
        'ppphoto',
        'bankslip']));
        $onlineform->slcmarksheet = Save::SaveImage($request->slcmarksheet);
        $onlineform->slccharacter = Save::SaveImage($request->slccharacter);
        $onlineform->ptranscript = Save::SaveImage($request->ptranscript);
        $onlineform->pcharacter = Save::SaveImage($request->pcharacter);
        $onlineform->citizenship = Save::SaveImage($request->citizenship);
        $onlineform->ppphoto = Save::SaveImage($request->ppphoto);
        $onlineform->bankslip = Save::SaveImage($request->bankslip);
        
        $onlineform->save();
        // return redirect(route('admitcard',$onlineform->id))->with('success','Form Added');
        return redirect()->back()->with('message','Form submitted');
    }
}
