@extends('layouts.master')

{!! MetaTags( settings('websiteName'), excerptHelper(settings("metaDescription"),150,''),ThemeHelper()."img/logo.png" , settings("metaKeywors") , settings("websiteName") ) !!}


@push('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-viewport-checker/1.8.7/jquery.viewportchecker.min.js"></script>

{{--<style>--}}
    {{--.hideme{--}}
        {{--opacity:0;--}}
    {{--}--}}
    {{--.visible{--}}
        {{--opacity:1;--}}
    {{--}--}}
{{--</style>--}}


<script>
    $(document).ready(function(){
        jQuery('.dummy').addClass("hideme").viewportChecker({
            classToAdd: 'visible animated fadeInRight',
            offset: 100
        });


    });


</script>

@endpush

@section('content')
    <style>
        /*
inspi#f8b80b from http://codepen.io/Rowno/pen/Afykb
*/
        .carousel-fade .carousel-inner .item {
            opacity: 0;
            transition-property: opacity;
        }

        .carousel-fade .carousel-inner .active {
            opacity: 1;
        }

        .carousel-fade .carousel-inner .active.left,
        .carousel-fade .carousel-inner .active.right {
            left: 0;
            opacity: 0;
            z-index: 1;
        }

        .carousel-fade .carousel-inner .next.left,
        .carousel-fade .carousel-inner .prev.right {
            opacity: 1;
        }

        .carousel-fade .carousel-control {
            z-index: 2;
        }

        /*
        WHAT IS NEW IN 3.3: "Added transforms to improve carousel performance in modern browsers."
        now override the 3.3 new styles for modern browsers & apply opacity
        */
        @media all and (transform-3d), (-webkit-transform-3d) {
            .carousel-fade .carousel-inner > .item.next,
            .carousel-fade .carousel-inner > .item.active.right {
                opacity: 0;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .carousel-fade .carousel-inner > .item.prev,
            .carousel-fade .carousel-inner > .item.active.left {
                opacity: 0;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .carousel-fade .carousel-inner > .item.next.left,
            .carousel-fade .carousel-inner > .item.prev.right,
            .carousel-fade .carousel-inner > .item.active {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }


        #carousel-example-generic .carousel-indicators {
            bottom: 10%;


        }

        #carousel-example-generic .carousel-indicators li {
            width: 20px;
            height: 20px;
            background-color: #fff;
            border: 3px solid #fff;
        }

        #carousel-example-generic .carousel-indicators .active{
            background-color: #A7CE38;
            padding: 3px;

        }
        .carousel-inner>.item>a>img {
            height: 100%;
            width: 100%;
        }
    </style>

    <!-- Start intro -->
    <div id="intro2">
        <div class="container-fluid">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators -->
                <ol class="visible-md visible-lg carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    {{--<li data-target="#carousel-example-generic" data-slide-to="4"></li>--}}
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @php $i = 0 ; @endphp
                    @foreach($intro as $value)
                        <div class="item @if($i==0) active @endif" style="height: 550px">
                            <a href="{!! $value->link !!}">{{ Html::image(PhotosDir($value->name) ,  $value->content  , array(    'class' => '')) }}</a>
                            <div class="carousel-caption">
                                {!! $value->content !!}
                            </div>
                        </div>
                        @php $i++ ; @endphp
                    @endforeach
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


    <div style="clear: both"></div>

    @push("scripts")
    <script>
        $('#carousel-example-generic').carousel();
    </script>
    @endpush

    {{--@widget('NewsTicker')--}}

    <section id="about" class="white-bg">
        <div class="container">
            <div class="row divide-md">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 divide-sm text-center">
                    <h2 class="mainTitle">{!! trans('public.about') !!}</h2>
                    <hr class="title-divider">
                    <p class="divide-xs"> {{ excerptHelper($about->content , 200) }} </p>
                    <a class="moreAbout_btn" href="{{ route('pages', 1)  }}">
                        المزيد
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row text-center">
                <div class="col-sm-12">
                    <div class="col-sm-4 divide-sm wow slideInUp" data-wow-duration="0.3s">
                        <div class="">
                            <div class="about_img">
                                <img src="{!! themehelper() !!}img/icons/Logistic.png" width="200px" alt="">
                            </div>
                            <div class="divide-xs"></div>
                            <h3>خدمات لوجستية</h3>
                            <p class="smoke">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 divide-sm wow slideInUp" data-wow-duration="0.5s">
                        <div class="">
                            <div class="about_img">
                                <img src="{!! themehelper() !!}img/icons/Feasibility-study.png" width="200px" alt="">
                            </div>
                            <div class="divide-xs"></div>
                            <h3>دراسة جدوى للمشاريع الصحية</h3>
                            <p class="smoke">دراسة جدوى للمشاريع الصحية</p>
                        </div>
                    </div>
                    <div class="col-sm-4 divide-sm wow slideInUp" data-wow-duration="0.9s">
                        <div class="">
                            <div class="about_img">
                                <img src="{!! themehelper() !!}img/icons/finance.png" width="200px" alt="">
                            </div>
                            <div class="divide-xs"></div>
                            <h3>تزويد</h3>
                            <p class="smoke">تمويل المستشفيات والصيدليات والمنشئات الصحيه والمنظمات الدوليه والإنسانية بكافه اختباجاتها</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start works section -->

    <section id="works" class="white-bg">
        <div class="container">
            <div class="row divide-md">
                <div class="col-md-6 col-sm-8 divide-sm text-right">
                <a href="{{ route('works')  }}"><h2 class="mainTitle underlined">{!! trans('public.ourWorks') !!}</h2>
                </a>
                    {{--<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.--}}
                    {{--</p>--}}
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row text-center">
                <div class="col-sm-12">
                    @php $time = 0.3 @endphp
                    @foreach($works as  $work)
                        <div class="work_cell col-sm-4 divide-sm ">
                            <div class="wow fadeIn" data-wow-duration="{{$time}}s">
                                <a class="work_img" href="{{ route('work', $work->id)  }}">
                                    {{ Html::image(PhotosDir($work->image_name) ,  $work->caption  , array(    'class' => '')) }}</a>
                                </a>
                                <div class="divide-xs"></div>
                                <a href="{{ route('work', $work->id)  }}" >
                                    <h3 class="work_title text-right">{{$work->name}}</h3>
                                </a>
                                {{--<p class="smoke">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى.</p>--}}
                            </div>
                        </div>
                        @php $time += 0.3 @endphp

                    @endforeach
                </div>
            </div>
            <div class="row divide-xs">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 divide-sm text-center">
                    <a class="moreAbout_btn" href="{{ route('works')  }}">
                        المزيد
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>

    <!-- End works section -->

    <!-- End products section -->
    <section id="products" class="white-bg">
        <div class="container">
            <div class="row divide-md">
                <div class="col-md-6 col-sm-8 divide-sm text-right">
                    <a href="{{ route('products')  }}">
                        <h2 class="mainTitle underlined">{!! trans('public.products') !!}</h2>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row text-center">
                <div class="col-sm-12">
                    @php $j = 0 ; @endphp
                    @foreach($products as  $product)
                        @if($j ==0)
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="product_cell" style="padding:15px">
                                            <div class="wow fadeInRight">
                                        <a class="product_img1" href="{{ route('product', $product->id)  }}">
                                            {{ Html::image(PhotosDir($product->image_name) ,  $product->caption  , array(    'class' => '')) }}</a>
                                        </a>
                                        <div class="divide-xs"></div>
                                        <div class="product_text">
                                            <a href="{{ route('product', $product->id)  }}" >
                                                <h3 class="product_title text-right">{{$product->name}}</h3>
                                            </a>
                                            <p class="product_desc text-center">{{ excerptHelper($product->content , 65)  }}</p>
                                            <div class="divide-xs"></div>
                                            <div class="product_footer">
                                                <p class="pull-right">{{ trans('public.price') }} : {{ $product->price}} </p>
                                                <a class="pull-left" href="{{ route('product', $product->id)  }}">{{ trans('public.more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-12 @if($j == 2) pro_margin_top @endif">
                                        <div class="product_cell">
                                            <div class="wow fadeInLeft">
                                                <a class="product_img col-sm-5 col-sm-push-7" href="{{ route('product', $product->id)  }}">
                                                    {{ Html::image(PhotosDir($product->image_name) ,  $product->caption  , array(    'class' => '')) }}</a>
                                                </a>
                                                <div class="product_text col-sm-7 col-sm-pull-5 margin_top">
                                                    <a href="{{ route('product', $product->id)  }}" >
                                                        <h3 class="product_title text-right">{{$product->name}}</h3>
                                                    </a>
                                                    <p class="product_desc text-center">{{ excerptHelper($product->content , 50)  }}</p>
                                                    <div class="product_footer">
                                                        <p class="pull-right">{{ trans('public.price') }} : {{ $product->price}} </p>
                                                        <a class="pull-left" href="{{ route('product', $product->id)  }}">{{ trans('public.more') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @php $j++; @endphp
                    @endforeach
                </div>
            </div>
            <div class="row divide-xs">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 divide-sm text-center">
                    <a class="moreAbout_btn" href="{{ route('products')  }}">
                        المزيد
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script src="/OwlCarousel-master/owl-carousel/owl.carousel.js"></script>

    <script>
        $(document).ready(function() {
            $(".owl-partners").owlCarousel({
                navigation:false,
                margin:10,
                loop:true,
                autoWidth:true,
                items:3,
                rtl:true,
                autoPlay:true
            });
        });
    </script>
    <style>
         #partners-slider {
             direction:ltr;
         }
        .owl-partners .item2{
            padding: 30px 0px;
            /*height : 300px;*/
            margin: 10px;
            color: #FFF;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .owl-partners .item2 img {
            margin: 0 auto;
            display: block;
        }
    </style>

    @endpush

    <!-- Start partenrs section -->
    <div id="partners" class="white-bg">
        <div class="container">
            <div class="row divide-sm">
                <div class="col-md-6 col-sm-8 divide-sm text-right">
                    <h2 class="mainTitle underlined">{!! trans('public.partners') !!}</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="partners-slider" class="blue-bg">
        <div class="owl-carousel owl-partners owl-theme divide-sm" style="display: table">
            @foreach($partners as $element)
                <div class="item2 wow fadeIn" >
                    {{ Html::image(PhotosDir($element->name) ,"", array("width"=>"200px" , "style"=> "max-height:200px " )) }}
                </div>
            @endforeach
        </div>

    </div>

@endsection



