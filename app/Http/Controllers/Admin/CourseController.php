<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\Array_;
use Systems\Course;
use Systems\Events\SomeEvent;
use Systems\Http\Controllers\Controller;
use Systems\Http\Requests\CourseFormRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::paginate(10);
        return view('admin.courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course =new Course();
        return view('admin.courses.create',compact($course));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseFormRequest $request)
    {

//        dd($request);
        $course = new Course(array(
            'name' => $request->name,
            'image_name' => $request->image_name,
            'description' => $request->description,
            'course_content' => $request->course_content,
            'course_time' => $request->course_time,
            'starting_date' => $request->starting_date,
            'trainer_name' => $request->trainer_name,
            'hours_no' => $request->hours_no,
            'availability' => $request->availability,
            'status' => $request->status,

        ));
        $course->save();

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
        $model = Course::find($id);
        return view('admin.courses.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseFormRequest $request, $id)
    {
        $cours = Course::find($id);

        $data = array(
            'name' => $request->name,
            'image_name' => $request->image_name,
            'description' => $request->description,
            'course_content' => $request->course_content,
            'course_time' => $request->course_time,
            'starting_date' => $request->starting_date,
            'trainer_name' => $request->trainer_name,
            'availability' => $request->availability,
            'status' => $request->status,

        );
//        dd($data);
        $cours->update($data);
        event(new SomeEvent(['desc'=>$request->name]));
        return 'true';





    }

    /**
     * @param $id
     * @return string
     * @throws \Exception
     */
    public function destroy($id)
    {

        Course::where('id',$id)->delete();
        return Redirect::to('/admin/courses');
    }


}
