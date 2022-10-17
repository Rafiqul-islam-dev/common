<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\menu;

use DB;
use Illuminate\Support\Str;
use App\Model\onlineExamClass;
use App\Model\onlineExam;

class onlineexamController extends Controller
{


    //public function __construct()
    //{
    // $this->middleware('auth');
    //}

    // public function index()
    // {

    // }

    public function onlineExamView()
    {
        $menus = onlineExamClass::where('classVersionID', '=', 1)->get();
        $onlineClass = onlineExamClass::all();
        return view('Backend.onlineExam', compact('onlineClass', 'menus'));
    }

    // public function sliderView()
    // {
    //     $data['allData'] = Slider::all();
    //     return view('Backend.notice', $data);
    // }

    public function onlineExamStore(Request $request)
    {

        $data = new onlineExamClass();

        $data->classNameEnglish = $request->classNameEnglish;
        $data->classNameBangla = $request->classNameBangla;
        $data->classVersionID = $request->classVersionID;


        $data->save();

        return redirect()->route('onlineExam.view');
    }

    public function cliassView($id)
    {
        $menus = onlineExamClass::where('classVersionID', '=', 1)->get();
        $onlineClass = onlineExamClass::all();
        $clasid = onlineExamClass::find($id);
        $classsubject = DB::table('online_exams')
            ->join('online_exam_classes', 'online_exams.classID', '=', 'online_exam_classes.id')
            ->where('online_exam_classes.id', '=', $id)
            ->get();

        return view('Backend.onlineClass', compact('onlineClass', 'menus', 'clasid', 'classsubject'));
    }


    public function classSubStore(Request $request)
    {

        $data = new onlineExam();

        $data->classID = $request->classID;
        $data->versionId = $request->versionId;
        $data->subject = $request->subject;
        // $data->pdfDocument = $request->pdfDocument;
        // $data->examTime = $request->examTime;
        // $data->examLink = $request->examLink;

        if ($request->file('pdfDocument')) {
            $image = $request->file('pdfDocument');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/syllabusDoc/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['pdfDocument'] = $image_url;
        }

        $data->save();

        return redirect()->back();
    }



    ///Fontend
    public function examFontend()
    {
        $exam = onlineExamClass::all();

        return view('Fontend.pages.onlineexam', compact('exam'));
    }

    ///Fontend
    public function examFontendShedule($id)
    {
        $exam = onlineExam::all();

        return view('Fontend.pages.onlineclass', compact('exam'));
    }

    //Subject Delete
    public function subjectDelet($id)
    {
        $delete = DB::table('online_exams')->where('id', $id)->first();
        $pdfDocument = $delete->pdfDocument;
        unlink($pdfDocument);
        DB::table('online_exams')
            ->where('id', $id)
            ->delete();

        return redirect()->back()->with('success', 'Data Delete Successfully');
    }




















    public function edit($id)
    {
        $editData = onlineExamClass::find($id);
        $menus = onlineExamClass::where('classVersionID', '=', 1)->get();
        return view('Backend.editeClass', compact('editData', 'menus'));
    }

    public function update(Request $request, $id)
    {
        $data = onlineExamClass::find($id);

        $data->classNameEnglish = $request->classNameEnglish;
        $data->classNameBangla = $request->classNameBangla;
        $data->classVersionID = $request->classVersionID;

        $user = $data->save();
        if ($user) {
            $notification = array(
                'messege' => 'Employee Update Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('onlineExam.view')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function delet($id)
    {
        $user = Slider::find($id);

        $user->delete();
        return redirect()->route('slider.view')->with('success', 'Data Delete Successfully');
    }
}
