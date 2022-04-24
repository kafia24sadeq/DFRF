@extends('layouts.master')
@section('pageheading', trans("public.volunteeringForm"))

{!! MetaTags( trans("public.volunteeringForm"), "",ThemeHelper()."img/logo.png" , "" , settings("websiteName") ) !!}

<style type="text/css">

    .verticl_center {
        position: absolute;
        top: 50%;
        left: 70%;
        transform: translate(-50%,-50%);
    }
    #myform div.form-group {
        margin-bottom: 30px;
    }
    #myform button{
        background-color:#6e1a25 ;
    }
    .form_title {
        color:#6e1a25 ;
        margin: 1em;
        text-align: center;
    }
    label.btn span {
        font-size: 1.2em ;
    }
    . {
        border-bottom: 1px solid #d8d8d8;
        padding-bottom: 10px;
    }
    .question {
        font-size: 1.3em;
        font-weight: 500;
    }
    .question .optional{
        font-size: 0.9em;
        font-weight: 400;
        color: #9e9e9e;
    }
    .survey-btn {
        width: auto !important;
        float: none !important;
        margin: 0 !important;
    }
    .survey-btn:hover {
        padding: 6px 12px !important;
        font-size: 1.1em !important;
        font-weight: normal !important;
        line-height: 1.8em !important;
    }

    label input[type="radio"] ~ i.fa.fa-circle-o,
    label input[type="checkbox"] ~ i.fa.fa-square-o{
        color: #5d5d5d;    display: inline;
        font-size: 1.1em;

    }
    label input[type="radio"] ~ i.fa.fa-dot-circle-o,
    label input[type="checkbox"] ~ i.fa.fa-check-square{
        display: none;
    }
    label input[type="radio"]:checked ~ i.fa.fa-circle-o,
    label input[type="checkbox"]:checked ~ i.fa.fa-square-o {
        display: none;
    }
    label input[type="radio"]:checked ~ i.fa.fa-dot-circle-o,
    label input[type="checkbox"]:checked ~ i.fa.fa-check-square {
        color: #6e1a25;    display: inline;
        font-size: 1.1em;

    }
    label:hover input[type="radio"] ~ i.fa,
    label:hover input[type="checkbox"] ~ i.fa{
        color: #6e1a25;
        font-size: 1.1em;
    }
    /*.btn, .btn.active, .btn.active:focus, .btn.active:hover, .btn.btn-default,*/
    div[data-toggle="buttons"] label.active{
        color: #6e1a25;
        background: transparent;
        border: none !important;
    }

    div[data-toggle="buttons"] label {
        display: inline-block;
        /* font-family: STC-ar ; */
        font-family: arial !important;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 1.1em;
        font-weight: normal;
        line-height: 1.8em;
        text-align: right;
        white-space: normal;
        vertical-align: top;
        cursor: pointer;
        background-color: transparent;
        border: none;
        border-radius: 3px;
        color: #5d5d5d;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
    }

    div[data-toggle="buttons"] label:hover {
        color: #6e1a25;
        background-color: transparent;
        border: none;
    }

    div[data-toggle="buttons"] label:active, div[data-toggle="buttons"] label.active {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    @media (max-width: 425px) {
        .verticl_center {
            padding: 0 0 10px 0;
            position: relative;
            top: 0;
            left:0;
            text-align: center;
            transform: none;

        }
      
    }
    .required {
    }
    .required:after {
        content: "*";
        color: red;
    }
</style>

@section('content')
<div class="row">
    <div  id="thanks"  class="text-center wow fadeInDown"  data-wow-duration="1s" style="display: none">
        <h1  style="color: #6e1a25;" class="" >شكرًا لمشاركتك.</h1>
    </div>
    <div class="col-lg-8 col-lg-offset-2">
        <h2 class="form_title">{!! trans('public.volunteeringForm') !!}</h2>
        {{--<form id="myform"  name="myform" role="form" method="POST" action="/volunteer/send">--}}

        {!! Form::open(array('route' => array('volunteer.store') , 'id'=>'myform' , 'name'=>'myform')) !!}

            <div class="form-group col-sm-12 " style="min-height:65px">
                <fieldset id="name_fieldset">
                    <label class="question required" class="fl_label" for="name">{!! trans('public.fullName') !!}</label>
                    <input type="text" name="name" value="" id="name" class="form-control fl_input">
                </fieldset>
            </div>
            <div class="form-group col-sm-12 " style="min-height:65px">
                <fieldset id="birthday_fieldset">
                    <label class="question required" class="fl_label" for="birthday">{!! trans('public.birthday') !!}</label>
                    <input type="date" name="birthday" value="" id="birthday" min="1970-04-01" max="2050-04-30" class="form-control fl_input">
                </fieldset>
            </div>
            <div id="marital_status ">
                <div class="form-group col-sm-12 col-xs-12 ">
                    <div class="">
                        <label class="question" for="marital_status">{!! trans('public.maritalStatus') !!}</label>
                        <br>
                        <div class="btn-group btn-group-vertical" data-toggle="buttons">
                            <label class="btn survey-btn">
                                <input type="radio" name='marital_status' id="answer" value="1"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  {!! trans('public.married') !!}</span>
                            </label>
                            <label class="btn survey-btn">
                                <input type="radio" name='marital_status' id="answer" value="2"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> {!! trans('public.single') !!}</span>
                            </label>
                            <label class="btn survey-btn">
                                <input type="radio" name='marital_status' id="answer" value="0"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> {!! trans('public.other') !!}</span>
                            </label>
                        </div>
                    </div>
                    <textarea  rows="2" name="marital_status_other" id="other_textbox" placeholder="" disabled class=" form-control"></textarea>
                </div>
            </div>
            <div class="form-group col-sm-12 col-xs-12">
                <fieldset id="address_fieldset">
                    <label class="question required" for="addressid">{!! trans('public.address') !!} </label>
                    <input type="text" name="address" id="addressid" placeholder=""  class="form-control" />
                </fieldset>
            </div>
            <div class="form-group col-sm-12 col-xs-12">
                <fieldset id="phoneNo1_fieldset">
                    <label class="question required" for="phoneNo1">{!! trans('public.phoneNo1') !!} </label>
                    <input type="text" name="phoneNo1" id="phoneNo1" placeholder=""  class="form-control" />
                </fieldset>
            </div>
            <div class="form-group col-sm-12 col-xs-12">
                <fieldset id="phoneNo2_fieldset">
                    <label class="question" for="phoneNo2">{!! trans('public.phoneNo2') !!} </label>
                    <input type="text" name="phoneNo2" id="phoneNo2" placeholder=""  class="form-control" />
                </fieldset>
            </div>
            <div class="form-group col-sm-12 col-xs-12">
                <fieldset id="email_fieldset">
                    <label class="question" for="emailid">{!! trans('public.email') !!} </label>
                    <input type="email" name="email" id="emailid" placeholder=""  class="form-control" data-error="that email address is invalid"/>
                </fieldset>
            </div>
            <div id="educational_qualification">
                <div class="form-group col-sm-12 col-xs-12 ">
                    <div class="">
                        <label class="question required" for="educational_qualification">{!! trans('public.educationalQualification') !!}</label>
                        <br>
                        <div class="btn-group btn-group-vertical" data-toggle="buttons">
                            <label class="btn survey-btn">
                                <input type="radio" name='educational_qualification' id="answer" value="1"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  {!! trans('public.HighSchool') !!}</span>
                            </label>
                            <label class="btn survey-btn">
                                <input type="radio" name='educational_qualification' id="answer" value="2"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> {!! trans('public.diploma') !!}</span>
                            </label>
                            <label class="btn survey-btn">
                                <input type="radio" name='educational_qualification' id="answer" value="3"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> {!! trans('public.BA') !!}</span>
                            </label>
                            <label class="btn survey-btn">
                                <input type="radio" name='educational_qualification' id="answer" value="0"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> {!! trans('public.other') !!}</span>
                            </label>
                        </div>
                    </div>
                    <textarea  rows="2" name="educational_qualification_other" id="other_textbox" placeholder="" disabled class=" form-control"></textarea>
                </div>
            </div>

            <div class="form-group col-sm-12 col-xs-12 ">
                <fieldset id="specialization_fieldset">
                    <label class="question" for="specializationId">{!! trans('public.specialization') !!} </label>
                    <input type="text" name="specialization" id="specializationId" placeholder=""  class="form-control" />
                </fieldset>
            </div>

            <div id="have_volunteered">
                <div class="form-group col-sm-12 col-xs-12 ">
                    <div class="">
                        <label class="question required" for="have_volunteered">{!! trans('public.have_volunteered') !!} </label>
                        <br>
                        <div class="btn-group btn-group-vertical" data-toggle="buttons">
                            <label class="btn survey-btn">
                                <input type="radio" name='have_volunteered' id="answer" value="1"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  {!! trans('public.yes') !!}</span>
                            </label>
                            <label class="btn survey-btn">
                                <input type="radio" name='have_volunteered' id="answer" value="2"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> {!! trans('public.no') !!}</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group col-sm-12 col-xs-12">
                <fieldset id="participation_and_work_entities_fieldset">
                    <label class="question" for="participation_and_work_entitiesId">{!! trans('public.participation_and_work_entities') !!} </label>
                    <textarea  rows="4" name="participation_and_work_entities" id="participation_and_work_entitiesId" placeholder=""  class="form-control"></textarea>
                </fieldset>
            </div>
            <div class="form-group col-sm-12 col-xs-12">
                <fieldset id="skills_fieldset">
                    <label class="question" for="skills">{!! trans('public.skills') !!} </label>
                    <textarea  rows="4" name="skills" id="skills" placeholder=""  class="form-control" ></textarea>
                </fieldset>
            </div>
            <div class="form-group col-sm-12 col-xs-12">
                <fieldset id="hobbies_fieldset">
                    <label class="question" for="hobbies">{!! trans('public.hobbies') !!} </label>
                    <textarea  rows="4" name="hobbies" id="hobbies" placeholder=""  class="form-control"></textarea>
                </fieldset>
            </div>
            <div class="form-group col-sm-12 col-xs-12">
                <fieldset id="field_like_to_volunteer_fieldset">
                    <label class="question" for="field_like_to_volunteer">{!! trans('public.field_like_to_volunteer') !!} </label>
                    <textarea  rows="4" name="field_like_to_volunteer" id="field_like_to_volunteer" placeholder=""  class="form-control fl_input" ></textarea>
                </fieldset>
            </div>

            <div id="categories_like_to_work">
                <div class="form-group col-sm-12 col-xs-12 ">
                    <div class="">
                        <label class="question" for="categories_like_to_work">{!! trans('public.categories_like_to_work') !!}</label>
                        <br>
                        <div class="btn-group btn-group-vertical" data-toggle="buttons">
                            <label class="btn survey-btn">
                                <input type="radio" name='categories_like_to_work' id="answer" value="1"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  {!! trans('public.children') !!}</span>
                            </label>
                            <label class="btn survey-btn">
                                <input type="radio" name='categories_like_to_work' id="answer" value="2"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> {!! trans('public.young') !!}</span>
                            </label>
                            <label class="btn survey-btn">
                                <input type="radio" name='categories_like_to_work' id="answer" value="0"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> {!! trans('public.other') !!}</span>
                            </label>
                        </div>
                    </div>
                    <textarea  rows="2" name="categories_like_to_work_other" id="other_textbox" placeholder="" disabled class=" form-control"></textarea>
                </div>
            </div>

            <div id="days_appropriate_for_you">
                <div class="form-group col-sm-12 col-xs-12 ">
                    <div class="">
                        <label class="question" for="days_appropriate_for_you">{!! trans('public.days_appropriate_for_you') !!}</label>
                        <br>
                        <div class="btn-group btn-group-vertical" data-toggle="buttons">
                            <label class="btn survey-btn">
                                <input type="checkbox" name='days_appropriate_for_you[]' id="answer" value="الأحد"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square fa-2x"></i> <span>  {!! trans('public.sun') !!}</span>
                            </label>
                            <label class="btn survey-btn">
                                <input type="checkbox" name='days_appropriate_for_you[]' id="answer" value="الاثنين"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square fa-2x"></i><span> {!! trans('public.mon') !!}</span>
                            </label>
                            <label class="btn survey-btn">
                                <input type="checkbox" name='days_appropriate_for_you[]' id="answer" value="الثلاثاء"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square fa-2x"></i><span> {!! trans('public.tues') !!}</span>
                            </label>
                            <label class="btn survey-btn">
                                <input type="checkbox" name='days_appropriate_for_you[]' id="answer" value="الاربعاء"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square fa-2x"></i> <span>  {!! trans('public.wed') !!}</span>
                            </label>
                            <label class="btn survey-btn">
                                <input type="checkbox" name='days_appropriate_for_you[]' id="answer" value="الخميس"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square fa-2x"></i><span> {!! trans('public.thurs') !!}</span>
                            </label>
                            <label class="btn survey-btn">
                                <input type="checkbox" name='days_appropriate_for_you[]' id="answer" value="أخرى :"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square fa-2x"></i><span> {!! trans('public.other') !!}</span>
                            </label>
                        </div>
                    </div>
                    <textarea  rows="2" name="days_appropriate_for_you_other" id="other_textbox" placeholder="" class=" form-control"></textarea>
                </div>
            </div>
            <div class="form-group col-sm-12 col-xs-12">
                <fieldset id="why_to_volunteer_fieldset">
                    <label class="question required" for="why_to_volunteer">{!! trans('public.why_to_volunteer') !!} </label>
                    <textarea  rows="5" name="why_to_volunteer" id="why_to_volunteer" placeholder=""  class="form-control"></textarea>
                </fieldset>
            </div>

            <div class="form-group col-sm-12 col-xs-12">
                <button type="submit" value="save" id="save" class="btn btn-block btn-primary">إرسال</button>
            </div>

            <h2 id="message"></h2>

            <div class="form-group col-xs-12">
                <div class="message">
                    <div class="divide-xs"></div>
                    <div class="alert"></div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {

            $('input[name ="marital_status"]').on('change', function() {
                if($("input[name=marital_status]:checked").val() === "0") {
                    $("textarea[name=marital_status_other]").attr('disabled', false).focus();
                    $("textarea[name=marital_status_other]").css("background-color", "#fff"); // change the color of the background

                }else {
                    $("textarea[name=marital_status_other]").attr('disabled', true);
                    $("textarea[name=marital_status_other]").css("background-color", "#eee"); // change the color of the background
                }

            });

            $('input[name ="educational_qualification"]').on('change', function() {
                if($("input[name=educational_qualification]:checked").val() === "0") {
                    $("textarea[name=educational_qualification_other]").attr('disabled', false).focus();
                    $("textarea[name=educational_qualification_other]").css("background-color", "#fff"); // change the color of the background

                }else {
                    $("textarea[name=educational_qualification_other]").attr('disabled', true);
                    $("textarea[name=educational_qualification_other]").css("background-color", "#eee"); // change the color of the background
                }

            });

            $('input[name ="categories_like_to_work"]').on('change', function() {
               if($("input[name=categories_like_to_work]:checked").val() === "0") {
                    $("textarea[name=categories_like_to_work_other]").attr('disabled', false).focus();
                   $("textarea[name=categories_like_to_work_other]").css("background-color", "#fff"); // change the color of the background

               }else {
                    $("textarea[name=categories_like_to_work_other]").attr('disabled', true);
                   $("textarea[name=categories_like_to_work_other]").css("background-color", "#eee"); // change the color of the background

               }

           });

        });

    </script>
    @include( 'jquery.ajax')
    {{--<script>--}}
        {{--$.ajaxSetup(--}}
            {{--{--}}
                {{--headers:--}}
                    {{--{--}}
                        {{--'X-CSRF-Token': $('input[name="_token"]').val()--}}
                    {{--}--}}
            {{--});--}}

    {{--</script>--}}

@endpush
