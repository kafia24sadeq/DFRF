<?php

namespace Systems\Http\Controllers;

use Illuminate\Http\Request;

use Systems\Http\Requests;

use Systems\Tender;
use Carbon\Carbon;

use Illuminate\Support\Facades\Input;

class TendersController extends Controller
{
    public function index(){

        $tenders = Tender::paginate(10);
        return view('tenders.index', compact('tenders'));
    }

    public function show($id){
        $tender = Tender::find($id);

        if (Carbon::now()->diffInHours($tender->created_at) > $tender->deadline) {
            $closed = true;
        }else {
            $closed = false;
        }

        return view('tenders.show', compact('tender','closed'));
    }

}
