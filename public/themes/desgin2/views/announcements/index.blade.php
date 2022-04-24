@extends('layouts.master')
@section('content')

{{--@section('breadcrumbs',  Breadcrumbs::render('pages', "اﻹعلانات" ))--}}

{!! MetaTags( "اﻹشعارات"." | ".settings("websiteName"), "اﻹشعارات", ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

@section('content')
    <div class="page-header">
        <h1>اﻹشعارات</h1>
    </div>
    @foreach ($announcements as $element)
        <div class="row divide-sm" >
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="{!! route("job", $element->id) !!}">
                    <div class="resizedrow spec center-block">
                        {!!   Html::image(PhotosDir($element->getImage(), true, [200,80]) ,  $element->title  , array('width'=>'200','height'=>'80', 'class' => 'img-responsive full_width_image')) !!}
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9">
                <h3 class="title_link"><a href="{!! route("announcements", $element->id) !!}">{!! $element->title !!}</a></h3>
                <p class="">{!!  \Illuminate\Support\Str::words(strip_tags($element->link),50, '...'); !!}</p>
            </div>
        </div>
    @endforeach
@endsection
