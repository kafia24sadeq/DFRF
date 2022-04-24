<?php
namespace Systems\Http\Controllers;

use Illuminate\Http\Request;

use Systems\Http\Requests;

use Systems\Post;
use Systems\Category;
use Systems\Announcement;

use App;

use Response;

class RssController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('rss.index', compact( 'categories'));
    }


    public function main(){
        $posts = Post::take(10)->get();
        $cat = "";
        return Response::view('rss.main' , compact("posts", 'cat'))->header('Content-Type', "application/xml");
    }

    public function sections($id){
        $posts = Post::where("category_id",$id )->take(10)->get();
        $cat = " | ".$posts[0]->categories->name;
        return Response::view('rss.main' , compact("posts", 'cat'))->header('Content-Type', "application/xml");
    }


    public function breaking(){
        $posts = Announcement::take(10)->get();
        $cat = " | ".trans("public.breaking");
        return Response::view('rss.breaking' , compact("posts", 'cat'))->header('Content-Type', "application/xml");
    }
}