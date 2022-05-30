<?php

namespace App\Http\Controllers;

use App\Models\CampusProfile;
use App\Models\Department;
use App\Models\FacultyMember;
use App\Models\NonTeachingStaff;
use App\Models\Notice;
use App\Models\NoticeCategory;
use App\Models\OnlineAdmission;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public $notices;

    /**
     * Get All Faculties Members
     */
    public function getFacultiesMember()
    {
        $notices = Notice::orderBy('id','desc')->get();
        $fmembers = FacultyMember::paginate(20);
        return view('frontend.members.faculties-members',compact('fmembers','notices'));
    }

    public function nonteachingstaff()
    {
       $staffs = NonTeachingStaff::all();
       return view('frontend.nonteachingstaff',compact('staffs'));
    }

    /**
     * Online Entrance Form
     */

     public function onlineform()
     {
         return view('frontend.onlineform.create');
     }

     public function store(Request $request)
     {
        $data = $request->validate([
            'faculty' => 'required',
            'terms' => 'required',
            'subject1' => 'required',
            'name' => 'required',
            'parmanent' => 'required',
            'temporary' => 'required',
            'mobile' => 'required',
            'father' => 'required',
            'fathermobile' => 'required',
            'guardian' => 'required',
            'contact' => 'required',
            'father' => 'required',
            'photo' => 'required|file|max:512',
            'slip' => 'required|file|max:512',
            'documents' => 'required|file|max:5120',
        ]);
        
        $form = new OnlineAdmission();
        $form->faculty = $request->faculty;
        $form->terms = $request->terms;
        $form->type = $request->type;
        $form->subject1 = $request->subject1;
        $form->subject2 = $request->subject2;
        $form->subject3 = $request->subject3;
        $form->subject4 = $request->subject4;
        $form->name = $request->name;
        $form->parmanent = $request->parmanent;
        $form->temporary = $request->temporary;
        $form->mobile = $request->mobile;
        $form->email = $request->email;
        $form->dob = $request->dob;
        $form->father = $request->father;
        $form->fathermobile = $request->fathermobile;
        $form->guardian = $request->guardian;
        $form->contact = $request->contact;
        
        if($request->hasFile('photo')){
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('admission-images',$newName);
            $form->photo = 'admission-images/' . $newName;
        };

        if($request->hasFile('slip')){
            $file = $request->slip;
            $newName = time() . $file->getClientOriginalName();
            $file->move('admission-images',$newName);
            $form->slip = 'admission-images/' . $newName;
        };

        if($request->hasFile('documents')){
            $file = $request->documents;
            $newName = time() . $file->getClientOriginalName();
            $file->move('admission-documents',$newName);
            $form->documents = 'admission-documents/' . $newName;
        };

        $form->save();

        $request->session()->flash('message','Form Submitted');
        return redirect()->back();
     }

    /**
     * Online Admission 
     */

     public function onlineadmission()
     {
         return view('frontend.online-admission.create');
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
     
     //  Association
    public function association()
    {
        return view('frontend.associations');
    }

    // Student Welfare
    
    public function studentwelfare()
    {
       return view('frontend.studentwelfare');
    }

    // Student Union
    public function studentunion()
    {
        return view('frontend.studentunion');
    }

    // Other Association
    public function otherassociation()
    {
        return view('frontend.otherassociation');
    }

    // IQAC
    public function iqac()
    {
        return view('frontend.iqac');
    }

    // Publication
    public function publication()
    {
        return view('frontend.publication');
    }

}
