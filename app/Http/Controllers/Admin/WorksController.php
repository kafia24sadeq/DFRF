<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Work;
use Auth;
use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;
use Systems\Events\SomeEvent;
use Systems\Program;
use Systems\Http\Requests\WorkFormRequest;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::paginate(30);

        return view('admin.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $works_programs = Program::get();

        foreach ($works_programs as $key => $value) {
            $programs[$value->id] = $value->name;
        }

        return view('admin.works.create',compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkFormRequest $request)
    {
        $work = new Work(array(
            'name'=> $request->name,
            'content'=> $request->content,
            'image_name'=> $request->image_name,
            'caption'=> $request->caption,
            'program_id'=>$request->program,
            'status'=> $request->status,

        ));

        $work->save();

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
        $model = Work::find($id);
        $projects = $model->projects;

        $works_programs = Program::get();

        foreach ($works_programs as $key => $value) {
            $programs[$value->id] = $value->name;
        }


        return view('admin.works.edit', compact('model','projects' ,'programs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkFormRequest $request, $id)
    {
        $work =  Work::find($id);

        $data = array(
            'name'=> $request->name,
            'content'=> $request->content,
            'image_name'=> $request->image_name,
            'caption'=> $request->caption,
            'program_id'=>$request->program,
            'status'=> $request->status,
        );


        $work->update($data);

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
        $work =  Work::find($id);
        $work->delete($id);
        return 'true' ;

    }
}
