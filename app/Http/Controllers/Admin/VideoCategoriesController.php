<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Requests\VideocategoriesFormRequest;

use Systems\Events\SomeEvent;


use Systems\Http\Controllers\Controller;
use Systems\VideoCategory;

class VideoCategoriesController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $VideoCategory = VideoCategory::all();
    return view('admin.videocategories.create' , compact('VideoCategory'));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(VideocategoriesFormRequest $request)
  {
    $VideoCategory = new VideoCategory();
    $VideoCategory->name = $request->name;
    $VideoCategory->status = $request->status;
    $VideoCategory->save();

    event(new SomeEvent(['desc'=>$request->name ]));

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
    $model = VideoCategory::find($id);
    return view('admin.videocategories.edit' , compact('model'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(VideocategoriesFormRequest $request, $id)
  {

    $videoCategory = VideoCategory::find($id);
    if ($request->action == 'delete') {
      $data = array(

        'status'=> 2,
      );
    }else{
    $data = array(
      'name'=> $request->name,
      'status'=> $request->status,
    );
    $videoCategory->update($data);
  }

    event(new SomeEvent(['desc'=>$request->name ]));

    return 'true';

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }
}
