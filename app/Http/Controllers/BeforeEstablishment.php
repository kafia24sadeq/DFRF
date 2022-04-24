<?php

namespace Systems\Http\Controllers;

use Illuminate\Http\Request;
use Systems\Category;
use Systems\Post;

class BeforeEstablishment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('category_id',3)->where('status',0)->paginate(8);
        $type = 'before_establishment';
        $category = Category::find(3);

        return view('posts.index',compact('posts','type','category'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('status',0)->findorFail($id);

        $more = Post::where("category_id","=",3 )->where("id","!=",$post->id )->take(4)->get();

        return view('stories.show', compact('post','more'));
    }

}
