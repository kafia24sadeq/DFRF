<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Systems\Http\Requests;
use Systems\Http\Requests\ProductcategoriesFormRequest;
use Systems\Events\SomeEvent;
use Systems\Http\Controllers\Controller;
use Systems\ProductCategory;

class ProductCategoriesController extends Controller
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
    $ProductCategory = ProductCategory::all();
    return view('admin.productcategories.create' , compact('ProductCategory'));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(ProductcategoriesFormRequest $request)
  {
    $ProductCategory = new ProductCategory();
    $ProductCategory->name = $request->name;
    $ProductCategory->status = $request->status;
    $ProductCategory->save();

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
    $model = ProductCategory::find($id);
    return view('admin.productcategories.edit' , compact('model'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(ProductcategoriesFormRequest $request, $id)
  {

    $productCategory = ProductCategory::find($id);
    if ($request->action == 'delete') {
      $data = array(

        'status'=> 2,
      );
    }else{
    $data = array(
      'name'=> $request->name,
      'status'=> $request->status,
    );
    $productCategory->update($data);
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
