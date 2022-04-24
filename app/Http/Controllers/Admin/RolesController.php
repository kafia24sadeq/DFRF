<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;

use Systems\Role;
use Systems\Permission;

use Systems\Events\SomeEvent;


use Systems\Http\Requests\RoleFormRequest;

class RolesController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $roles = Role::all();
    return view('admin.roles.index', compact('roles'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {

    $permissions = Permission::orderBy('name', 'asc')->get();

    $selectedPermissions = array();
    return view('admin.roles.create', compact('permissions', 'selectedPermissions'));

  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(RoleFormRequest $request)
  {
    $role = new Role(array(
      'name' => $request->get('name'),
      'display_name' => $request->get('display_name'),
      'description' => $request->get('description')
    ));


    $role->save();
    $role->attachPermissions($request->permissions);

    event(new SomeEvent(['desc'=>$request->get('name') ]));

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
    $model =  Role::find($id);
    $permissions = Permission::orderBy('name', 'asc')->get();

    $selectedPermissions = $model->perms->pluck('id')->toArray();
    // dd($selectedPermissions);

    return view('admin.roles.edit', compact('model', 'permissions', 'selectedPermissions'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(RoleFormRequest $request, $id)
  {
    $role =  Role::find($id);
    if ($request->action == 'delete') {
      $data = array(

        'status'=> 2,
      );
    }else{
    $data = array(
      'name'=> $request->name,
      'display_name'=> $request->display_name,
      'description'=> $request->description,


    );
    $role->update($data);
    $role->detachPermissions(Permission::all());
    $role->attachPermissions($request->permissions);
  }

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
    //
  }
}
