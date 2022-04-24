<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Job;
use Auth;
use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;
use Systems\Events\SomeEvent;

use Systems\Http\Requests\AnnouncementFormRequest;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::paginate(30);

        return view('admin.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnouncementFormRequest $request)
    {
        $job = new Job(array(
            'title'=> $request->title,
            'deadline'=> $request->deadline,
            'location'=> $request->location,
            'duration'=> $request->duration,
            'image_name'=> $request->image_name,
            'content'=> $request->content,
            'status'=> $request->status,
            'user_id'=>Auth::user()->id,

        ));

        $job->save();

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
        $model = Job::find($id);
        return view('admin.jobs.edit', compact('model'));
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
        $job =  Job::find($id);

        $data = array(
            'title'=> $request->title,
            'deadline'=> $request->deadline,
            'location'=> $request->location,
            'duration'=> $request->duration,
            'image_name'=> $request->image_name,
            'content'=> $request->content,
            'status' => $request->status,
        );


        $job->update($data);

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
        $job =  Job::find($id);
        $job->delete($id);
        return 'true' ;

    }
}
