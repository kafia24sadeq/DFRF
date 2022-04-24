<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Exporter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use SebastianBergmann\Exporter\Exporter as Exporter;
//use SebastianBergmann\Exporter\Exporter;
use Systems\CustomClass\ApplicantSerializer;
use Systems\Group;
use Systems\Http\Controllers\Controller;
use Systems\Http\Requests\GroupsFormRequest;

class GroupsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $groups = Group::paginate(10);
        return view('admin.groups.index',compact('groups'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.groups.create');
    }

    /**
     * @param Request $request
     * @return string
     */
    public function store(GroupsFormRequest $request)
    {
        $group = new Group(array(
           'name'=>$request->name ,
           'status'=>$request->status
        ));

        $group->save();

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
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $model = Group::find($id);
        return view('admin.groups.edit',compact('model'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return string
     */
    public function update(GroupsFormRequest $request, $id)
    {
        $group = Group::find($id);
       $group->name = $request->name;
       $group->status = $request->status;

       $group->save();

        return 'true';
    }

    /**
     * @param Group $group
     * @return string
     * @throws \Exception
     */
    public function destroy($id)
    {
        Group::where('id',$id)->delete();
        return Redirect::back();
    }

    public function export($id)
    {

        $group = Group::where('id',$id)->select('name')->get()->toArray();
        foreach ($group as $gr)
        {
            $group_name = $gr['name'];
        }

        $applicants = DB::table('applicants')->select('first_name','second_name','third_name','last_name',
            'qualification','birth_date','card_no','card_source','mobile','home','computer','english',
            'work','sex','course_id','group_id')->where('group_id',$id)->get()->toArray();

        $app = collect($applicants);
        $fileName = $group_name.'.'.'xlsx';

        return $collection = Exporter::make('Excel')->load($app)->setSerialiser(new ApplicantSerializer)->stream($fileName);

    }
}
