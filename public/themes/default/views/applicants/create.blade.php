@extends('layouts.master')

{!! MetaTags( "الدورات"." | ".settings("websiteName"), "الدورات", ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}
@section('content')
@php
    $courses = \Systems\Course::where('availability',1)->get();

@endphp
@if($courses->isEmpty())

<div class="container" id="no-content-container" >
    <div class="row" style="justify-content: center; align-items: center">
        <p style="font-size: 3vw; color: #f37c22">{{ trans('public.noCourses') }}</p>
        <img src="{{ ThemeHelper() }}/img/no_courses.svg" class="img-fluid" alt="">

    </div>
</div>

@else

    <style>
        .custom-control-input:checked ~ .custom-control-label::before {
            color: #fff;
            border-color: #f37c22;
            background-color: #f37c22;
        }

    </style>
    <div class="container" style="margin-top: 70px">
        <div class="row divide-md " style="margin-right: 21px;">
            <h5 class="mainTitle underlined" style="font-size: 30px; color: black !important;">{{ trans('public.appForm') }}</h5>
            <div class="clearfix"></div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block text-center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container" style="margin-top: 40px;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <form action="/applicants" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container" style="margin-top: 100px;  box-shadow: 0px -1px 7px 2px #cbc1c1; padding: 30px;">
            <div class="row" style="justify-content: center;text-align: center">
                <div style="">
                    <img src="{{ ThemeHelper() }}/img/icons/applying.png" class="img-fluid" alt="">
                    <h3 style=" margin-top: 15px;">{{ trans('public.appfor') }}</h3>
                    <p>{{ trans('public.fillTheFields') }}</p>
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-lg-4" style="display: flex; flex-direction: column; text-align: center">
                    <div class="text-center">
                        <img id="blah" style="height: 175px !important;" {!!  old('card_image') !!} class="img-fluid"
                             src="{{ ThemeHelper() }}/img/icons/upload.png" alt="your image"/>
                    </div>
                    <h3 style=" margin-top: 15px;">{{ trans('public.IDCard') }}</h3>
                    <p>{{ trans('public.uploadID') }} </p>

                    <div>
                        <input type='file' name="card_image" value="{{ old('card_image') }} " id="file1" onchange="readURL(this);"/>
                        <label class="btn btn-warning text-white" style="background: #f37c22 !important;" for="file1">رفع الصورة</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    {{--                <div class="text-center">--}}
                    {{--                    <img id="blah" style="height: 175px !important;" class="img-fluid"--}}
                    {{--                         src="{{ ThemeHelper() }}/img/icons/upload.png" alt="your image"/>--}}
                    {{--                </div>--}}
                </div>
                <div class="col-lg-4" style="text-align: center">
                    <div class="text-center">
                        <img id="cert_image" style="height: 175px !important;" class="img-fluid"
                             src="{{ ThemeHelper() }}/img/icons/upload.png" alt="your image"/>
                    </div>
                    <h3 style=" margin-top: 15px;"> المؤهل العلمي</h3>
                    <p>قم بإرفاق صورة الشهادة الجامعية أو الثانوية أو شهادة المعهد</p>

                    <div>
                        <input type='file' name="cert_image" id="file"
                               onchange="document.getElementById('cert_image').src = window.URL.createObjectURL(this.files[0])">
                        <label class="btn btn-warning text-white" style="background: #f37c22 !important;" for="file">رفع الصورة</label>
                    </div>
                </div>
            </div>

            <hr style="width: 70%;margin-top: 75px;">

            <div class="row" style="justify-content: center;text-align: center;margin-top: 58px;">
                <div style="">
                    <img src="{{ ThemeHelper() }}/img/icons/pen.png" class="img-fluid" alt="">
                    <h3 style=" margin-top: 15px;">البيانات الشخصية</h3>
                    <p>جميع الحقول إلزامية يجب تعبئتها ﻹكمال التسجيل</p>
                </div>
            </div>

            <div class="row" style="margin-top: 40px">
                <div class="col-lg-4 col-sm-4" style="">
                    <p class="card-text text-black" id="applicants" dir="rtl">
                            <span id="app-icon">
                                <img style="margin-left: 7px;    width: 18px;"
                                     src="{!! ThemeHelper() !!}/img/icons/instructor.png" alt="">
                             </span>الإسم الكامل
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="form-group">
                        <input type="text" name="first_name"  class="form-control" value="{{ old('first_name') }}"
                               style="border: none !important; border-radius: unset; width: 70% !important;border-bottom: 1px solid #d6d0d0 !important;"
                               id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الإسم الأول" required>
                        <input type="text" name="second_name" class="form-control" value="{{ old('second_name') }}"
                               style="border: none !important; border-radius: unset; margin-top: 26px; width: 70% !important;border-bottom: 1px solid #d6d0d0 !important;"
                               id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="الإسم الثاني" required>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="form-group">
                        <input type="text" name="third_name" class="form-control" value="{{ old('third_name') }}"
                               style="border: none !important; border-radius: unset; width: 70% !important;border-bottom: 1px solid #d6d0d0 !important;"
                               id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الإسم الثالث" required>
                        <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}"
                               style="border: none !important; border-radius: unset; margin-top: 26px; width: 70% !important;border-bottom: 1px solid #d6d0d0 !important;"
                               id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="اللقب" required>
                    </div>
                </div>

            </div>
            <div class="row" style="margin-top: 40px">

                <div class="col-lg-4 col-sm-4" >
                    <p class="card-text text-black" id="applicants" dir="rtl">
                            <span id="app-icon">
                             <img style="margin-left: 7px;    width: 18px;"
                                  src="{!! ThemeHelper() !!}/img/icons/certificate.png" alt="">
                             </span> المؤهل
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4" style="display: flex">
                    <div class="custom-control custom-radio custom-control-inline" id="left-space">
                        <input type="radio"  id="college" name="qualification" value="جامعي" checked {{ old('college') }}
                        class="custom-control-input">
                        <label class="custom-control-label" for="college">جامعي</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" id="left-space">
                        <input type="radio" id="high" name="qualification" value="ثانوية عامة" {{ old('qualification') }}
                        class="custom-control-input">
                        <label class="custom-control-label" for="high"> ثانوية عامة
                        </label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" id="left-space">
                        <input type="radio" id="else" name="qualification" value="دون ذلك" {{ old('else') }}
                        class="custom-control-input">
                        <label class="custom-control-label" for="else">دون ذلك</label>
                    </div>
                </div>

            </div>
            <div class="row" style="margin-top: 40px">
                <div class="col-lg-4 col-sm-4" >
                    <p class="card-text text-black" id="applicants" dir="rtl">
                            <span id="app-icon">
                                    <img style="  width: 18px;"
                                         src="{!! ThemeHelper() !!}/img/icons/calendar_0.png"
                                         alt="">
                             </span>تاريخ الميلاد
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4" style="display: flex">
                    <input id="datepicker" name="birth_date" width="276" value="{{  old('birth_date') }}"/>
                    @push('scripts')
                        <script>
                            $('#datepicker').datepicker({
                                uiLibrary: 'bootstrap4'
                            });
                        </script>
                    @endpush
                </div>
            </div>
            <div class="row" style="margin-top: 40px">
                <div class="col-lg-4 col-sm-4" >
                    <p class="card-text text-black" id="applicants" dir="rtl">
                            <span id="app-icon">
                                    <img style="  width: 18px;"
                                         src="{!! ThemeHelper() !!}/img/icons/id_card.png"
                                         alt="">
                             </span> بيانات البطاقة الشخصية
                    </p>
                </div>
                <div class="col-lg-6 col-sm-4" style="display: flex">

                    <div class="form-group">
                        <input type="number" name="card_no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{!! old('card_no') !!}"
                               placeholder="رقم البطاقة">
                    </div>
                    <div class="form-group">
                        <input type="text" name="card_source" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{!! old('card_source') !!}"
                               placeholder="جهة الإصدار">
                    </div>
                </div>

            </div>
            <div class="row" style="margin-top: 40px">
                <div class="col-lg-4 col-sm-4" >
                    <p class="card-text text-black" id="applicants" dir="rtl">
                            <span id="app-icon">
                            <img style="  width: 18px;"
                                 src="{!! ThemeHelper() !!}/img/icons/phone.png"
                                 alt="">
                             </span>رقم الهاتف
                    </p>
                </div>
                <div class="col-lg-6 col-sm-4" style="display: flex">

                    <div class="form-group">
                        <input type="number" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{!! old('mobile') !!}"
                               placeholder="موبايل">
                    </div>
                    <div class="form-group">
                        <input type="number" name="home" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{!! old('home') !!}"
                               placeholder="أرضي">
                    </div>
                </div>

            </div>
            <div class="row" style="margin-top: 40px">
                <div class="col-lg-4 col-sm-4" >
                    <p class="card-text text-black" id="applicants" dir="rtl">
                            <span id="app-icon">
                                <img style="  width: 18px;"
                                     src="{!! ThemeHelper() !!}/img/icons/instructor.png"
                                     alt="">
                             </span>  {{ trans('public.gender') }}
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4" style="display: flex">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="sex" value="ذكر" checked
                               class="custom-control-input">
                        <label class="custom-control-label" for="female">{{ trans('public.male') }}</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="sex" value="أنثى"
                               class="custom-control-input">
                        <label class="custom-control-label" for="female"> {{ trans('public.female') }}
                        </label>
                    </div>

                </div>

            </div>
            <div class="row" style="margin-top: 40px">
                <div class="col-lg-4 col-sm-4" >
                    <p class="card-text text-black" id="applicants" dir="rtl">
                            <span id="app-icon">
                                <img style="  width: 18px;"
                                     src="{!! ThemeHelper() !!}/img/icons/pc.png"
                                     alt="">
                             </span> أستخدم الكمبيوتر
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4" style="display: flex">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="com-yes" name="computer" value="نعم" checked
                               class="custom-control-input">
                        <label class="custom-control-label" for="com-yes">نعم</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="no" name="computer" value="لا"
                               class="custom-control-input">
                        <label class="custom-control-label" for="no"> لا
                        </label>
                    </div>

                </div>

            </div>
            <div class="row" style="margin-top: 40px">

                <div class="col-lg-4 col-sm-4" >
                    <p class="card-text text-black" id="applicants" dir="rtl">
                            <span id="app-icon">
                                <img style="  width: 18px;"
                                     src="{{ ThemeHelper() }}/img/icons/english.png"
                                     alt="">
                             </span> اللغة الإنجليزية
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4" style="display: flex">
                    <div class="custom-control custom-radio custom-control-inline" id="left-space">
                        <input type="radio" id="english1" name="english" value="ممتاز"
                               class="custom-control-input">
                        <label class="custom-control-label" for="english1">ممتاز</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" id="left-space">
                        <input type="radio" id="english2" name="english" value="جيد جداً" checked
                               class="custom-control-input">
                        <label class="custom-control-label" for="english2"> جيد جداً
                        </label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" id="left-space">
                        <input type="radio" id="english3" name="english" value="جيد"
                               class="custom-control-input">
                        <label class="custom-control-label" for="english3"> جيد
                        </label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" id="left-space">
                        <input type="radio" id="english4" name="english" value="ضعيف"
                               class="custom-control-input">
                        <label class="custom-control-label" for="english4"> ضعيف
                        </label>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 40px">

                <div class="col-lg-4 col-sm-4" >
                    <p class="card-text text-black" id="applicants" dir="rtl">
                            <span id="app-icon">
                                <img style="  width: 18px;"
                                     src="{!! ThemeHelper() !!}/img/icons/job.png"
                                     alt="">
                             </span> هل تعمل حالياً
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4" style="display: flex">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="workyes" name="work" value="نعم"
                               class="custom-control-input">
                        <label class="custom-control-label" for="workyes">نعم</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="workno" name="work" value="لا" checked
                               class="custom-control-input">
                        <label class="custom-control-label" for="workno"> لا
                        </label>
                    </div>

                </div>

            </div>
            <div class="row" style="margin-top: 40px">

                <div class="col-lg-4 col-sm-4" >
                    <p class="card-text text-black" id="applicants" dir="rtl">
                            <span id="app-icon">
                                <img style="  width: 18px;"
                                     src="{{ ThemeHelper() }}/img/icons/students.png"
                                     alt="">
                             </span>   إختيار الدورة
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4" style="display: flex">
                    <select name="course" class="custom-select">
                        @foreach($course as $item)
                            <option  value="{{ $item->name }}">{{ $item->name }}</option>
                        @endforeach
                    </select>

                </div>

            </div>
            <div class="row" id="outer" style="margin-top: 20px;justify-content: center">
                <hr>
                <button type="submit" class="button_slide slide_right"  style="background: #f37c22 !important;">تقديم</button>
                <hr>
            </div>

        </div>
    </form>


@endif
@endsection
@push('scripts')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <style>
        input[type=file] {
            display: none;
        }
        .input-group>.input-group-append>.btn, .input-group>.input-group-append>.input-group-text, .input-group>.input-group-prepend:first-child>.btn:not(:first-child), .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child), .input-group>.input-group-prepend:not(:first-child)>.btn, .input-group>.input-group-prepend:not(:first-child)>.input-group-text {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            height: 38px;
        }

    </style>

    @endpush
