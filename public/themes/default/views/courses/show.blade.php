@extends('layouts.master')

{{--@section('breadcrumbs', Breadcrumbs::render('post', $post ))--}}
{{--@section('pageheading', $post->categories->name)--}}

{!! MetaTags($course->name , excerptHelper($course->description,150,''),'') !!}

@section('content')

    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <div class="row">
                    <div>
                        <h3 style="color: #f37c22;padding: 8px; font-family: 'TitleFont', sans-serif">{{ $course->name }}</h3>

                        {{ Html::image(PhotosDir($course->image_name) ,  '' ,array('style'=>'margin-top:30px','class'=>'img-fluid') ) }}
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="row" style="margin-top: 30px;padding: 8px;">
                            <h4 style="color: #f37c22;">وصف الدورة:</h4>
                            <p>{{ strip_tags($course->description)  }}</p>
                        </div>
                        <div class="row" style="margin-top: 30px;padding: 8px;">
                            <h4 style="color: #f37c22;"> محتوى الدورة:</h4>
                            <p>{{ strip_tags($course->course_content)  }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12" style="  border-right: 1px solid #dcd2d2;padding: 25px;">
                        <div class="row course-side" style="flex-direction: column">
                            <h5><span><img style="margin-left: 7px" src="{!! ThemeHelper() !!}/img/icons/calendar.png" alt="">الوقت</span></h5>
                            <p>{{ $course->course_time }}</p>
                        </div>
                        <hr>
                        <div class="row course-side" style="flex-direction: column">
                            <h5><span><img style="margin-left: 7px" src="{!! ThemeHelper() !!}/img/icons/calendar.png" alt="">تاريخ بدء الدورة</span></h5>
                            <p>{{ $course->starting_date }}</p>
                        </div>
                        <hr>
                        <div class="row course-side" style="flex-direction: column">
                            <h5><span><img style="margin-left: 7px" src="{!! ThemeHelper() !!}/img/icons/calendar.png" alt="">المدرب</span></h5>
                            <p>{{ $course->trainer_name }}</p>
                        </div>
                        <hr>
                        <div class="row course-side" style="flex-direction: column">
                            <h5><span><img style="margin-left: 7px" src="{!! ThemeHelper() !!}/img/icons/calendar.png" alt="">عدد الساعات</span></h5>
                            <p>{{ $course->hours_no }}</p>
                        </div>
                        @if($course->availability == 1)
                        <hr>
                        <div class="row course-side" style="flex-direction: column">
                            <a href="/applicants/create" class="btn btn-warning" style="color: white">التسجيل في الدورة</a>
                        </div>
                        @endif
                        <hr>
                    </div>
                </div>


            </div>
            <div class="col-lg-1 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12" id="last-course" >
                <div class="row divide-md " style="    margin-bottom: 41px;margin-right: 20px;">
                    <h2 class="side-title underlined">{!! trans('public.lastCourse') !!}</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    @foreach($lastCourses as $last)
                        <a href="/courses/{{ $last->id }}" class="link-black">
                            {{--                    <div class="col-lg-1"></div>--}}
                            <div class="col-lg-12 col-sm-12">
                                <div style="display: flex">
                                    {{ Html::image(PhotosDir($last->image_name) ,  '' ,array('style'=>'height:76px;width:76px','class'=>'img-fluid') ) }}
                                    <div style=" display: flex;flex-direction: column;justify-content: center;">
                                        <h5 style=" margin-right: 10px; font-family: 'TitleFont', sans-serif">{{ $last->name }}</h5>
                                        @php
                                            // $post = 0;
                                                 $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $last->created_at)->format('Y-m-d');
                                        @endphp
                                        <p class="card-text text-black" dir="rtl" style="display:flex;margin-right: 15px; "><span><img
                                                    style="margin-left: 7px"
                                                    src="{!! ThemeHelper() !!}/img/icons/calendar.png"
                                                    alt=""></span>{{ $date }} </p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection

