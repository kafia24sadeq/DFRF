<?php

namespace Systems\Http\Controllers;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Video;


class VideoController extends Controller
{
  public function index(){

    $videos = Video::paginate(9);
    return view('videos.index', compact('videos'));
  }


  public function indexCat($id){

    $videos = Video::where("section","=", $id)->paginate(10);
    return view('videos.index', compact('videos'));
  }


  public function show($id){

    $video = Video::find($id);
    return view('videos.show', compact('video'));
  }
}
