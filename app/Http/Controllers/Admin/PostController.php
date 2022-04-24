<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Systems\Http\Controllers\Controller;

use Systems\Http\Requests;
use Systems\Http\Requests\postFormRequest;

use Systems\Events\SomeEvent;
use Systems\Scopes\OrderScope;



//use Auth;

use Systems\Category;
use Systems\Post;

use Carbon\Carbon;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(20);

        foreach ($posts as $key => $value) {

        }

        return view('admin.posts.index', compact('posts'));
    }


    public function indexCategory($section)
    {

        $posts = Post::where("category_id", $section)->paginate(20);

        foreach ($posts as $key => $value) {

        }

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        $categorys = Category::all();

//        foreach ($categorys as $key => $value) {
//            $categorys_new[$value->id] = $value->name;
//        }
        return view('admin.posts.create'  )->with('categorys',$categorys->pluck('name', 'id')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(postFormRequest $request)
    {


//        $category = Category::all();
        if (is_null($request->date)){
            $date = Carbon::now()->format('Y-m-d');
        }else{
            $date = $request->date;
        }

        $post = new Post(array(
            'title'=> $request->title,
            'content'=>$request->input('content'),
            'caption'=>$request->caption,
            'source'=>$request->source,
            'importance'=>$request->importance,
            'image_name'=>$request->image_name,
            'category_id'=>$request->category_id,
            'status'=>$request->status,
            'date'=>$date,
            'comments_status'=>$request->comments_status,

            'user_id'=>Auth::user()->id,
        ));

        $post->save();
        event(new SomeEvent(['desc'=>$request->title ]));
        return 'true';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.posts.show', compact("post"));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {

        $categorys = Category::select('id','name')->get();
        $model = Post::find($id);

        return view('admin.posts.edit',['model'=>$model])->with('categorys',$categorys->pluck('name', 'id'));
    }

    /**
     * @param postFormRequest $request
     * @param $id
     * @return string
     */
    public function update(postFormRequest $request, $id)
    {
        if (is_null($request->date)){
            $date = Carbon::now()->format('Y-m-d');
        }else{
            $date = $request->date;
        }
            $post = Post::find($id)->update([
                'title'=> $request->title,
                'content'=>$request->input('content'),
                'caption'=>$request->caption,
                'source'=>$request->source,
                'importance'=>$request->importance,
                'image_name'=>$request->image_name,
                'category_id'=>$request->category_id,
                'status'=>$request->status,
                'date'=>$date,
                'comments_status'=>$request->comments_status,

                'user_id'=>Auth::user()->id,
            ]);
//            dd($post);

//        return
        event(new SomeEvent(['desc'=>$request->title ]));

        return 'true';

    }

    /**
     * @param $id
     * @return string
     * @throws \Exception
     */
    public function destroy($id)
    {
        Post::where('id',$id)->delete();
        return Redirect::to('/admin/posts');
    }
}
