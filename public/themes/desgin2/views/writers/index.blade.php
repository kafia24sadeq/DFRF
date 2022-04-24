@extends('layouts.master')
{{-- @section('title' ,  $posts->categories->name ) --}}
 @section('breadcrumbs', Breadcrumbs::render('writers' ))
{{-- @section('pageheading', $post->categories->name) --}}


{!! MetaTags( trans("public.writers"), excerptHelper(settings("metaDescription"),150,''),ThemeHelper()."img/logo.png" , settings("metaKeywors") , settings("websiteName") ) !!}


@section('content')



    <h1>{!!   trans('public.writers') !!}</h1>


    <div class="">
        {{ $writers->links('vendor.pagination.bootstrap-4') }}
    </div>

    <div class="row divide-sm">

        @foreach ($writers as $element)
            <div class="col-xs-12 col-sm-6 col-md-12  divide-sm" >


                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <a href="{!! route('writer',$element->id) !!}">
                        <div class="resizedrow spec center-block">
                            <img class="img-responsive img-thumbnail resized" src="{!! PhotosDir($element->images->name, true, [130,180]) !!}" alt="">
                        </div>
                    </a>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-6">
                    <h3 class="title_link"><a href="{!! route('writer',$element->id) !!}">{!! $element->name !!}</a></h3>
                    <p class="">{!! excerptHelper($element->content) !!}</p>
                </div>


            </div>
        @endforeach
    </div>

    <div class="clearfix"></div>
    <div class="" style="clear:both">
        {{ $writers->links('vendor.pagination.bootstrap-4') }}
    </div>


@endsection