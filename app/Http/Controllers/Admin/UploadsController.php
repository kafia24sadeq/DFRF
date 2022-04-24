<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;
use Systems\Uploads;

class UploadsController extends Controller
{

    public function index()
    {
        $uploads = Uploads::paginate(20);
        return view("admin.pdfupload.index" , compact("uploads" , $uploads));
    }
    public function create()
    {
        return view("admin.pdfupload.create");
    }




}
