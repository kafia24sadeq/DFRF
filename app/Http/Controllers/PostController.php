<?php

namespace Systems\Http\Controllers;

use Systems\Post;

use Systems\Image;

use Systems\Category;
use Systems\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function show($id){
        $post = Post::find($id);
        PostCount($post->id);
        $more = Post::where("category_id","=",$post->category_id )->where("id","!=",$post->id )->take(4)->get();
        $more = Post::where('status',0)->take(3)->get();
        return view('posts.show', compact('post' , 'more' ));
    }

    public function showStory(){


        $posts = Post::where('category_id', 2)->paginate(8);
        return view('posts.show', compact('posts'  ));

    }


    public function printPage($id){
        $post = Post::find($id);
        return view('posts.print', compact('post'  ));
    }

    // todo
    public function index(){

        $type = 'news';
        $category = Category::find(1);

        $posts = Post::where('category_id',1)->paginate(10);



//        $category = Category::find($posts-.هي);
        // dd($posts);
        return view('posts.index', compact( 'posts','type','category'));
    }

//    public function index(){
//        $posts = Post::paginate(10);
//        return view('posts.index', compact( 'posts'));
//    }


    // todo
    public function search(Request $request){

        $keywords = $request->input('search');
        // return  $keywords;
        $postCount = Post::where("title", "LIKE", "%$keywords%")->orWhere("content", "LIKE", "%$keywords%")->count();
        // return   $postCount ;
        $posts = Post::where("title", "LIKE", "%$keywords%")->orWhere("content", "LIKE", "%$keywords%")->paginate(12);
       
        return view('posts.index', compact( 'posts','keywords' ,'postCount'));
        //  return "welcome";
    }


    // todo
    public function indexCat($id){
        $category = Category::find($id);
        $posts = Post::where("category_id","=", $id)->paginate(10);
        return view('posts.index', compact( 'posts','category'));

    }


    
}
