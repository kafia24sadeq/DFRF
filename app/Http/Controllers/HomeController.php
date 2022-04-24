<?php

namespace Systems\Http\Controllers;

use GeoIP;
use Illuminate\Http\Request;
use Systems\Course;
use Systems\Mail;
use Systems\Member;
use Systems\Page;
use Systems\Post;
use Systems\Work;
use Systems\Image;
use Systems\Video;

use Systems\Company;
use Systems\Product;
use Systems\Program;
use Systems\Project;
use Systems\Category;
use Systems\Http\Requests;
use Illuminate\Support\Arr;
use Jenssegers\Agent\Agent;
//use Systems\Http\Requests\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
//        dd(12);
//
        $post = Post::where('status',0)->where('category_id', 1 , 'desc')->take(3)->get();;
        // $post = Post::where('status',0)->where('category_id', 1 , 'desc')->first();
        // $post = Post::orderBy('id', 'desc')->take(3)->get();
        // $post = Post::where('status',0)->take(3)->get();
        $story =  Image::where('image_categories_id', 21)->take(9)->get();

        $document =  Image::where('status',0)->where('image_categories_id', 5)->first();

        $videos = Video::orderBy('id','desc')->get();

        $images = Image::where('status',0)->where('image_categories_id', 4,'desc')->take(3)->get();
//        dd($images[0]);
        $project = Project::where('id',1)->first();

        $members = Member::where('status',0)->get();

//        $slides = \Systems\Image::where('image_categories_id',1)->where('status',0)->take(6)->get();
//
//        foreach ($slides as $key => $slide)
//        {
//            dd($slide->name);
//        }
//        dd($slides);

        //  dd($images);
        // $imageone =  Image::where('image_categories_id', 4)->first();

        $intro = Image::where('image_categories_id', 2)->take(4)->get();
        $products = Product::take(4)->get();
        $works = Work::take(2)->get();
        $partners = Image::where('image_categories_id', 3)->get();

        $about = Page::where('id',1)->first();
        $aboutVide = Video::where('video_categories_id',2)->take(1)->get();
        $programs = Program::where('status',0)->get();

        $companies = Company::all();

        $vision =Page::findOrFail(4);
        $message =Page::findOrFail(3);
        $statistics =Project::where('id',1)->first();
//        dd($images);
//        $programs = Course::where('status',0)->where('availability','=',2)->take(3)->get();

        //   dd($post);

        return view('home.index' , compact('post' ,'products', 'works', 'intro' ,'story', "partners"
            , 'videos' ,'about' , 'partners', 'images','companies','document','project','programs','members','vision','message','statistics'));
    }


    public function create()
    {
        return view('widgets.footer_nav_widget.blade');
    }

    public function store(Requests\MailFormRequest $request)
    {

        return ' true';
        $mail = New Mail([
            'name' => $request->name,
            'message' => $request->message,
            'email' => $request->email,
            'ip' => "",
            'code' => "",
            'status' => 1,
        ]);

        $mail->save();

        return redirect(url()->previous().'#contact')->with('status','تم إرسال رسالتك بنجاح');
    }
}
