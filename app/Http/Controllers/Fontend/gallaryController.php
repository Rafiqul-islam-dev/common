<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\menu;
use App\Model\Slider;
use App\Model\album;
use App\Model\gallary;
use App\Model\notice;
use App\Model\institution;
use App\Model\videoGallary;

use DB;

class gallaryController extends Controller
{
    public function photoGallary()
    {
        $allalbum = album::all();
        $insttuion = institution::all();
        $lastNotice = notice::orderBy('id', 'DESC')->limit(1)->get();
        return view('Fontend.pages.gallary', compact('allalbum', 'insttuion', 'lastNotice'));
    }

    public function ViewGallary($id)
    {
        $allalbum = album::all();
        $allGallery = DB::table('gallaries')
            ->join('albums', 'gallaries.album_id', '=', 'albums.id')
            ->where('albums.id', '=', $id)
            ->get();
        $insttuion = institution::all();
        $lastNotice = notice::orderBy('id', 'DESC')->limit(1)->get();
        if (count($allGallery) > 0) {
            $notification = array(
                'messege' => 'No Data Found Successfully',
                'alert-type' => 'success'
            );
            return view('Fontend.pages.viewGallary', compact('allGallery', 'insttuion', 'lastNotice'))->with($notification);
        } else {

            return view('Fontend.pages.gallary', compact('allalbum', 'insttuion', 'lastNotice'));
        }
    }

    public function videoGallary()
    {
        $allvideo = videoGallary::all();
        $insttuion = institution::all();
        $lastNotice = notice::orderBy('id', 'DESC')->limit(1)->get();
        return view('Fontend.pages.videoGallary', compact('allvideo', 'insttuion', 'lastNotice'));
    }
}
