@extends('layouts.master')
{{-- @section('title' ,  $posts->categories->name ) --}}
{{--@section('breadcrumbs', Breadcrumbs::render('work', $work))--}}
{{--@section('pageheading', "المشاريع")--}}


{!! MetaTags($work->name." | ".settings("websiteName"), excerptHelper(settings("metaDescription"),150,''),ThemeHelper()."img/logo.png" , settings("metaKeywors") , settings("websiteName") ) !!}


@section('content')
    <section class="container">
        <div class="row work_show">
            <div class="text-right">
                <div class="divide-sm">
                    <h1 class="sub_colored">{!! $work->name !!}</h1>
                </div>
                <div class="divide-xs">
                    <p class="main_colored">{!! $work->created_at !!}</p>
                </div>
                <div class="">
                    {{ Html::image(PhotosDir($work->image_name) ,"", array("width"=>"100%","height"=>"200px", "class"=>"img-responsive" )) }}
                </div>
                <div class="clearfix"></div>
                <div class="work_content divide-sm">
                   {!!  ($work->content) !!}
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>

@endsection