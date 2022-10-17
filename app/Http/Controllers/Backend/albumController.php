<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Str;
use App\Model\album;
use App\Model\onlineExamClass;
use DB;

class albumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function albumView()
    {
        $data['allData'] = album::all();
        $data['menus'] = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.album', $data);
    }

    public function albumStore(Request $request)
    {

        $data = new album();

        $data->albumName = $request->albumName;
        //$data->description =$request->description;
        // $data->created_by = Auth::user()->id;

        if ($request->file('albumImage')) {
            $image = $request->file('albumImage');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/album/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['albumImage'] = $image_url;
        }

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Album Added Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('album.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }
    public function albumedit($id)
    {
        $editData = album::find($id);
        $menus = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.editAlbum', compact('editData', 'menus'));
    }

    public function albumupdate(Request $request, $id)
    {
        $data = album::find($id);

        $data->albumName = $request->albumName;

        if ($request->file('albumImage')) {
            $image = $request->file('albumImage');
            @unlink(public_path('public/upload/album/' . $data->image));
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/album/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['albumImage'] = $image_url;
        }

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Album Update Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('album.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function albumdelet($id)
    {
        $delete = DB::table('albums')->where('id', $id)->first();
        $image = $delete->image;
        unlink($image);
        DB::table('albums')
            ->where('id', $id)
            ->delete();
        return redirect()->route('album.view')->with('success', 'Data Delete Successfully');
    }
}
