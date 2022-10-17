<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\pageData;
use App\Model\onlineExamClass;


class pageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pageView()
    {
        $data['menus'] = onlineExamClass::where('classVersionID', '=', 1)->get();
        $data['pageData'] = pageData::all();
        return view('Backend.allPage', $data);
    }


    public function pageUpdate(Request $request, $id)
    {
        $data = pageData::find($id);
        $data->admission = $request->admission;
        $data->curriculam = $request->curriculam;

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Update Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('page.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }
}
