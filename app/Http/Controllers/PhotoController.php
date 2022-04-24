<?php

namespace Systems\Http\Controllers;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Image;


class PhotoController extends Controller
{
    public function index(){
        $photos = Image::where('status',0)->where('image_categories_id',4)->paginate(10);
        return view('photos.index', compact('photos'));
    }


    public function indexcat($id){
        $photos = Image::where('image_categories_id', $id)->paginate(10);
        return view('photos.index', compact('photos'));
    }


    public function show($id){

        $image = Image::find($id);
        $document = Image::where('status',0)->where('image_categories_id',5)->take(3)->get();
        // $videos = Image::where('image_categories_id', $video->imagecategory)->where("id", "!=", $video->id)->take(10)->get();
        return view('photos.show', compact('image','document'));
    }
}
