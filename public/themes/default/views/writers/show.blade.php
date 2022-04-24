@extends('layouts.master')
{{-- @section('title' ,  $posts->categories->name ) --}}
 @section('breadcrumbs', Breadcrumbs::render('writer', $posts[0] ))
 @section('pageheading', trans("public.writers"))


{!! MetaTags($posts[0]->writers->name , excerptHelper(settings("metaDescription"),150,''),ThemeHelper()."img/logo.png" , settings("metaKeywors") , settings("websiteName") ) !!}


@section('content')



    <div class="col-lg-3">
        <img class="img-responsive img-thumbnail resized" src="{!! PhotosDir($posts[0]->getImage(), true, [130,180]) !!}" alt="">

    </div>
    <h1>{!!   $posts[0]->writers->name !!}</h1>
    <p style="font-weight: bold">{!! $posts[0]->writers->email !!}</p>
    <p>
        {!! $posts[0]->writers->content !!}
    </p>

    <div class="">
        {{ $posts->links('vendor.pagination.bootstrap-4') }}
    </div>
    <div class="row divide-sm">

        @foreach ($posts as $element)
            <div class="col-xs-12 col-sm-6 col-md-12  divide-sm" >





                <div class="col-xs-12 col-sm-12 col-md-8">
                    <h3 class="title_link"><a href="{!! route('post',$element->id) !!}">{!! $element->title !!}</a></h3>

                    <p class="">{!! excerptHelper($element->content) !!}</p>
                </div>


            </div>
        @endforeach
    </div>

    <div class="clearfix"></div>
    <div class="" style="clear:both">
        {{ $posts->links('vendor.pagination.bootstrap-4') }}
    </div>


@endsection