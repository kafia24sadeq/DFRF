<?php
namespace Systems\Http\Controllers;

use Illuminate\Http\Request;

use Systems\Http\Requests;

use Systems\Page;
use Systems\Image;

class PagesController extends Controller
{
    public function show($id){
        $page = Page::findOrFail($id);
        $goal = Page::findOrFail(2);
        $message =Page::findOrFail(3);
        $vision =Page::findOrFail(4);
        $value =Page::findOrFail(5);
        $ourgeneralgals =Page::findOrFail(13);
        $ourspecialgoals =Page::findOrFail(14);
        // dd($ourgeneralgals);


        return view('pages.show', compact('page' ,'goal','message','vision','value','ourgeneralgals','ourspecialgoals'));
    }

    public function index()
    {
        $about = Page::where('id',1)->get();
        $about = Page::where('id',1)->get();
        $about = Page::where('id',1)->get();
        $about = Page::where('id',1)->get();
        $about = Page::where('id',1)->get();
    }

}
