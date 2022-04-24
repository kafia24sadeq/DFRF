@extends('layouts.master')
{{--@if ($posts->isEmpty())--}}
    {{--{!! MetaTags('لا توجد نتائج بحث عن :'.$keywords ,'', '', '', settings("websiteName")) !!}--}}

{{--@elseif(Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\PostController@search')--}}
    {{--{!! MetaTags("البحث عن :".$keywords,'', '', '', settings("websiteName")) !!}--}}

{{--@else--}}
    @section('breadcrumbs', Breadcrumbs::render('posts', $posts))
{!! MetaTags($posts[0]->categories->name , excerptHelper($posts[0]->categories->description,150 ,''), ThemeHelper()."img/logo.png", $posts[0]->categories->keyword , settings("websiteName")) !!}

{{--@endif--}}

@section('content')


    {{--@if ($posts->isEmpty() || ( empty ($keywords) ) && Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\PostController@search' )--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-8 col-lg-offset-2 text-center">--}}
                    {{--<h3> لا توجد نتائج بحث عن : {{$keywords}} </h3>--}}
                    {{--<h4>حاول مرة أخرى</h4>--}}
                    {{--<div class="col-lg-6 col-lg-offset-3">--}}
                        {{--@include("includes.search")--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-12">--}}
                        {{--<h4>أو يمكنك الرجوع للصفحة <a href="/">الرئيسية</a></h4>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}

    {{--@else--}}
        {{--@if(Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\PostController@indexCat')--}}
            {{--<div class="page-header">--}}
                {{--<h1>{!! $posts[0]->categories->name !!}</h1>--}}
            {{--</div>--}}

        {{--@elseif(Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\PostController@search')--}}
            {{--<div class="page-header">--}}
                {{--<h1> البحث عن : {{$keywords}}</h1>--}}
                {{--<h3 style="color: #868282"> عدد النتائج :  <span style="color: #212121">{{$postCount}} </span>خبر </h3>--}}
            {{--</div>--}}
        {{--@endif--}}


        <div class="">
            {{ $posts->links('vendor.pagination.bootstrap-4') }}
        </div>

        @foreach ($posts as $element)
            <div class="row divide-sm" >


                <div class="col-xs-12 col-sm-12 col-md-3">
                    <a href="{!! route('post',$element->id) !!}">
                        <div class="resizedrow spec center-block">
                            {!!   Html::image(PhotosDir($element->getImage(), true, [200,80]) ,  $element->title  , array('width'=>'200','height'=>'80', 'class' => 'img-responsive full_width_image')) !!}
                        </div>
                    </a>
                </div>
                @if($element->type == 1)
                    {!! $element->writers->name !!}
                @endif

                <div class="col-xs-12 col-sm-12 col-md-9">
                    <h3 class="title_link"><a href="{!! route('post',$element->id) !!}">{!! $element->title !!}</a></h3>
                    <p class=""><a href="{!! route('cat',$element->categories->id) !!}">{!! $element->categories->name !!}</a></p>
                    <p class="">{!!  \Illuminate\Support\Str::words(strip_tags($element->content),50, '...'); !!}</p>
                </div>


            </div>
        @endforeach
        <div class="clearfix"></div>
        <div class="" style="clear:both">
            {{ $posts->links('vendor.pagination.bootstrap-4') }}
        </div>

    {{--@endif--}}


@endsection

