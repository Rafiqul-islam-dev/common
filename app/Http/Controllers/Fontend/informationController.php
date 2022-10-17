<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\menu;
use App\Model\Slider;
use App\Model\notice;
use App\Model\onlineExamClass;
use App\Model\institution;

class informationController extends Controller
{
    public function notice()
    {
        $allNotice = notice::all();
        $insttuion = institution::all();
        $lastNotice = notice::orderBy('id', 'DESC')->limit(1)->get();
        return view('Fontend.pages.notice', compact('allNotice', 'insttuion', 'lastNotice'));
    }


    public function ictLab()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 21)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.ictLab', compact('menus', 'allMenus', 'submenu'));
    }

    public function noticeview($id)
    {

        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 21)->get();
        $allMenus = menu::all();
        $allNotice = Slider::find($id);
        return view('Fontend.pages.viewNoticedetail', compact('menus', 'allMenus', 'submenu', 'allNotice'));
    }
}
