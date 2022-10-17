<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Str;
use App\Model\album;
use App\Model\gallary;
use App\Model\onlineExamClass;
use DB;

class gallaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function gallaryView()
    {
        $data['album'] = album::all();
        $data['menus'] = onlineExamClass::where('classVersionID', '=', 1)->get();
        $data['gallaryData'] = gallary::all();
        return view('Backend.photogallary', $data);
    }

    public function gallaryStore(Request $request)
    {

        $data = new gallary();

        $data->album_id = $request->album_id;
        $data->gallaryTitle = $request->gallaryTitle;
        // $data->created_by = Auth::user()->id;

        if ($request->file('gallaryImage')) {
            $image = $request->file('gallaryImage');
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
                'messege' => 'Image Added Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('gallary.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }
    public function agallaryedit($id)
    {
        $editData = gallary::find($id);
        $album = album::all();
        $menus = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.editPhotogallary', compact('editData', 'album', 'menus'));
    }

    public function gallaryupdate(Request $request, $id)
    {
        $data = gallary::find($id);

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

    public function gallarydelet($id)
    {
        $delete = DB::table('gallaries')->where('id', $id)->first();
        $image = $delete->image;
        unlink($image);
        DB::table('gallaries')
            ->where('id', $id)
            ->delete();
        return redirect()->route('gallary.view')->with('success', 'Data Delete Successfully');
    }
}
