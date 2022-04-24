<?php

namespace Systems\Http\Controllers;

use Illuminate\Http\Request;

use Systems\Http\Requests;

use Systems\Announcement;
use Carbon\Carbon;

use Illuminate\Support\Facades\Input;

class AnnouncementController extends Controller
{
    public function index(){
        $announcements = Announcement::paginate(10);

        return view('announcements.index', compact('announcements'));
    }

    public function show($id){
        $announcement = Announcement::find($id);
//        dd(diffInHours($announcements->period/3600));
        if (Carbon::now()->diffInHours($announcement->created_at) > $announcement->period) {
            $closed = true;
        }else {
            $closed = false;
        }

        return view('announcements.show', compact('announcement','closed'));
    }

}
