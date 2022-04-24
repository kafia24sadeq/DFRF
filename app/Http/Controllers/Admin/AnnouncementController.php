<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Announcement;
use Auth;
use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;
use Systems\Events\SomeEvent;

use Systems\Http\Requests\AnnouncementFormRequest;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::paginate(30);

        return view('admin.announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnouncementFormRequest $request)
    {
        $announcement = new Announcement(array(
            'title'=> $request->title,
            'imagecategory' => 19,
            'link'=> $request->link,
            'image_name'=> $request->image_name,
            'period'=> $request->period,
//            'type'=> $request->type,
            'status'=> $request->status,
            'user_id'=>Auth::user()->id,

        ));

        $announcement->save();

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
        $model = Announcement::find($id);
        return view('admin.announcements.edit', compact('model'));
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
        $announcement =  Announcement::find($id);

        $data = array(
            'title' => $request->title,
            'link' => $request->link,
            'imagecategory' => 19,
            'image_name' => $request->image_name,
            'period' => $request->period,
//            'type'=> $request->type,
            'status' => $request->status,
        );


        $announcement->update($data);

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
        $announcement =  Announcement::find($id);
        $announcement->delete($id);
        return 'true' ;

    }
}
