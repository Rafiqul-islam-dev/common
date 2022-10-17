<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Str;
use App\Model\Slider;
use App\Model\menu;
use App\Model\institution;
use DB;

class fontednController extends Controller
{

    public function index()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $allMenus = menu::all();
        $institutionall = institution::all();
        return view('Fontend.Layout.home', compact('menus', 'allMenus', 'institutionall'));
    }
}
