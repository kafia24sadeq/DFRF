<?php

namespace Systems\Http\Controllers;

use Illuminate\Http\Request;
use Systems\Course;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::where('status',0)->paginate(9);
        return view('courses.index',compact('courses'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $course = Course::find($id);
        $lastCourses = Course::where('status',1)->where("id","!=",$course->id)->take(4)->get();

//        $more = Post::where("category_id","=",$post->category_id )->where("id","!=",$post->id )->take(4)->get();
//        dd($more);



        return view('courses.show',compact('course','lastCourses'));
    }

    public function course($id){
//        $course = Course::find($id);
        $courses = Course::where("availability","=", $id)->where('status',0)->paginate(10);
        return view('courses.index', compact( 'courses'));

    }


}
