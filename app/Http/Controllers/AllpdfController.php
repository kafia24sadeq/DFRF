<?php

namespace Systems\Http\Controllers;
use Systems\Image;

class AllpdfController extends Controller
{
    public function index(){
        $pdfs = Image::where("image_categories_id", "2")->paginate(10);
            return view("allpdf.index" , compact("pdfs"));
    }
}
