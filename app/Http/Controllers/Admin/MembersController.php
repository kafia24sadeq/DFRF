<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Systems\Events\SomeEvent;
use Systems\Http\Controllers\Controller;
use Systems\Member;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::paginate(10);

        return view('admin.members.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = new Member();

        return view('admin.members.create',compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new Member(array(
            'name'=> $request->name,
            'description'=> $request->input('content'),
            'image_name'=>$request->image_name,
            'status'=> $request->status,

        ));

        $member->save();
        event(new SomeEvent(['desc'=>$request->name]));


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
        $model = Member::find($id);

        return view('admin.members.edit',compact('model'));
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
        $member =  Member::find($id);

        $data = array(
            'name'=> $request->name,
            'description'=> $request->input('content'),
            'image_name'=>$request->image_name,
            'status'=> $request->status,
        );


        $member->update($data);

        event(new SomeEvent(['desc'=>$request->name]));
        //store logs


        return 'true';
    }

    /***
     * @param $id
     * @throws \Exception
     */
    public function destroy($id)
    {
        Member::find($id)->delete();
        return back()->with('success','deleted successfully');
    }
}
