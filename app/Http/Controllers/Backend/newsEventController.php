<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Str;
use App\Model\album;
use App\Model\newsEvent;
use App\Model\onlineExamClass;
use DB;

class newsEventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function newsEventView()
    {
        $data['allData'] = newsEvent::all();
        $data['menus'] = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.eventNews', $data);
    }

    public function newsEventStore(Request $request)
    {

        $data = new newsEvent();

        $data->title = $request->title;
        $data->description = $request->description;
        $data->is_big = $request->boolean('is_big');
        //$data->Auth::user()->name =$request->description;
        $data->userName = Auth::user()->name;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/mewsEvent/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['image'] = $image_url;
        }

        $data->save();

        return redirect()->route('newsEvent.view');
    }



    public function newsEventedit($id)
    {
        $editData = newsEvent::find($id);

        return view('Backend.editEventNews', compact('editData'));
    }

    public function newsEventupdate(Request $request, $id)
    {
        $data = newsEvent::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->is_big = $request->boolean('is_big');
        //$data->Auth::user()->name =$request->description;
        $data->userName = Auth::user()->name;

        if ($request->file('image')) {
            $image = $request->file('image');
            @unlink(public_path('public/upload/mewsEvent/' . $data->image));
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/mewsEvent/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['image'] = $image_url;
        }

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Employee Update Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('newsEvent.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function newsEventdelet($id)
    {
        $user = newsEvent::find($id);

        $user->delete();
        return redirect()->route('newsEvent.view')->with('success', 'Data Delete Successfully');
    }
}
