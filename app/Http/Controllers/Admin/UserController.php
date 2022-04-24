<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Requests\UserFormRequest;
use Systems\Http\Requests\UserEditFormRqeuest;

use Systems\Http\Controllers\Controller;

use Systems\Events\SomeEvent;


use Systems\User;
use Systems\Post;
use Systems\Role;
use Illuminate\Support\Facades\Hash;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
//        dd($users);
        return view('admin.users.index', compact('users'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $selectedRoles = '';
        return view('admin.users.create')->with(['roles'=> $roles->pluck('display_name', 'id'),'selectedRoles'=> '']);;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {

        $user = new User(array(
            'name'=> $request->name,
            'password'=> Hash::make($request->password),
            'remember_token' => str_random(60),
            'email'=>$request->email,
            'status'=>0

        ));

        $user->save();

        $user->attachRole($request->role);

        event(new SomeEvent(['desc'=>$request->name ]));

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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = User::find($id);
        $roles = Role::all();
        $selectedRoles = $model->roles->pluck('id')->toArray();
        return view('admin.users.edit')->with(['roles'=>$roles->pluck('display_name', 'id'), 'model'=>$model,'selectedRoles'=> $selectedRoles ] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditFormRqeuest $request, $id)
    {

        if($request->action == 'restore'){
            $user =  User::withoutGlobalScope(OrderScope::class)->find($id);
            $data = array(

                'status'=> 0,
            );
            $user->update($data);

            return 'true';
        }



        $user =  User::find($id);
        if ($request->action == 'delete') {
            $data = [
                'status'=> 2,
            ];
        }else{

                $data =[
                    'name'=> $request->name,
                    'email'=>$request->email,
                ];

            $user->update($data);
            $user->detachRoles(Role::all());
            $user->attachRole($request->role);
        }

        $user->update($data);
        event(new SomeEvent(['desc'=>$request->name ]));
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
        $user = User::withoutGlobalScope(OrderScope::class)->find($id);
        $user->delete($id);
        return 'true' ;
    }
}
