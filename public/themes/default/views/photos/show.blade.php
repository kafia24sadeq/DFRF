@extends('layouts.master')
{{--@section('breadcrumbs', Breadcrumbs::render('video', $video ))--}}
@section('title' , str_limit($image->content, 100) )
{{-- @section('pageheading',  $image->imageCategory->name) --}}


{!! MetaTags($image->content, excerptHelper($image->content ,150,''),  "https://www.youtube.com/embed/" ) !!}


@section('content')
    @if (empty($image->link) )
<div class="container" style="margin-bottom: 100px;background: #f37c22;margin-top: 65px;">
    <div class="row" style="color: white;">
        <div class="col-lg-6 col-sm-12" id="photo-desc">
            {{ Html::image(PhotosDir($image->name) ,  $image->caption ,array('class'=>'img-fluid') ) }}
        </div>
        <div class="col-lg-6 col-sm-12" style="padding: 30px;">
            <p style="font-size: 17px;padding: 22px">{!! $image->content !!}</p>
        </div>
    </div>
</div>
    @else
<div class="container" style="margin-top: 35px;">
    <div class="row divide-md" style="   margin-bottom: 82px;">
        <h2 class="mainTitle underlined"
            style="font-size: 27px !important;color: black !important;">{!! trans('public.annualReports') !!}</h2>
        <div class="clearfix"></div>
    </div>
    <div class="row" style="margin-top: 40px">
        <div class="col-lg-4 col-sm-12" style="text-align: right;">
            {{ Html::image(PhotosDir($image->name) ,  $image->caption ,array('style'=>' height:500px','class'=>'img-fluid') ) }}
        </div>
        <div class="col-lg-7 col-sm-12"
             style="    display: flex;flex-direction: column;justify-content: flex-end;  margin-top: 28px;">
            <h4 class="orange-text">التقرير السنوي لصندوق تنمية المهارات</h4>
            <p style="font-size:18px;">{!! $image->content !!}</p>
            <div class="report-btn">
                <a href="/{{ $image->link }}"
                   class="btn btn-warning color-white"
                   style="background: #f37c22;">{{ trans('public.downloadDoc') }}</a>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row divide-md" style="   margin-bottom: 82px; margin-top: 80px">
        <h2 class="mainTitle underlined"
            style="font-size: 27px !important;color: black !important;">{!! trans('public.readMore') !!}</h2>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        @foreach ($document as $item)
            <div class="col-lg-4 col-md-6 col-sm-12" style="margin-top:20px;">
                <a href="/image/{{ $item->id }}">
                    <div class="box" style="display:block">
                        <div class="image-box">
                            {{ Html::image(PhotosDir($item->name) ,  $item->caption ,array('style'=>'width:100%; height: 500px;') ) }}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

    @endif

@endsection
