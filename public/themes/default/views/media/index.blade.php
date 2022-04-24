@extends('layouts.master')


{{--@section('breadcrumbs',  Breadcrumbs::render('pages', "اﻹعلانات" ))--}}

{!! MetaTags( " التقارير السنوية"." | ".settings("websiteName"), " التقارير السنوية", ThemeHelper()."img/logo.png", "" ,settings("websiteName") ) !!}

@section('content')

<section style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-12"></div>
            <div class="col-lg-6 col-sm-12">
                <div class="about-cover text-center">
                    <p class="page-title">{{ trans('public.documents') }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12"></div>
        </div>
    </div>
    <div class="container" style="padding-top: 80px">

        <div class="row">
            @foreach ($documents as $item)
            <div class="col-lg-6 col-sm-12"  style="margin-top: 22px; text-align: center;">
{{--                <a href="/image/{{ $item->id }}" class="doc-link">--}}
                    <div class="box">
                        <div class="image-box" >
                            {{ Html::image(PhotosDir($item->name) ,  $item->caption ,array('style'=>'width:100%;height:500px;') ) }}
                            <div class="doc-title-div" >
                                <h2 class="doc-all-title">{{ $item->caption }}</h2>
                               <div class="doc-download">
                                   <a href="/{{ $item->link }}" class="btn btn-warning btn-green" target="_blank">{{ trans('public.downloadDoc') }} <i class="fa fa-cloud-download"></i></a>
                               </div>
                            </div>
                        </div>
                    </div>
{{--                </a>--}}
            </div>
            @endforeach
        </div>
        <div class="paginate">
            {{ $documents->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</section>



@endsection
