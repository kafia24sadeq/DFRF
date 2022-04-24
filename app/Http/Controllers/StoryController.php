<?php

namespace Systems\Http\Controllers;

use Illuminate\Http\Request;
use Systems\Post;

class StoryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $stories = Post::where('status',0)->where('category_id',2)->paginate(6);

        return view('stories.index', compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('status',0)->findorFail($id);

        $more = Post::where("category_id","=",2 )->where("id","!=",$post->id )->take(4)->get();

        return view('stories.show', compact('post','more'));
    }


}
