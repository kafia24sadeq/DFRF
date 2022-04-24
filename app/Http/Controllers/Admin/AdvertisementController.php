<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;

use Systems\Advertisement;
use Systems\Events\SomeEvent;


class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Advertisement::all();
        return view('admin.advertisements.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.advertisements.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $advertisment = new Advertisement(array(
            'area'=> $request->area,
            'side'=> "public",
            'content'=> $request->content,
            'status'=> $request->status,
        ));

        $advertisment->save();

        event(new SomeEvent(['desc'=>$request->area]));

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
        $model = Advertisement::find($id);
        return view('admin.advertisements.edit', compact('model' ));
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

        if($request->action == 'restore'){
            $advertisment =  Advertisement::withoutGlobalScope(OrderScope::class)->find($id);
            $data = array(
                'status'=> 0,
            );
            $advertisment->update($data);

            return 'true';
        }

        $advertisment =  Advertisement::find($id);
        if ($request->action == 'delete') {
            $data = array(

                'status'=> 2,
            );
        }else{
            $data = array(
                'title'=> $request->area,
                'content'=> $request->content,
                'status'=> $request->status,
            );
        }
        $advertisment->update($data);

//        event(new SomeEvent(['desc'=>$request->area]));

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
