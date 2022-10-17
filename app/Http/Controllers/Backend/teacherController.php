<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Str;
use App\Model\teacher;
use App\Model\onlineExamClass;

class teacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function teacherView()
    {
        $data['allData'] = teacher::all();
        $data['menus'] = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.teacher', $data);
    }

    public function teacherStore(Request $request)
    {

        $data = new teacher();

        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->number = $request->number;
        $data->email = $request->email;
        $data->joiningDate = $request->joiningDate;
        //$data->description =$request->description;
        // $data->created_by = Auth::user()->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/Teacher/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['image'] = $image_url;
        }

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Teacher Added Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('teacher.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function teacheredit($id)
    {
        $editData = teacher::find($id);
        $menus = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.editeTeacher', compact('editData', 'menus'));
    }

    public function teacherupdate(Request $request, $id)
    {
        $data = teacher::find($id);

        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->number = $request->number;
        $data->email = $request->email;
        $data->joiningDate = $request->joiningDate;

        if ($request->file('image')) {
            $image = $request->file('image');
            @unlink(public_path('public/upload/Teacher/' . $data->image));
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/Teacher/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['image'] = $image_url;
        }

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Update Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('teacher.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function teacherdelet($id)
    {
        $delete = DB::table('governing_bodies')->where('id', $id)->first();
        $image = $delete->image;
        unlink($image);
        DB::table('governing_bodies')
            ->where('id', $id)
            ->delete();

        return redirect()->route('teacher.view')->with('success', 'Data Delete Successfully');
    }
}
