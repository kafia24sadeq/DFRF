@extends('layouts.master')

{!! MetaTags( "الدورات"." | ".settings("websiteName"), "الدورات", ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

@section('content')

    <div class="container" style="margin-top: 70px">
        <div class="row">
            @foreach ($courses as $course)
                <div class="col-lg-4 col-ms-12 course-marg" style="margin-top: 26px;">
                    <div class="card" style="position: relative"  id="card-hover">
                        <a href="/courses/{{ $course->id }}" class="orange-text">     {{ Html::image(PhotosDir($course->image_name) ,  '' ,array('style'=>'height: 266px','class'=>'card-img-top') ) }}</a>
                        <a href="/courses/{{ $course->id }}" class="orange-text">
                            <div class="card-body">
                                <h5 class="card-title orange-text" style="font-family: 'TitleFont', sans-serif">{{ $course->name }}</h5>
                                <div style="display: flex;justify-content: space-around;">
                                    <p class="card-text text-black" dir="rtl" style="display:flex;">
                                        <span><img style="margin-left: 7px" src="{!! ThemeHelper() !!}/img/icons/instructor.png" alt="">
                                        </span>{{ $course->trainer_name }} </p>|<p class="card-text text-black" dir="rtl" style="display:flex;">
                                        <span><img style="margin-left: 7px" src="{!! ThemeHelper() !!}/img/icons/calendar.png" alt="">
                                        </span>{{ $course->starting_date }}
                                </div>
                                <div style=" " id="news-footer"></div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="paginate">
            {{ $courses->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>



@endsection
