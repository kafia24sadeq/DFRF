<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Program;
use Auth;
use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;
use Systems\Events\SomeEvent;

use Systems\Http\Requests\ProgramFormRequest;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::paginate(30);
        // dd($programs);
        return view('admin.programs.index', compact('programs'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        return view('admin.programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramFormRequest $request)
    {
        $program = new Program(array(
            'name'=> $request->name,
            'content'=> $request->input('content'),
            'areas'=> 0,
            'budget'=> 0,
            'total_beneficiaries'=>0,
            'image_name'=>$request->image_name,
            'caption'=> $request->caption,
            'status'=> $request->status,

        ));


        $program->save();

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
        $model = Program::find($id);
        $projects = $model->projects;
        return view('admin.programs.edit', compact('model','projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramFormRequest $request, $id)
    {
        $program =  Program::find($id);

        $data = array(
            'name'=> $request->name,
            'content'=> $request->input('content'),
            'areas'=> $request->areas,
            'budget'=> $request->budget,
            'total_beneficiaries'=>$request->total_beneficiaries,
            'image_name'=>$request->image_name,
            'caption'=> $request->caption,
            'status'=> $request->status,
        );

//        dd($program);
        $program->update($data);

        //store logs
        event(new SomeEvent(['desc'=>$request->title]));

        return 'true';
    }

    /**
     * @param $id
     * @return string
     * @throws \Exception
     */
    public function destroy($id)
    {
        $program =  Program::find($id);
        $program->delete($id);
        return 'true' ;

    }
}
