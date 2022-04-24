<?php

namespace Systems\Http\Controllers;

use Illuminate\Http\Request;

use Systems\Http\Requests;

use Systems\Job;
use Carbon\Carbon;

use Illuminate\Support\Facades\Input;

class JobsController extends Controller
{
    public function index(){

        $jobs = Job::paginate(10);
        return view('jobs.index', compact('jobs'));
    }

    public function show($id){
        $job = Job::find($id);

        if (Carbon::now()->diffInHours($job->created_at) > $job->deadline) {
            $closed = true;
        }else {
            $closed = false;
        }

        return view('jobs.show', compact('job','closed'));
    }

}
