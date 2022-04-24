@extends('layouts.master')

{{--@section('breadcrumbs', Breadcrumbs::render('post', $post ))--}}
{{--@section('pageheading', $post->categories->name)--}}

{!! MetaTags($program->name , excerptHelper($program->description,150,''),'') !!}

@section('content')


    <style>

        @media (max-width: 991px) {
            .cont{
                margin-top:100px;
                border: 2px solid #4ACA9B;
                border-top-right-radius: 92px;
                border-bottom-left-radius: 92px;
                margin-right: -3px;
            }
            .padding-col{
                padding-left: 50px;
                padding-right: 50px;
                padding-bottom: 25px;
            }

            .pro-box {
                /*box-shadow: 1px 0px 6px 0px #dad6d6;*/
                width: 73%;
                height: 211px;
                padding-top: 57px;


            }
        }



        .pro-box {
            /*box-shadow: 1px 0px 6px 0px #dad6d6;*/
            width: 73%;
            height: 291px;
            padding-top: 57px;


        }



        @media (min-width: 991px) {
            .cont{
                margin-top:100px;
                border: 2px solid #4ACA9B;
                border-top-right-radius: 92px;
                border-bottom-left-radius: 92px;
                margin-right: -3px;
            }
            .padding-col{
                padding-left: 148px;
                padding-top: 55px;
            }
            .pro-box {
                /*box-shadow: 1px 0px 6px 0px #dad6d6;*/
                width: 73%;
                height: 291px;
                padding-top: 57px;


            }
        }

        .project-container
        {
            box-shadow: -1px -1px 9px #d6cfcf;
            text-align: center;
            padding-top: 20px;
            border-radius: 15px;
        }
        .img-fluid{
            max-width: 75%;
        }

        .project-title{
            color: #248CC8;
            /*font-size: 1.5em;*/
            font-weight: bold;
            padding: 27px 20px 3px;

        }
        .project-content{
            padding-left: 35px;
            padding-right: 35px;
            padding-bottom: 28px;
            color: black;
        }
    </style>

    <div class="cont" style="margin-top: 50px">
        <div class="row">
            <div class="col-lg-4 col-sm-12 " style="display: flex;justify-content: center;">
                <div class="text-center pro-box">
                    <img style="max-width: 70px; height: 70px" src="/photos/{{ $program->image_name }}" alt="">
                    <div class="prog-name" style="padding-top: 18px;padding-left: 50px;padding-right: 50px;">
                        <h5 class="text-center" style="color: #248CC8">{{ $program->name }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12 padding-col" style="color: #616161 !important;">
                <p >
                    {!! $program->content !!}
                </p>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top: 140px">
        <div class="row">
            <div class="col-lg-3 col-sm-12"></div>
            <div class="col-lg-6 col-sm-12">
                <div class="about-cover text-center">
                    <p class="page-title">{{ trans('public.projects') }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12"></div>
        </div>
        <div class="row" style="margin-top: 50px">
            @foreach($works as $work)
            <div class="col-lg-4 col-sm-6">
                <a href="/work/{{ $work->id }}">     <div class="project-container">
                    <img class="img-fluid" src="/photos/{{ $work->image_name }}" alt="">
                  <h5 class="project-title">{{ $work->name }}</h5>
                    <p class="project-content" style="color: #616161 !important;;">{{ strip_tags(str_limit($work->content, 150,'...')) }}</p>
                </div></a>
            </div>
                @endforeach
        </div>
    </div>


@endsection

