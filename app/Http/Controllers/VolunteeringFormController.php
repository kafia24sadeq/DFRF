<?php

namespace Systems\Http\Controllers;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Requests\VolunteerFormRequest;

//use Systems\Mail;
use Mail;

use GeoIP;

class VolunteeringFormController extends Controller
{

    public function index(){
        return view('mail.volunteeringForm');
    }

    public function show($id){

    }


    public function store(VolunteerFormRequest $request){

        $marital_status = $request->marital_status;
        if($marital_status == '1'){
            $marital_status_ans = "متزوج";
        }
        elseif($marital_status == '2'){
            $marital_status_ans = "عازب";
        }
        else{
            $marital_status_ans = $request->marital_status_other;
        }

        $educational_qualification = $request->educational_qualification;
        if($educational_qualification == '1'){
            $educational_qualification_ans = "ثانوية عامة";
        }
        elseif($educational_qualification == '2'){
            $educational_qualification_ans = "دبلوم";
        }
        elseif($educational_qualification == '3'){
            $educational_qualification_ans = "بكالوريوس";
        }
        else{
            $educational_qualification_ans = $request->educational_qualification_other;
        }

        $have_volunteered = $request->have_volunteered;
        if($have_volunteered == '1'){
            $have_volunteered_ans = "نعم";
        }
        else{
            $have_volunteered_ans = "لا";
        }


        $categories_like_to_work = $request->categories_like_to_work;
        if($categories_like_to_work == '1'){
            $categories_like_to_work_ans = "الاطفال";
        }
        elseif($categories_like_to_work == '2'){
            $categories_like_to_work_ans = "الشباب";
        }
        else{
            $categories_like_to_work_ans = $request->categories_like_to_work_other;
        }

        $days_appropriate_for_you_ans_checkbox = "";
        foreach ($request->days_appropriate_for_you as $key => $value) {
            $days_appropriate_for_you_ans_checkbox .= $value." , " ;
        }
        $days_appropriate_for_you_ans = $days_appropriate_for_you_ans_checkbox ."".$request->days_appropriate_for_you_other;



        $text = "الاسم: ".$request->name ." \n " ;
        $text .= "تأريخ الميلاد: ".$request->birthday ." \n " ;
        $text .= "الحالة الاجتماعية: ".$marital_status_ans ." \n " ;
        $text .= "عنوان السكن: ".$request->address ." \n " ;
        $text .= "رقم الهاتف 1: ".$request->phoneNo1 ." \n " ;
        $text .= "رقم الهاتف 2: ".$request->phoneNo2 ." \n " ;
        $text .= "البريد الإلكتروني: ".$request->email ." \n " ;
        $text .= "المؤهل الدراسي: ".$educational_qualification_ans ." \n " ;
        $text .= "التخصص: ".$request->specialization ." \n " ;
        $text .= "هل لديك رصيد سابق في العمل الطوعي؟: ".$have_volunteered_ans ." \n " ;
        $text .= "أبرز 3 أعمال شاركت فيها و اسم الجهة التي عملت معها: ".$request->participation_and_work_entities ." \n " ;
        $text .= "أذكر ابرز مهاراتك: ".$request->skills ." \n " ;
        $text .= "اذكر ابرز هواياتك: ".$request->hobbies ." \n " ;
        $text .= "ماهو المجال الذي تحب التطوع فيه: ".$request->field_like_to_volunteer ." \n " ;
        $text .= "ماهي الفئات التي تحب العمل معها؟: ".$categories_like_to_work_ans ." \n " ;
        $text .= "ماهي الايام الملائمة لك: ".$days_appropriate_for_you_ans ." \n " ;
        $text .= "لماذا تريد التطوع؟: ".$request->why_to_volunteer ." \n " ;

        $this->replayEmail = $request->email;

        $this->data = $request ;
        $this->mail = "media@nahdamakers.org";

        Mail::raw($text ,   function ($message) {
            $message->from('support@garidasys.com', 'موقع صناع النهضة');
            $message->to($this->mail , $this->data->name )->subject( "استمارة تطوع")->replyTo($this->replayEmail);;
        });

        return 'true';
    }
}
