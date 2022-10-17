<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Str;
use App\Model\album;
use App\Model\branch;
use App\Model\onlineExamClass;
use DB;

class branchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function brancheView()
    {
        $data['allData'] = branch::all();
        $data['menus'] = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.branche', $data);
    }

    public function brancheStore(Request $request)
    {

        $data = new branch();

        $data->branchName = $request->branchName;
        $data->branchAddress = $request->branchAddress;
        $data->branchlocation = $request->branchlocation;
        $data->branchNumber = $request->branchNumber;
        $data->branchDescription = $request->branchDescription;
        //$data->description =$request->description;
        // $data->created_by = Auth::user()->id;

        if ($request->file('branchImage')) {
            $image = $request->file('branchImage');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/branche/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['branchImage'] = $image_url;
        }

        $data->save();

        return redirect()->route('branche.view');
    }



    public function brancheedit($id)
    {
        $editData = branch::find($id);

        return view('Backend.editbranch', compact('editData'));
    }

    public function brancheupdate(Request $request, $id)
    {
        $data = branch::find($id);
        $data->branchName = $request->branchName;
        $data->branchAddress = $request->branchAddress;
        $data->branchlocation = $request->branchlocation;
        $data->branchNumber = $request->branchNumber;
        $data->branchDescription = $request->branchDescription;

        if ($request->file('branchImage')) {
            $image = $request->file('branchImage');
            @unlink(public_path('public/upload/branche/' . $data->image));
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/branche/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['branchImage'] = $image_url;
        }

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Employee Update Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('branche.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function branchedelet($id)
    {
        $user = branch::find($id);

        $user->delete();
        return redirect()->route('branche.view')->with('success', 'Data Delete Successfully');
    }
}
