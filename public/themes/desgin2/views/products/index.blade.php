@extends('layouts.master')
@section('content')

{{--@section('breadcrumbs',  Breadcrumbs::render('products', $products ))--}}

@if(Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\ProductsController@indexCat')
    {!! MetaTags($products[0]->productCategory->name , excerptHelper($products[0]->productCategory->description,150 ,''), ThemeHelper()."img/logo.png", settings("websiteName")) !!}

@else
    {!! MetaTags( "المنتجات", ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

@endif

<div class="container">
    <h1 class="visible-xs sub_colored">{{ trans("public.products")  }}</h1>
</div>

<header id="products_header">
    <div class="divide-md">
        <div class="container">
            <div class="col-sm-12 divide-md text-right">
                <h1 class="hidden-xs sub_colored">{{ trans("public.products")  }}</h1>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>
<div class="clearfix"></div>


{{ $products->links('vendor.pagination.bootstrap-4') }}

<div class="container-fluid">
        {{--<a date-productCat="2" class="productCategories radio-label accordion-toggle" data-toggle="collapse"  data-parent="#accordion" href="#collapseTwo"  id="city2-button">--}}
            {{--<label class="button-label" for="city2-button">--}}
                {{--<h1>حضرموت</h1>--}}
            {{--</label>--}}
        {{--</a>--}}
        {{--<a date-productCat="3" class="productCategories radio-label accordion-toggle" data-toggle="collapse"  data-parent="#accordion" href="#collapseTwo"  id="city3-button">--}}
            {{--<label class="button-label" for="city3-button">--}}
                {{--<h1>لحج</h1>--}}
            {{--</label>--}}
        {{--</a>--}}
    <div class="row" style="margin-bottom: 2em">
        <div class="col-sm-12">
            <div class="col-sm-3">
                <div class="button-wrap divide-md">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <a href="{{ route('products')  }}" class="productCategories radio-label" id="city1-button">
                                <label class="button-label @if($productCat == 0) chosen_productCategory @endif" for="product1-button">
                                    <h1>{{ trans("public.allProducts")  }}</h1>
                                </label>
                            </a>
                        </div>
                    </div>
                    @foreach ($products_cats as $product_cat)
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <a href="{{ route('products_cat', $product_cat->id) }}" class="productCategories radio-label" id="city1-button">
                                    <label class="button-label @if($productCat == $product_cat->id) chosen_productCategory @endif" for="product1-button">
                                        <h1>{{ $product_cat->name }}</h1>
                                    </label>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
                {{--<h2 class="main_colored" style="">{!! $selected_products_cats !!}</h2>--}}
                {{--<form id="myForm" name="myForm" action="/filters" method="GET">--}}
                    {{--<label class="" for="productPrice">--}}
                        {{--{{ trans('public.price') }}--}}
                    {{--</label>--}}
                    {{--<input id="productPrice" name="productPrice" type="range" value="10" min="5" max="5000">--}}
                {{--</form>--}}
            </div>
            <div class="col-sm-9">
                <h2 class="main_colored divide-sm" style="">{!! $selected_products_cats !!}</h2>
                <div class="row">
                    <div class="col-sm-12">
                        @foreach ($products as $product)
                            <div class="col-sm-4 parent">
                                <div class="bordered" style="padding: 1em;margin-bottom: 2em">
                                    <div style="overflow: hidden">
                                        <a href="{!! route('product',$product->id) !!}">
                                            {{ Html::image(PhotosDir($product->image_name, true, [200,100]) ,  $product->name  , array( "width"=>"100%", 'class' => ' child img-responsive')) }}
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
    </div>
</div>

{{ $products->links('vendor.pagination.bootstrap-4') }}


@endsection
