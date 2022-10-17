<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\institution;
use App\Model\onlineExamClass;
use App\Model\studenCorner;

class studentCornerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function studentCornerView()
    {
        $data['menus'] = onlineExamClass::where('classVersionID', '=', 1)->get();
        $data['cornerData'] = studenCorner::all();
        return view('Backend.studentCorner', $data);
    }


    public function studentCornerupdate(Request $request, $id)
    {
        $data = studenCorner::find($id);
        $data->name1 = $request->name1;
        $data->name2 = $request->name2;
        $data->name3 = $request->name3;
        $data->title1 = $request->title1;
        $data->title2 = $request->title2;
        $data->title3 = $request->title3;
        $data->description1 = $request->description1;
        $data->description2 = $request->description2;
        $data->description3 = $request->description3;

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Update Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('studentCorner.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }
}
