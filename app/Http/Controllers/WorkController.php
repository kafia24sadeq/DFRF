<?php

namespace Systems\Http\Controllers;

use Illuminate\Http\Request;

use Systems\Http\Requests;

use Systems\Work;

class WorkController extends Controller
{
    public function index(){
        $works = Work::paginate(10);
        return view('works.index', compact('works'));
    }

    public function show($id){
        $work = Work::findOrFail($id);

        $more = Work::where("status",0 )->where("id","!=",$id )->take(4)->get();

        return view('works.show', compact('work','more'));
    }

}
