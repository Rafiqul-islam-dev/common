<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\importantLink;
use App\Model\onlineExamClass;

class importantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function impLinkView()
    {

        $data['allData'] = importantLink::all();
        $data['menus'] = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.importanLink', $data);
    }

    public function impLinkStore(Request $request)
    {
        $data = new importantLink();

        $data->title = $request->title;
        $data->link = $request->link;

        $user = $data->save();


        if ($user) {
            $notification = array(
                'messege' => 'Employee Update Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('impLink.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }



    public function impLinkedit($id)
    {
        $editData = importantLink::find($id);
        $menus = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.editeimportantLink', compact('editData', 'menus'));
    }

    public function impLinkupdate(Request $request, $id)
    {
        $data = importantLink::find($id);

        $data->title = $request->title;
        $data->link = $request->link;

        $user = $data->save();

        return redirect()->route('impLink.view');

        if ($user) {
            $notification = array(
                'messege' => 'Successfully Employee Deleted ',
                'alert-type' => 'success'
            );
            return Redirect()->route('impLink.view')->with($notification);
        } else {
            $notification = array(
                'messege' => 'error ',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function impLinkdelet($id)
    {
        $user = importantLink::find($id);

        $user->delete();
        return redirect()->route('impLink.view')->with('success', 'Data Delete Successfully');
    }
}
