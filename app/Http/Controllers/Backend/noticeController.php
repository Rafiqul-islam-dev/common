<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Str;
use App\Model\Slider;
use App\Model\notice;
use App\Model\onlineExamClass;
use App\Model\onlineExam;
use DB;


class noticeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function View()
    {
        $data['allData'] = notice::all();
        $data['menus'] = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.notice', $data);
    }

    public function store(Request $request)
    {

        $data = new notice();

        $data->title = $request->title;
        $data->description = $request->description;
        // $data->created_by = Auth::user()->id;

        if ($request->file('imagePath')) {
            $image = $request->file('imagePath');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/notice/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['imagePath'] = $image_url;
        }

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Notice Added Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('notice.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }
    public function edit($id)
    {
        $editData = notice::find($id);
        $menus = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.editNotice', compact('editData', 'menus'));
    }

    public function update(Request $request, $id)
    {
        $data = notice::find($id);

        $data->title = $request->title;
        $data->description = $request->description;

        if ($request->file('imagePath')) {
            $image = $request->file('imagePath');
            @unlink(public_path('public/upload/notice/' . $data->image));
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/notice/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['imagePath'] = $image_url;
        }

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Notice Update Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('notice.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function delet($id)
    {
        $delete = DB::table('notices')->where('id', $id)->first();
        $image = $delete->image;
        unlink($image);
        DB::table('notices')
            ->where('id', $id)
            ->delete();
        return redirect()->route('notice.view')->with('success', 'Data Delete Successfully');
    }
}
