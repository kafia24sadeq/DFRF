<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;
use Systems\Http\Requests\pageFormRequest;

use Systems\Scopes\OrderScope;


use Systems\Events\SomeEvent;


use Systems\Page;



class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Page::all();



      return view('admin.pages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.pages.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(pageFormRequest $request)
    {
      $page = new Page(array(
        'title'=> $request->title,
        'content'=> $request->content,
        'status'=> $request->status,
      ));

      $page->save();

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
      $model = Page::find($id);
      return view('admin.pages.edit', compact('model' ));
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
        $page =  Page::withoutGlobalScope(OrderScope::class)->find($id);
        $data = array(
          'status'=> 0,
        );
        $page->update($data);

        return 'true';
      }

      $page =  Page::find($id);
      if ($request->action == 'delete') {
        $data = array(

          'status'=> 2,
        );
      }else{
      $data = array(
        'title'=> $request->title,
        'content'=> $request->content,
        'status'=> $request->status,
      );
    }
      $page->update($data);

      event(new SomeEvent(['desc'=>$request->title]));

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
      $page =  Page::withoutGlobalScope(OrderScope::class)->find($id);
      $page->delete($id);
      return 'true' ;
    }
}
