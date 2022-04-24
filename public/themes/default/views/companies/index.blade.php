@extends('layouts.master')

{!! MetaTags( "الشركات"." | ".settings("websiteName"), "الشركات", ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

@section('content')
<div class="container">
        <h1 class="visible-xs sub_colored">{{ trans("public.companies")  }}</h1>
    </div>

    <header id="works_header">
        <div class="divide-md">
            <div class="container">
                <div class="col-sm-12 divide-md text-right">
                    <h1 class="hidden-xs sub_colored">{{ trans("public.companies")  }}</h1>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <div class="clearfix"></div>

    <div class="container">
            <div class="paginate">
                    {{ $company->links('vendor.pagination.bootstrap-4') }}
                </div>
            <div class="row" style="width:100%;margin-right: 10px;">
                @foreach ($company as $element)
            <div class="col-lg-3 text-center" id="company-all">
                    
                            <a href="{!! route('comapny',$element->id) !!}">
                                    
                                {{ Html::image(PhotosDir($element->image_name) ,"", array("width"=>"100%","height"=>"200px", "class"=>"img-responsive" )) }}
                            </a>
                            <div class="divide-xs">
                                <a href="{!! route('comapny',$element->id) !!}" class="project_title"><h3>{!! $element->title !!}</h3></a>
                    </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="paginate" style="clear:both">
        {{ $company->links('vendor.pagination.bootstrap-4') }}
    </div>
@endsection