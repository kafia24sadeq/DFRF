@extends('layouts.master')

{{--@section('breadcrumbs', Breadcrumbs::render('works' ))--}}
{{--@section('pageheading', $post->categories->name) --}}


{!! MetaTags( trans("public.works") ." | ". settings("websiteName") , excerptHelper(settings("metaDescription"),150,''),ThemeHelper()."img/logo.png" , settings("metaKeywors") , settings("websiteName") ) !!}


@section('content')
    <div class="container">
        <h1 class="visible-xs sub_colored">{{ trans("public.works")  }}</h1>
    </div>

    <header id="works_header">
        <div class="divide-md">
            <div class="container">
                <div class="col-sm-12 divide-md text-right">
                    <h1 class="hidden-xs sub_colored">{{ trans("public.works")  }}</h1>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <div class="clearfix"></div>

    <section class="container divide-md">
        <div class="">
            {{ $works->links('vendor.pagination.bootstrap-4') }}
        </div>

        <div class="marginer">
            @foreach ($works as $element)
                <div class="col-md-4 col-sm-4 text-center col-xs-12 " id="works-all">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="position: relative; box-shadow: 11px 14px 10px #F4EDE7;
                                                                                margin-top: 15px;">
                        <div class="project_img divide-xs">
                            <a href="{!! route('work',$element->id) !!}">
                                {{ Html::image(PhotosDir($element->image_name) ,"", array("width"=>"100%","height"=>"200px", "class"=>"img-responsive" )) }}
                            </a>
                            <div class="divide-xs">
                                <a href="{!! route('work',$element->id) !!}" class="project_title" ><h3 style="color:black;">{!! $element->name !!}</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <div class="clearfix"></div>
    <div class="" style="clear:both">
        {{ $works->links('vendor.pagination.bootstrap-4') }}
    </div>
@endsection