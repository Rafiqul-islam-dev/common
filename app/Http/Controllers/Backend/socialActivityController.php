<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use App\Model\Slider;
use App\Model\social;
use App\Model\onlineExamClass;
use App\Model\onlineExam;
use Illuminate\Support\Str;

class socialActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function socialView()
    {
        $data['menus'] = onlineExamClass::where('classVersionID', '=', 1)->get();
        $data['cornerData'] = social::all();
        return view('Backend.social', $data);
    }


    public function socialUpdate(Request $request, $id)
    {
        $data = social::find($id);
        $data->facebook = $request->facebook;
        $data->youtube = $request->youtube;
        $data->linkdin = $request->linkdin;
        $data->fontvideo = $request->fontvideo;

        if ($request->file('videoImage')) {
            $image = $request->file('videoImage');
            @unlink(public_path('public/upload/videoimg/' . $data->image));
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/videoimg/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['videoImage'] = $image_url;
        }

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Update Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->back();
        } else {
            return Redirect()->back();
        }
    }
}
