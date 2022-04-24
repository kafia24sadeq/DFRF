@extends('layouts.master')


{{--@section('breadcrumbs',  Breadcrumbs::render('pages', "اﻹعلانات" ))--}}

{!! MetaTags( " التقارير"." | ".settings("websiteName"), " التقارير ", ThemeHelper()."img/logo.png", "" ,settings("websiteName") ) !!}

@section('content')

    <section style="margin-top: 35px;">
        <div class="container">
            <div class="row divide-md title" style="text-align:center; margin-bottom: 70px;">
                <h2 class="mainTitle underlined" style="font-size: 27px !important;color: black !important;">{{$doCat->name}}</h2>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                @foreach ($documents as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12"  style="margin-top: 22px;">
                        <a href="/image/{{ $item->id }}">
                            <div class="box">
                                <div class="image-box">
                                    {{ Html::image(PhotosDir($item->name) ,  $item->caption ,array('style'=>' height:350px') ) }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="paginate">
                {{ $documents->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </section>

    @push('scripts')
        <script src="/OwlCarousel-master/owl-carousel/owl.carousel.js"></script>
        <script>
            $(document).ready(function () {
                $(".owl-partners").owlCarousel({
                    navigation: false,
                    margin: 10,
                    loop: true,
                    autoWidth: true,
                    items: 4,
                    rtl: true,
                    autoPlay: true
                });
            });
        </script>
        <style>
            #partners-slider {
                direction: ltr;
                background: white;
            }

            #companies-slider {
                direction: ltr;
            }

            .owl-partners .item2 {
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


@endsection
