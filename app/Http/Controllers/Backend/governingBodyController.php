<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Model\governingBody;
use App\Model\onlineExamClass;

class governingBodyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function governingBodyView()
    {
        $data['allData'] = governingBody::all();
        $data['menus'] = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.governingbody', $data);
    }

    public function governingBodyStore(Request $request)
    {

        $data = new governingBody();

        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->number = $request->number;
        $data->email = $request->email;
        //$data->description =$request->description;
        // $data->created_by = Auth::user()->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/governingBody/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['image'] = $image_url;
        }

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Added Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('governingBody.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function governingBodyedit($id)
    {
        $editData = governingBody::find($id);
        $menus = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.editeGoverningBody', compact('editData', 'menus'));
    }

    public function governingBodyupdate(Request $request, $id)
    {
        $data = governingBody::find($id);

        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->number = $request->number;
        $data->email = $request->email;

        if ($request->file('image')) {
            $image = $request->file('image');
            @unlink(public_path('public/upload/governingBody/' . $data->image));
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/governingBody/';
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
            return Redirect()->route('governingBody.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function governingBodydelet($id)
    {
        $delete = DB::table('governing_bodies')->where('id', $id)->first();
        $image = $delete->image;
        unlink($image);
        DB::table('governing_bodies')
            ->where('id', $id)
            ->delete();

        return redirect()->route('governingBody.view')->with('success', 'Data Delete Successfully');
    }
}
