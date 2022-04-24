<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;
use Auth;

use Systems\Events\SomeEvent;
use Systems\Scopes\OrderScope;
use Systems\ProductCategory;
use Systems\Product;
use Systems\Company;

use Systems\Http\Requests\ProductFormRequest;


class ProductController extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::paginate(10);

        return view('admin.products.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ProductCompany = Company::all();
        $ProductCategory = ProductCategory::all();
        return view('admin.products.create')->
        with('ProductCompany',$ProductCompany->pluck('title', 'id'))->with('ProductCategory',$ProductCategory->pluck('name', 'id'));
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
      $product = new Product(array(
        'name'=> $request->name,
        'price'=> $request->price,
        'other_images'=> $request->other_images,
        'content'=> $request->content,
        'warranty'=>$request->warranty,
        'image_name'=>$request->image_name,
        'caption'=> $request->caption,
        'discount'=> $request->discount,
        'status'=>$request->status,
        'product_categories_id'=>$request->product_categories_id,
        'company_id'=>$request->company_id,
          'user_id'=>Auth::user()->id,
      ));

      $product->save();

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
      $ProductCompany = Company::all();
      $model = Product::find($id);
      $ProductCategory = ProductCategory::select(array('id', 'name'))->get();
      return view('admin.products.edit')->with(
      ['model'=>$model,'ProductCategory'=>$ProductCategory->pluck('name', 'id')]
        )->with('ProductCompany',$ProductCompany->pluck('title', 'id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {

      if($request->action == 'restore'){
        $product =  Product::withoutGlobalScope(OrderScope::class)->find($id);
        $data = array(
          'status'=> 0,
        );
        $product->update($data);

        return 'true';
      }

      $product =  Product::find($id);

      if ($request->action == 'delete') {
        $data = array(

          'status'=> 2,
        );
      }else{
        $data = array(
            'name'=> $request->name,
            'price'=> $request->price,
            'other_images'=> $request->other_images,
            'content'=> $request->content,
            'warranty'=>$request->warranty,
            'image_name'=>$request->image_name,
            'caption'=> $request->caption,
            'discount'=> $request->discount,
            'status'=>$request->status,
            'product_categories_id'=>$request->product_categories_id,
        );
      }

      $product->update($data);


      event(new SomeEvent(['desc'=>$request->title ]));
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
      $product =  Product::withoutGlobalScope(OrderScope::class)->find($id);
      $product->delete($id);
      return 'true' ;
    }
}
