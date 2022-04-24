<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;

use Systems\Events\SomeEvent;

use Auth;

use Systems\User;
use Systems\Task;

use Systems\Http\Requests\TaskFormRequest;


class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::paginate(20);
        return view('admin.tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users = User::all();
        return view('admin.tasks.create')->with('users' , $users->pluck('name', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskFormRequest $request)
    {
        $data =

        $task = new Task([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'state'=>1,
            'priority'=>$request->priority,
            'user'=> $request->user,
            'fromuser'=> Auth::user()->id,
            'deadline'=>strtotime($request->date),
        ]);
        $task->save();

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
        $users_new = User::all();
        foreach ($users_new as $key => $value) {
            $users[$value->id] = $value->name;
        }


        $model = Task::find($id);
        return view('admin.tasks.edit', compact('users' , 'model'));

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
            $task =  Task::withoutGlobalScope(OrderScope::class)->find($id);
            $data = array(

                'status'=> 0,
            );
            $task->update($data);

            return 'true';
        }

        $task = Task::find($id);

        if ($request->action == 'delete') {
            $state = array(
                'status'=> 2,
            );
        }else{
            $state =   [
                'state'=>$request,
            ];

        }

        $task->update($state);

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
        $task =  Task::withoutGlobalScope(OrderScope::class)->find($id);
        $task->delete($id);
        return 'true' ;
    }
}
