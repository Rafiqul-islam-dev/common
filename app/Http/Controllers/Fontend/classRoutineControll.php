<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\menu;

use \GuzzleHttp\Client;
use Illuminate\Support\Facedes\Response;
use Image;

class classRoutineControll extends Controller
{
    public function routineMorning1()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineMorning1', compact('menus','allMenus', 'submenu'));
    }


    public function routineMorning2()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineMorning2', compact('menus','allMenus', 'submenu'));
    }

    public function routineMorning3()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineMorning3', compact('menus','allMenus', 'submenu'));
    }

    public function routineMorning4()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineMorning4', compact('menus','allMenus', 'submenu'));
    }

    public function routineMorning5()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineMorning5', compact('menus','allMenus', 'submenu'));
    }

    public function routineMorning6()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineMorning6', compact('menus','allMenus', 'submenu'));
    }
    public function routineMorning7()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineMorning7', compact('menus','allMenus', 'submenu'));
    }

    public function routineMorning8()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineMorning8', compact('menus','allMenus', 'submenu'));
    }

    public function routineMorning9()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineMorning9', compact('menus','allMenus', 'submenu'));
    }

    public function routineMorning10()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineMorning10', compact('menus','allMenus', 'submenu'));
    }

    public function routineMorning11()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineMorning11', compact('menus','allMenus', 'submenu'));
    }

    public function routineMorning12()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineMorning12', compact('menus','allMenus', 'submenu'));
    }

    //Day shift

    public function routineDay1()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineDay1', compact('menus','allMenus', 'submenu'));
    }


    public function routineDay2()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineDay2', compact('menus','allMenus', 'submenu'));
    }

    public function routineDay3()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineDay3', compact('menus','allMenus', 'submenu'));
    }

    public function routineDay4()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineDay4', compact('menus','allMenus', 'submenu'));
    }

    public function routineDay5()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineDay5', compact('menus','allMenus', 'submenu'));
    }

    public function routineDay6()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineDay6', compact('menus','allMenus', 'submenu'));
    }
    public function routineDay7()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineDay7', compact('menus','allMenus', 'submenu'));
    }

    public function routineDay8()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineDay8', compact('menus','allMenus', 'submenu'));
    }

    public function routineDay9()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineDay9', compact('menus','allMenus', 'submenu'));
    }

    public function routineDay10()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routineDay10', compact('menus','allMenus', 'submenu'));
    }

}
