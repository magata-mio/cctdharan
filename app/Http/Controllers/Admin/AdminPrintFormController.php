<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OnlineForm;
use Illuminate\Http\Request;

class AdminPrintFormController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,$id)
    {
        $form = OnlineForm::findOrFail($id);
        return view('admin.onlineform.print',compact('form'));
    }
}
