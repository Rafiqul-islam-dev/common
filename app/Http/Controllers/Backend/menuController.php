<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\onlineExamClass;
use App\Model\menu;

class menuController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        $data['allData'] = menu::orderBy('id', 'DESC')->get();
        $data['menus'] = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.menuView', $data);
    }

    public function store(Request $request)
    {


        $data = new menu();

        $data->MenunameBangla = $request->MenunameBangla;
        $data->MenuName = $request->MenuName;

        $data->save();

        return redirect()->route('menu.view');
    }



    public function edit($id)
    {
        $editData = menu::find($id);

        return view('Backend.editeMenu', compact('editData'));
    }



    public function update(Request $request, $id)
    {

        $data = menu::find($id);

        $data->MenunameBangla = $request->MenunameBangla;
        $data->MenuName = $request->MenuName;
        $data->ParentId = $request->ParentId;
        $data->url = $request->url;

        $data->save();
        return redirect()->route('menu.view')->with('success', 'Data update Successfully');
    }

    public function delet($id)
    {
        $user = User::find($id);

        $user->delete();
        return redirect()->route('users.view')->with('success', 'Data Delete Successfully');
    }
}
