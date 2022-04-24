<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;



use Systems\UserLog;



class LogController extends Controller
{
  public function index(){
    $logs = UserLog::OrderBy('id','desc')->paginate(20);


    return view('admin.userlogs.index', compact('logs'));


  }



}
