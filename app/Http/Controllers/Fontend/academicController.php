<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\menu;
use App\Model\notice;
use App\Model\onlineExamClass;
use App\Model\institution;
use App\Model\pageData;
use DB;


class academicController extends Controller
{
    public function dresscode()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.dresscode', compact('menus', 'allMenus', 'submenu'));
    }


    public function lessonplan()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.lessonplan', compact('menus', 'allMenus', 'submenu'));
    }

    public function routine()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        $insttuion = institution::all();
        $classList = onlineExamClass::all();
        $lastNotice = notice::orderBy('id', 'DESC')->limit(1)->get();
        return view('Fontend.pages.routine', compact('menus', 'allMenus', 'submenu', 'insttuion', 'lastNotice', 'classList'));
    }


    public function syllabus()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        $insttuion = institution::all();
        $classList = onlineExamClass::all();
        $lastNotice = notice::orderBy('id', 'DESC')->limit(1)->get();
        return view('Fontend.pages.syllabus', compact('menus', 'allMenus', 'submenu', 'lastNotice', 'insttuion', 'classList'));
    }

    public function extracurricular()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        $insttuion = institution::all();
        $pageData = pageData::all();
        $lastNotice = notice::orderBy('id', 'DESC')->limit(1)->get();
        return view('Fontend.pages.extracurricular', compact('menus', 'allMenus', 'submenu', 'insttuion', 'lastNotice', 'pageData'));
    }

    public function syllabusView($id)
    {
        $insttuion = institution::all();
        $classList = onlineExamClass::all();
        $lastNotice = notice::orderBy('id', 'DESC')->limit(1)->get();
        $clasid = onlineExamClass::find($id);
        $syllabus = DB::table('online_exams')
            ->join('online_exam_classes', 'online_exams.classID', '=', 'online_exam_classes.id')
            ->where('online_exam_classes.id', '=', $id)
            ->get();
        return view('Fontend.pages.classWiseSyllabus', compact('lastNotice', 'insttuion', 'classList', 'syllabus', 'clasid'));
    }

    public function routineView($id)
    {
        $insttuion = institution::all();
        $classList = onlineExamClass::all();
        $lastNotice = notice::orderBy('id', 'DESC')->limit(1)->get();
        $clasid = onlineExamClass::find($id);
        $syllabus = DB::table('calass_routines')
            ->join('online_exam_classes', 'calass_routines.classID', '=', 'online_exam_classes.id')
            ->where('online_exam_classes.id', '=', $id)
            ->get();
        return view('Fontend.pages.classWiseRoutine', compact('lastNotice', 'insttuion', 'classList', 'syllabus', 'clasid'));
    }

    public function infrastructure()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.infrastructure', compact('menus', 'allMenus', 'submenu'));
    }
}
