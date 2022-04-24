@extends('layouts.master')
@section('content')

    {{--@section('breadcrumbs',  Breadcrumbs::render('pages', $program ))--}}

    {!! MetaTags( "البرامج", ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

    <style>

        @media (min-width: 992px) {
            .pro-box {
                box-shadow: 1px 0px 6px 0px #dad6d6;
                width: 73%;
                height: 291px;
                padding-top: 57px;
                border-top-left-radius: 32px;
                border-bottom-right-radius: 32px;

            }

        }
        @media (max-width: 992px) {
            .pro-box {
                box-shadow: 1px 0px 6px 0px #dad6d6;
                width: 100%;
                height: 291px;
                padding-top: 57px;
                border-top-left-radius: 32px;
                border-bottom-right-radius: 32px;

            }
        }


        .pro-box > div> h5{
            color: #248CC8;
        }
        .prog-name::after {
            content: "";
            width: 93px;
            border-bottom: solid 1px #FDC718;
            display: inline-block;
            left: 36%;
            top: 44px;
        }
        .pro-box:hover{
            transform: scale(0.9, 0.9);
            /*box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25),*/
            /*-5px -5px 30px 15px rgba(0,0,0,0.22);*/
        }

    </style>
    <div class="container" style="margin-top: 70px">
        <div class="row">
            <div class="col-lg-3 col-sm-12"></div>
            <div class="col-lg-6 col-sm-12">
                <div class="about-cover text-center">
                    <p class="page-title">{{ trans('public.programs') }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12"></div>
        </div>
        <div class="row" style="margin-top: 100px">
            @forelse($programs as $program)
                <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                    <a href="/program/{{ $program->id }}" class="hyber-link">
                        <div class="text-center pro-box">
                            <img style="max-width: 70px; height: 70px" src="/photos/{{ $program->image_name }}" alt="">
                            <div class="prog-name" style="padding-top: 18px;padding-left: 50px;padding-right: 50px;">
                                <h5 class="text-center">{{ $program->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>

            @empty
                <div class="col-lg-12 text-center">
                    <h1>No Aontent Available!</h1>
                </div>
            @endforelse
        </div>
    </div>
@endsection

