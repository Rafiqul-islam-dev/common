<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\videoGallary;
use App\Model\onlineExamClass;


class videoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function videoGallaryView()
    {
        $data['menus'] = onlineExamClass::where('classVersionID', '=', 1)->get();
        $data['gallaryData'] = videoGallary::all();
        return view('Backend.videoGallary', $data);
    }

    public function gallaryStore(Request $request)
    {

        $data = new videoGallary();

        $data->videolink = $request->videolink;
        $data->title = $request->title;

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Video Added Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('videoGallary.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }
    public function agallaryedit($id)
    {
        $editData = videoGallary::find($id);
        $menus = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.editPhotogallary', compact('editData', 'album', 'menus'));
    }

    public function gallaryupdate(Request $request, $id)
    {
        $data = videoGallary::find($id);

        $data->album_id = $request->album_id;
        $data->gallaryTitle = $request->gallaryTitle;

        if ($request->file('gallaryImage')) {
            $image = $request->file('gallaryImage');
            @unlink(public_path('public/upload/gallary/' . $data->image));
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/gallary/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['gallaryImage'] = $image_url;
        }

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Image Update Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('gallary.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function videoGallarydelet($id)
    {
        $user = videoGallary::find($id);

        $user->delete();
        return redirect()->route('videoGallary.view')->with('success', 'Data Delete Successfully');
    }
}
