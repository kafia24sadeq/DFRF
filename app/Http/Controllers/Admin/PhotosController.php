<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Systems\Events\SomeEvent;
use Systems\Http\Controllers\Controller;
use Systems\Http\Requests\PhotosRequest;
use Systems\Image;
use Systems\ImageCategory;

class PhotosController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        $photos = Image::paginate(20);

        return view('admin.photo.index', compact('photos'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = ImageCategory::all();

        return view('admin.photo.create')->with('categories',$categories->pluck('name', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());

        $photo = new Image(array(
            'name'=> $request->name,
            'content'=> $request->input('content'),
            'caption'=> $request->caption,
            'status'=> $request->status,
            'link'=> $request->link,
            'image_categories_id'=> $request->section,

        ));


        $photo->save();

        event(new SomeEvent(['desc'=>$request->title]));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Image::find($id);
        $categories = ImageCategory::select('id','name')->get();
        return view('admin.photo.edit', compact('model'))->with('categories',$categories->pluck('name', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image =  Image::find($id);


        $data = array(
            'name'=> $request->name,
            'content'=> $request->input('content'),
            'caption'=> $request->caption,
            'link'=> $request->link,
            'status'=> $request->status,
            'image_categories_id'=> $request->section,
        );

        $image->update($data);

        //store logs
        event(new SomeEvent(['desc'=>$request->title]));

        return 'true';
    }

    /**
     * @param $id
     * @return string
     * @throws \Exception
     */
    public function destroy($id)
    {
        Image::find($id)->delete();

        return redirect()->back() ;
    }
}
