<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;
use Systems\Scopes\OrderScope;
use Illuminate\Support\Facades\Route;

use Systems\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::paginate(16);
      return view('admin.images.index' , compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.images.create' );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
      return view('admin.images.edit' , compact('model'));

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
//        dd($request->all());

      if($request->action == 'restore'){
        $image = Image::withoutGlobalScope(OrderScope::class)->find($id);
        $data = array(
          'status'=> 0,
//          'title'=> $request->image_tags,
        );
        //
        $d =  $image->update($data);
        //
        // return 'true';
      }
    }

    /**
     * @param $id
     * @return string
     * @throws \Exception
     */
    public function destroy($id)
    {
      $image =  Image::withoutGlobalScope(OrderScope::class)->find($id);
      $image->delete($id);
      return 'true' ;
    }

    public function updateImage(Request $request, $id)
    {
        dd($request->all());
    }
}
