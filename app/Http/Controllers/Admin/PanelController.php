<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;

use Systems\Post;
use Carbon\Carbon;


class PanelController extends Controller
{
  public function index(){

    $posts = Post::take(30)->get();
    $scheduled = Post::where("created_at", ">", Carbon::now())->get();
    $drafts = Post::where("status", 4)->get();
    return view('admin.controlpanel.index', compact('posts', 'scheduled', "drafts"));

  }
}
