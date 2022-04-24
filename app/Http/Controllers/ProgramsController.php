<?php
namespace Systems\Http\Controllers;

use Illuminate\Support\Str;
use Systems\Course;
use Systems\Work;

use Systems\Image;

use Systems\Program;
use Systems\Http\Requests;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index(){

        $programs = Program::where('status',0)->paginate(6);


        return view('programs.index', compact('programs' ));

    }

    public function show($id){

        $program = Program::findOrFail($id);
//
        $works = Work::where("program_id", $program->id )->paginate(9);
//        dd($works);
//        $lastPrograms = Program::where('status',0)->where("id","!=",$program->id)->take(4)->get();
        // dd($works);
        return view('programs.show', compact('program' , 'works'));
    }

}
