<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Systems\Http\Controllers\Controller;

use Systems\Http\Requests;
use Systems\Http\Requests\CategoryFormRequest;

use Systems\Events\SomeEvent;


use Systems\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryFormRequest $request)
    {
        $category = new Category(
            array(
                'name'=> $request->name,
                'menushow'=> $request->menushow,
                'homeshow'=> $request->homeshow,
                'status'=> $request->status,
                'type'=> $request->section,
//                'description'=> $request->description,
//                'keyword'=> $request->keyword,
            ));

        $category->save();

        //store logs
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
        $model = Category::find($id);
        return view('admin.categories.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryFormRequest $request,$id)
    {
        if($request->action == 'restore'){
            $category =  Category::withoutGlobalScope(OrderScope::class)->find($id);
            $data = array(

                'status'=> 0,
            );
            $category->update($data);

            return 'true';
        }


        $category =  Category::find($id);

        if ($request->action == 'delete') {
            $data = array(

                'status'=> 2,
            );
        }else{

            $data = array(
                'name'=> $request->name,
                'menushow'=> $request->menushow,
                'homeshow'=> $request->homeshow,
                'status'=> $request->status,
                'type'=> $request->section,
//                'description'=> $request->description,
//                'keyword'=> $request->keyword,
            );
        }



        $category->update($data);

        //store logs
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
        $category =  Category::withoutGlobalScope(OrderScope::class)->find($id);
        $category->delete($id);
        return 'true' ;
    }
}
