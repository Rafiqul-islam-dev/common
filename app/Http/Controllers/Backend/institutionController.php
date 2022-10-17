<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Str;
use App\Model\institution;
use App\Model\onlineExamClass;
use App\Model\branch;
use DB;

class institutionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function institutionView()
    {

        $data['allData'] = institution::all();
        $data['menus'] = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.instituionSetup', $data);
    }

    public function institutionStore(Request $request)
    {

        $data = $request->validate([
            'institutionName' => 'required',
            'institutionHistory' => 'required',
            'chairmanName' => 'required',
            'principalName' => 'required',
        ]);

        $data = new institution();

        $data->institutionName = $request->institutionName;
        $data->institutionHistory = $request->institutionHistory;
        $data->chairmanName = $request->chairmanName;
        $data->chairmanMessage = $request->chairmanMessage;
        $data->principalName = $request->principalName;
        $data->principalMessage = $request->principalMessage;
        //$data->description =$request->description;
        // $data->created_by = Auth::user()->id;
        if ($request->file('chairmanImage')) {
            $image = $request->file('chairmanImage');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/institution/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['chairmanImage'] = $image_url;
        }
        if ($request->file('principalImage')) {
            $image = $request->file('principalImage');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/institution/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['principalImage'] = $image_url;
        }

        $data->save();

        return redirect()->route('institution.view');
    }



    public function institutionEdit($id)
    {
        $editData = institution::find($id);
        $menus = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.edItInstituion', compact('editData', 'menus'));
    }

    public function institutionUpdate(Request $request, $id)
    {
        $data = institution::find($id);

        $data->institutionName = $request->institutionName;
        $data->institutionHistory = $request->institutionHistory;
        $data->chairmanName = $request->chairmanName;
        $data->chairmanMessage = $request->chairmanMessage;
        $data->principalName = $request->principalName;
        $data->principalMessage = $request->principalMessage;
        $data->institutionAddress = $request->institutionAddress;
        $data->institutionEstd = $request->institutionEstd;
        $data->institutionEmail = $request->institutionEmail;
        $data->institutionNumber = $request->institutionNumber;
        if ($request->file('institutionLogo')) {
            $image = $request->file('institutionLogo');
            @unlink(public_path('public/upload/institution/' . $data->image));
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/institution/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['institutionLogo'] = $image_url;
        }
        if ($request->file('chairmanImage')) {
            $image = $request->file('chairmanImage');
            @unlink(public_path('public/upload/institution/' . $data->image));
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/institution/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['chairmanImage'] = $image_url;
        }
        if ($request->file('principalImage')) {
            $image = $request->file('principalImage');
            @unlink(public_path('public/upload/institution/' . $data->image));
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/institution/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['principalImage'] = $image_url;
        }

        $user = $data->save();

        // if ($dltuser) {
        //     $notification = array(
        //         'messege' => 'Successfully Employee Deleted ',
        //         'alert-type' => 'success'
        //     );
        //     return Redirect()->route('all.employee')->with($notification);
        // } else {
        //     $notification = array(
        //         'messege' => 'error ',
        //         'alert-type' => 'success'
        //     );
        //     return Redirect()->back()->with($notification);
        // }

        if ($user) {
            $notification = array(
                'messege' => 'Employee Update Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('institution.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function institutionDelet($id)
    {
        $user = institution::find($id);

        $user->delete();
        return redirect()->route('institution.view')->with('success', 'Data Delete Successfully');
    }
}
