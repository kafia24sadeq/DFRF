@extends('layouts.master')
@section('content')



@section('breadcrumbs',  Breadcrumbs::render('pages', $tender ))

{!! MetaTags( $tender->title." | ".settings("websiteName"), $tender->title, $tender->getImage() , $tender->image, settings("websiteName") ) !!}
    {{--<div class="row">--}}
        {{--<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">--}}
            {{--<h2 class="mainTitle" >{!! $tender->title !!}</h2>--}}
        {{--</div>--}}
        {{--<div class="clearfix"></div>--}}
    {{--</div>--}}
    {{--<div class="panel panel-default">--}}
        {{--<div class="ads_img col-sm-6 col-sm-push-6">--}}
            {{--<img class="img-responsive  child" src="{!! PhotosDir($tender->getImage()) !!}" alt="{{$tender->title}}">--}}
        {{--</div>--}}
        {{--<div class="col-sm-6 col-sm-pull-6 text-right">--}}
            {{--<div class="panel-body about_pageText">--}}
                {{--{!! $tender->link !!}--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="">
        <h2 id="mainTitle" class="mainTitle">{!! RemoveEntity($tender->title) !!}</h2>
        @if($closed == true)
            <div style="
        background: -moz-linear-gradient(left,  rgba(0,0,0,0) 0%, rgba(239,239,239,0.61) 60%, rgba(239,239,239,1) 99%); /* FF3.6-15 */
        background: -webkit-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(239,239,239,0.61) 60%,rgba(239,239,239,1) 99%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to right,  rgba(0,0,0,0) 0%,rgba(239,239,239,0.61) 60%,rgba(239,239,239,1) 99%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#efefef',GradientType=1 ); /* IE6-9 */
        padding: 3px;margin: 20px 0;font-size: 17px; color: #c50000;font-weight: bold;">
                <img style="display: inline-block; " width="15px" src="{!! 	ThemeHelper() !!}img/clock2.png"
                     width="60px" alt="الوقت"> تم إنتهاء هذا الإعلان. </div>

        @endif
    </div>

    <div class="row" style="position: relative;margin-bottom: 20px;margin-left: 10px;">
        <div class="col-sm-8">
            {!!   Html::image(PhotosDir($tender->getImage(), true, [1150,700]) ,  $tender->title  , array('width'=>'100%','height'=>'500', 'class' => 'img-responsive full_width_image')) !!}
        </div>
    </div>

    <div style="
                         /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,efefef+60&0+0,1+99 */
        background: -moz-linear-gradient(left,  rgba(0,0,0,0) 0%, rgba(239,239,239,0.61) 60%, rgba(239,239,239,1) 99%); /* FF3.6-15 */
        background: -webkit-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(239,239,239,0.61) 60%,rgba(239,239,239,1) 99%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to right,  rgba(0,0,0,0) 0%,rgba(239,239,239,0.61) 60%,rgba(239,239,239,1) 99%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#efefef',GradientType=1 ); /* IE6-9 */
        padding: 10px;
                margin-bottom: 20px;">
        <img style="display: inline-block; " src="{!! 	ThemeHelper() !!}img/logo.png" width="60px"
             alt="{!! Settings::get('websiteName')  !!}"> <span
                style="display: inline-block; color: #403D91; margin-right: 10px;"> {!! $tender->source !!} </span>
    </div>

    <div id="subject_font" class="subject_font col-lg-8">
        {!! $tender->content  !!}
    </div>

<div style="clear: both "></div>


@endsection
