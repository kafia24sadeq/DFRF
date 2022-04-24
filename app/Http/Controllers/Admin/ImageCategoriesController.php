<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Requests\ImagecategoriesFormRequest;

use Systems\Events\SomeEvent;


use Systems\Http\Controllers\Controller;
use Systems\ImageCategory;

class ImageCategoriesController extends Controller
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
    $ImageCategory = ImageCategory::all();
    return view('admin.imagecategories.create' , compact('ImageCategory'));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(ImagecategoriesFormRequest $request)
  {
    $ImageCategory = new ImageCategory();
    $ImageCategory->name = $request->name;
    $ImageCategory->status = $request->status;
    $ImageCategory->save();


    event(new SomeEvent(['desc'=>$request->name]));

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
    $model = ImageCategory::find($id);
    return view('admin.imagecategories.edit' , compact('model'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(ImagecategoriesFormRequest $request, $id)
  {
    $imageCategory =  ImageCategory::find($id);

    if ($request->action == 'delete') {
      $data = array(

        'status'=> 2,
      );
    }else{
      $data = array(
        'name'=> $request->name,
        'status'=> $request->status,
      );
    }
    $imageCategory->update($data);

    event(new SomeEvent(['desc'=>$request->name]));

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
