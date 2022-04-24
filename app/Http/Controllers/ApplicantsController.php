<?php

namespace Systems\Http\Controllers;

use Bkwld\Croppa\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Systems\Applicant;
use Systems\Course;
use Systems\Group;
use Systems\Http\Requests\ApplicationFormRequest;

class ApplicantsController extends Controller
{


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $course = Course::where('status',0)->where('availability',1)->get();

        return view('applicants.create',compact('course'));
    }

    /**
     * @param ApplicationFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ApplicationFormRequest $request)
    {

        if (is_null($request->card_image)|| is_null(($request->cert_image)))
            {
                return Redirect::back()->with('success','مطلوب رفع صورتين');
            }

        $cardImage = $request->file('card_image');

        $card_new_name = time() . $cardImage->getClientOriginalName();
//        dd($card_new_name);
        $cardImage->move(public_path('/photos'), $card_new_name);

        $certImage = $request->file('cert_image');
        $cert_new_name = time() . $certImage->getClientOriginalName();
        $certImage->move(public_path('/photos'), $cert_new_name);

        $groups = Group::take(1)->orderBy('id','disc')->select('id')->get()->toArray();
//        $requiredGroup = [];
        foreach($groups as $group)
        {
            $requiredGroup = $group['id'];
        }


        $application = new Applicant(array(
            'first_name' =>$request->first_name,
            'second_name'=>$request->second_name,
           'third_name'=>$request->third_name,
            'last_name' =>$request->last_name,
            'qualification' => $request->qualification,
            'birth_date' => $request->birth_date,
            'card_no'=>$request->card_no,
            'card_source'=>$request->card_source,
            'mobile'=>$request->mobile,
            'home'=>$request->home,
            'sex'=>$request->sex,
            'computer'=>$request->computer,
            'english'=>$request->english,
            'work'=>$request->work,
            'card_image'=>$card_new_name,
            'cert_image'=>$cert_new_name,
            'course_id'=>$request->course,
            'group_id'=>$requiredGroup
        ));
//        dd($application);
        $application->save();
        return redirect()->back()->with('success','لقد تم إرسال طلبك بنجاح!');

    }

}
