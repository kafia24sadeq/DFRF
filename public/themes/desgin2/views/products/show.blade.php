@extends('layouts.master')
@section('content')

@section('breadcrumbs',  Breadcrumbs::render('pages', $product ))

{!! MetaTags( $product->name, excerptHelper( $product->content ,150,''), ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

<div class="container">

    <div class="main-head">
        <div class="col-sm-8 text-right">
            <h1 class="main-headline sub_colored"><b>{{$product->name}}</b></h1>
            <p class="product_category main_colored"><a href="{!! route('products') !!}">{!! trans('public.products') !!}</a></p>
            <p class="product_category main_colored"><a href="{!! route('pcat',$product->productCategory->id) !!}">{!! $product->productCategory->name !!}</a></p>
        </div>
        <div class="">
        </div>
    </div>
    <div class="row">
        <!-- default start -->
        <div class="product-slider col-sm-6">
            <div id="thumbcarousel" class="carousel slide col-sm-3" data-interval="false">
                <div class="carousel-inner">
                    <div class="item active">
                        <div data-target="#carousel" data-slide-to="0" class="thumb">
                            <img src="{{ PhotosDir($product->image_name , false) }}"
                                 title="The description goes here">
                        </div>
                        @php $i=1; @endphp
                        @foreach($matches[2] as $key => $value)
                            <div data-target="#carousel" data-slide-to="{{ $i  }}" class="thumb">
                                <img src="{{$value}}"
                                     title="The description goes here">
                            </div>
                            @php $i++; @endphp
                        @endforeach
                    </div>
                </div>
                <!-- /carousel-inner -->
                <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> </a> <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i> </a> </div>
            <!-- /thumbcarousel -->
            <div id="carousel" class="carousel slide col-sm-9" data-ride="carousel">
                <div class="carousel-inner">
                    @php $i=0; @endphp
                    <div class="item active">
                        <img src="{{ PhotosDir($product->image_name , false) }}"
                             title="The description goes here">
                    </div>
                    @foreach($matches[2] as $key => $value)
                        <div class="item">
                            <img src="{{$value}}"
                                 title="The description goes here">
                        </div>
                        @php $i++; @endphp
                    @endforeach
                </div>
            </div>
        </div>
        <!-- default end -->
        <div class="col-sm-6 product_details">
            <div class="col-sm-12 text-right">
                <h3>{{ trans('public.price') }} : <span class="product_price">{{ $product->price}}</span> </h3>
                @if(!empty($product->warranty))
                    <h3 class="boxed">
                        <img src="{{ ThemeHelper()  }}/img/save.png" width="10%">
                        ضمان لمدة {{$product->warranty}}</h3>

                @endif
                @if(!empty($product->discount))
                    <h3 class="boxed">
                        <img src="{{ ThemeHelper()  }}/img/offer.png" width="10%">
                        {{$product->discount}}</h3>
                @endif
                {{--@widget('ShareWidget')--}}
                <div class="share-icons hidden-xs divide-xs" role="navigation" style="">
                    <h3>{{ trans('public.shareProduct') }}</h3>
                    <div class="divide-sm" style="margin-top: 10px;">
                        <div class="row">
                            <div class="share-social-icons" >
                                <ul class="share-icons">
                                    <li>
                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={!! Request::url() !!} {!! $product->name !!} {!! settings("websiteName") !!}" class="social-icon"> <i class="icon-facebook1"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/intent/tweet?hashtags='.$hashtags.'&amp;text={!! Request::url() !!} {!! $product->name !!} {!! settings("websiteName") !!}" class="social-icon"> <i class="icon-twitter1"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="whatsapp://send?text={!! $product->name !!} {!! settings("websiteName") !!} {!! Request::url() !!}" class="social-icon"> <i class="icon-whatsapp1"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://telegram.me/share/url?url={!! $product->name !!} {!! settings("websiteName") !!} {!! Request::url() !!}" class="social-icon"> <i class="icon-telegram1"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="mailto:?subject={!! $product->name !!}&body={!! $product->name !!} {!! settings("websiteName") !!} {!! Request::url() !!}" class="social-icon"> <i class="icon-envelop"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{!! route( 'productprint' , $product->id) !!}" class="social-icon"><i class="icon-printer"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://plus.google.com/share?url={!! Request::url() !!} {!! $product->name !!} {!! settings("websiteName") !!}" class="social-icon"> <i class="icon-google-plus1"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <style>

                    </style>
                </div>

                <div class="share-icons-mobile hidden-lg hidden-md divide-xs" role="navigation" style="">
                    <div class="" style="margin-top: 10px;">
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        {{--<div class="addthis_inline_share_toolbox_0zva"></div>--}}
                        <div class="row">
                            <div class="share-social-icons" >
                                <ul class="share-icons">
                                    <li>
                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={!! Request::url() !!} {!! $product->name !!} {!! settings("websiteName") !!}" class="social-icon"> <i class="icon-facebook1"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/intent/tweet?hashtags='.$hashtags.'&amp;text={!! Request::url() !!} {!! $product->name !!} {!! settings("websiteName") !!}" class="social-icon"> <i class="icon-twitter1"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="whatsapp://send?text={!! $product->name !!} {!! settings("websiteName") !!} {!! Request::url() !!}" class="social-icon"> <i class="icon-whatsapp1"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://telegram.me/share/url?url={!! $product->name !!} {!! settings("websiteName") !!} {!! Request::url() !!}" class="social-icon"> <i class="icon-telegram1"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="mailto:?subject={!! $product->name !!}&body={!! $product->name !!} {!! settings("websiteName") !!} {!! Request::url() !!}" class="social-icon"> <i class="icon-envelop"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{!! route( 'productprint' , $product->id) !!}" class="social-icon"><i class="icon-printer"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://plus.google.com/share?url={!! Request::url() !!} {!! $product->name !!} {!! settings("websiteName") !!}" class="social-icon"> <i class="icon-google-plus1"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <style>

                    </style>
                </div>
            </div>
        </div>
    </div>
    <div class="row product_content divide-md">
        <div class="col-sm-8">
            <h2 class="main_colored">{{ trans('public.details') }}</h2>
            <p class="">{!!  $product->content !!}</p>
        </div>
        <div class="col-sm-4">
            <img src="{{ PhotosDir($product->image_name) }}" width="100%">
        </div>
    </div>
    <div class="divide-md">
        <h2 class="sub_colored">{{ trans('public.similarProducts') }}</h2>
        @foreach($more as  $key =>  $product)
            <div class="col-sm-4 divide-sm parent">
                <div class="bordered" style="overflow: hidden; padding: 1em;">
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
        @endforeach
    </div>
</div>
@endsection
<style>
</style>
{{--@push('scripts')--}}
    {{--<script src='https://unpkg.com/xzoom/dist/xzoom.min.js'></script>--}}
    {{--<script src='https://hammerjs.github.io/dist/hammer.min.js'></script>--}}
    {{--<script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js'></script>--}}
    {{--<script>--}}
        {{--(function ($) {--}}
            {{--$(document).ready(function() {--}}
                {{--$('.xzoom, .xzoom-gallery').xzoom({zoomWidth: 400, title: true, tint: '#333', Xoffset: 15});--}}
                {{--$('.xzoom2, .xzoom-gallery2').xzoom({position: '#xzoom2-id', tint: '#ffa200'});--}}
                {{--$('.xzoom3, .xzoom-gallery3').xzoom({position: 'lens', lensShape: 'circle', sourceClass: 'xzoom-hidden'});--}}
                {{--$('.xzoom4, .xzoom-gallery4').xzoom({tint: '#006699', Xoffset: 15});--}}
                {{--$('.xzoom5, .xzoom-gallery5').xzoom({tint: '#006699', Xoffset: 15});--}}

                {{--//Integration with hammer.js--}}
                {{--var isTouchSupported = 'ontouchstart' in window;--}}

                {{--if (isTouchSupported) {--}}
                    {{--//If touch device--}}
                    {{--$('.xzoom, .xzoom2, .xzoom3, .xzoom4, .xzoom5').each(function(){--}}
                        {{--var xzoom = $(this).data('xzoom');--}}
                        {{--xzoom.eventunbind();--}}
                    {{--});--}}

                    {{--$('.xzoom, .xzoom2, .xzoom3').each(function() {--}}
                        {{--var xzoom = $(this).data('xzoom');--}}
                        {{--$(this).hammer().on("tap", function(event) {--}}
                            {{--event.pageX = event.gesture.center.pageX;--}}
                            {{--event.pageY = event.gesture.center.pageY;--}}
                            {{--var s = 1, ls;--}}

                            {{--xzoom.eventmove = function(element) {--}}
                                {{--element.hammer().on('drag', function(event) {--}}
                                    {{--event.pageX = event.gesture.center.pageX;--}}
                                    {{--event.pageY = event.gesture.center.pageY;--}}
                                    {{--xzoom.movezoom(event);--}}
                                    {{--event.gesture.preventDefault();--}}
                                {{--});--}}
                            {{--}--}}

                            {{--xzoom.eventleave = function(element) {--}}
                                {{--element.hammer().on('tap', function(event) {--}}
                                    {{--xzoom.closezoom();--}}
                                {{--});--}}
                            {{--}--}}
                            {{--xzoom.openzoom(event);--}}
                        {{--});--}}
                    {{--});--}}

                    {{--$('.xzoom4').each(function() {--}}
                        {{--var xzoom = $(this).data('xzoom');--}}
                        {{--$(this).hammer().on("tap", function(event) {--}}
                            {{--event.pageX = event.gesture.center.pageX;--}}
                            {{--event.pageY = event.gesture.center.pageY;--}}
                            {{--var s = 1, ls;--}}

                            {{--xzoom.eventmove = function(element) {--}}
                                {{--element.hammer().on('drag', function(event) {--}}
                                    {{--event.pageX = event.gesture.center.pageX;--}}
                                    {{--event.pageY = event.gesture.center.pageY;--}}
                                    {{--xzoom.movezoom(event);--}}
                                    {{--event.gesture.preventDefault();--}}
                                {{--});--}}
                            {{--}--}}

                            {{--var counter = 0;--}}
                            {{--xzoom.eventclick = function(element) {--}}
                                {{--element.hammer().on('tap', function() {--}}
                                    {{--counter++;--}}
                                    {{--if (counter == 1) setTimeout(openfancy,300);--}}
                                    {{--event.gesture.preventDefault();--}}
                                {{--});--}}
                            {{--}--}}

                            {{--function openfancy() {--}}
                                {{--if (counter == 2) {--}}
                                    {{--xzoom.closezoom();--}}
                                    {{--$.fancybox.open(xzoom.gallery().cgallery);--}}
                                {{--} else {--}}
                                    {{--xzoom.closezoom();--}}
                                {{--}--}}
                                {{--counter = 0;--}}
                            {{--}--}}
                            {{--xzoom.openzoom(event);--}}
                        {{--});--}}
                    {{--});--}}

                    {{--$('.xzoom5').each(function() {--}}
                        {{--var xzoom = $(this).data('xzoom');--}}
                        {{--$(this).hammer().on("tap", function(event) {--}}
                            {{--event.pageX = event.gesture.center.pageX;--}}
                            {{--event.pageY = event.gesture.center.pageY;--}}
                            {{--var s = 1, ls;--}}

                            {{--xzoom.eventmove = function(element) {--}}
                                {{--element.hammer().on('drag', function(event) {--}}
                                    {{--event.pageX = event.gesture.center.pageX;--}}
                                    {{--event.pageY = event.gesture.center.pageY;--}}
                                    {{--xzoom.movezoom(event);--}}
                                    {{--event.gesture.preventDefault();--}}
                                {{--});--}}
                            {{--}--}}

                            {{--var counter = 0;--}}
                            {{--xzoom.eventclick = function(element) {--}}
                                {{--element.hammer().on('tap', function() {--}}
                                    {{--counter++;--}}
                                    {{--if (counter == 1) setTimeout(openmagnific,300);--}}
                                    {{--event.gesture.preventDefault();--}}
                                {{--});--}}
                            {{--}--}}

                            {{--function openmagnific() {--}}
                                {{--if (counter == 2) {--}}
                                    {{--xzoom.closezoom();--}}
                                    {{--var gallery = xzoom.gallery().cgallery;--}}
                                    {{--var i, images = new Array();--}}
                                    {{--for (i in gallery) {--}}
                                        {{--images[i] = {src: gallery[i]};--}}
                                    {{--}--}}
                                    {{--$.magnificPopup.open({items: images, type:'image', gallery: {enabled: true}});--}}
                                {{--} else {--}}
                                    {{--xzoom.closezoom();--}}
                                {{--}--}}
                                {{--counter = 0;--}}
                            {{--}--}}
                            {{--xzoom.openzoom(event);--}}
                        {{--});--}}
                    {{--});--}}

                {{--} else {--}}
                    {{--//If not touch device--}}

                    {{--//Integration with fancybox plugin--}}
                    {{--$('#xzoom-fancy').bind('click', function(event) {--}}
                        {{--var xzoom = $(this).data('xzoom');--}}
                        {{--xzoom.closezoom();--}}
                        {{--$.fancybox.open(xzoom.gallery().cgallery, {padding: 0, helpers: {overlay: {locked: false}}});--}}
                        {{--event.preventDefault();--}}
                    {{--});--}}

                    {{--//Integration with magnific popup plugin--}}
                    {{--$('#xzoom-magnific').bind('click', function(event) {--}}
                        {{--var xzoom = $(this).data('xzoom');--}}
                        {{--xzoom.closezoom();--}}
                        {{--var gallery = xzoom.gallery().cgallery;--}}
                        {{--var i, images = new Array();--}}
                        {{--for (i in gallery) {--}}
                            {{--images[i] = {src: gallery[i]};--}}
                        {{--}--}}
                        {{--$.magnificPopup.open({items: images, type:'image', gallery: {enabled: true}});--}}
                        {{--event.preventDefault();--}}
                    {{--});--}}
                {{--}--}}
            {{--});--}}
        {{--})(jQuery);--}}
    {{--</script>--}}
{{--@endpush--}}