<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Str;
use App\Model\onlineExamClass;
use App\Model\onlineExam;
use App\Model\calassRoutine;

class classRoutineController extends Controller
{
    public function classRoutineView($id)
    {
        $menus = onlineExamClass::where('classVersionID', '=', 1)->get();
        $onlineClass = onlineExamClass::all();
        $clasid = onlineExamClass::find($id);
        $classsubject = onlineExam::all();
        $classroutine = DB::table('calass_routines')
            ->join('online_exam_classes', 'calass_routines.classID', '=', 'online_exam_classes.id')
            ->where('online_exam_classes.id', '=', $id)
            ->get();

        return view('Backend.classRoutine', compact('onlineClass', 'menus', 'clasid', 'classsubject', 'classroutine'));
    }

    public function classRoutineStore(Request $request)
    {

        $data = new calassRoutine();

        $data->classID = $request->classID;
        $data->versionId = $request->versionId;
        $data->subject = $request->subject;
        // $data->examTime = $request->examTime;
        // $data->examLink = $request->examLink;

        if ($request->file('documentFile')) {
            $image = $request->file('documentFile');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/classRoutineDoc/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $data['documentFile'] = $image_url;
        }

        $data->save();

        return redirect()->back();
    }

    public function governingBodydelet($id)
    {
        $delete = DB::table('calass_routines')->where('id', $id)->first();
        $documentFile = $delete->documentFile;
        unlink($documentFile);
        DB::table('calass_routines')
            ->where('id', $id)
            ->delete();

        return redirect()->back()->with('success', 'Data Delete Successfully');
    }
}
