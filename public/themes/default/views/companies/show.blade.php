@extends('layouts.master')
{{-- @section('title' ,  $posts->categories->name ) --}}
{{--@section('breadcrumbs', Breadcrumbs::render('work', $work))--}}
{{--@section('pageheading', "المشاريع")--}}


{!! MetaTags($company->title." | ".settings("websiteName"), excerptHelper(settings("metaDescription"),150,''),ThemeHelper()."img/logo.png" , settings("metaKeywors") , settings("websiteName") ) !!}


@section('content')
    <section class="container">
        <div class="row company_show">
            <div class="col-lg-4">
                <div class="company-shadow">
                    {{ Html::image(PhotosDir($company->image_name) ,"", array("width"=>"300px","height"=>"200px", "class"=>"compnay-image img-responsive" )) }}
                </div>
            </div>
            <div class="compnay-details col-lg-8">
                <div class="text-right">
                    <div class="divide-sm">
                        <h1 class="company-name">{!! $company->title !!}</h1>
                    </div>
                    <div class="divide-xs">
                        <p class="main_colored">{!! $company->created_at !!}</p>
                    </div>
                    
                    <div class="clearfix"></div>
                    <div class="work_content divide-sm">
                        {!!  ($company->description) !!}
                    </div>
                </div>
            </div>
           
        </div>
    </section>

    {{-- Company Products --}}

    <div class="container" style="
    height: 150px;
    background-color: #792525;
    width: 100%;
    display: flex;
    align-items: center;
    margin-bottom: 10px;
">
        <h1 class=" sub_colored" style="color:white;">{{ trans("public.comproducts")  }} {{ $company->title }}</h1>
        </div>
        
        
        <div class="clearfix"></div>
        
        
        {{ $products->links('vendor.pagination.bootstrap-4') }}
        
        <div class="container-fluid">
            <div class="row" style="margin-bottom: 2em">
                <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                @foreach ($products as $product)
                                    <div class="col-sm-3 parent">
                                        <div class="bordered" style="padding: 1em;margin-bottom: 2em">
                                            <div style="overflow: hidden">
                                                <a href="{!! route('product',$product->id) !!}">
                                                    {{ Html::image(PhotosDir($product->image_name, false) ,  $product->name  , array( "width"=>"100%", 'class' => ' child img-responsive')) }}
                                                </a>
                                                <h3 class="title_link" style=""><a
                                                            href="{!! route('product',$product->id) !!}">{!! $product->name !!}</a></h3>
                                                <div class="product_footer">
                                                    <p class="pull-right">{{ trans('public.price') }} : {{ $product->price}} </p>
                                                    <a class="pull-left" href="{{ route('product', $product->id)  }}">{{ trans('public.more') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
        </div>
        
        {{ $products->links('vendor.pagination.bootstrap-4') }}
        

@endsection