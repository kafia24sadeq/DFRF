<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Tender;
use Auth;
use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;
use Systems\Events\SomeEvent;

use Systems\Http\Requests\AnnouncementFormRequest;

class TendersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenders = Tender::paginate(30);

        return view('admin.tenders.index', compact('tenders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.tenders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tender = new Tender(array(
            'title'=> $request->title,
            'deadline'=> $request->deadline,
            'location'=> $request->location,
            'image_name'=> $request->image_name,
            'content'=> $request->content,
            'status'=> $request->status,
            'user_id'=>Auth::user()->id,

        ));

        $tender->save();

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
        $model = Tender::find($id);
        return view('admin.tenders.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnnouncementFormRequest $request, $id)
    {
        $tender =  Tender::find($id);

        $data = array(
            'title'=> $request->title,
            'deadline'=> $request->deadline,
            'location'=> $request->location,
            'image_name'=> $request->image_name,
            'content'=> $request->content,
            'status'=> $request->status,
            'user_id'=>Auth::user()->id,
        );


        $tender->update($data);

        //store logs
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
        $tender =  Tender::find($id);
        $tender->delete($id);
        return 'true' ;

    }
}
