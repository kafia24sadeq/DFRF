<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Support\Facades\Redirect;
use Systems\CustomClass\ApplicantSerializer;
use Illuminate\Support\Facades\DB;
use Exporter;
use Illuminate\Http\Request;

use Systems\Applicant;
use Illuminate\Database\Eloquent\Collection;
use Systems\Group;
use Systems\Http\Controllers\Controller;

class ApplicantsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $applicants = Applicant::orderBy('id','DESC')->paginate(15);
        return view('admin.applicants.index' ,compact('applicants') );
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $app = Applicant::findorfail($id);

        return view('admin.applicants.show',compact('app'));
    }

//    public function export($id)
//    {
//
//
//
//        $applicants = DB::table('applicants')->select('first_name','second_name','third_name','last_name',
//            'qualification','birth_date','card_no','card_source','mobile','home','computer','english',
//            'work','sex','course_id')->get()->toArray();
//            $app = collect($applicants);
////            dd($app);
//        $fileName = 'applicants.xlsx';
////        $excel = Exporter::make('Excel');
////        $excel->load($app);
////        return $excel->stream($fileName);
//
//        return $collection = Exporter::make('Excel')->load($app)->setSerialiser(new ApplicantSerializer)->stream($fileName);
//    }

    public function destroy($id)
    {
        Applicant::where('id',$id)->delete();
        return Redirect::to('/admin/applicants');
    }

    }

