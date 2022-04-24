@extends('layouts.master')

{!! MetaTags( settings('websiteName'), excerptHelper(settings("metaDescription"),150,''),ThemeHelper()."img/logo.png" , settings("metaKeywors") , settings("websiteName") ) !!}


@section('content')

    <div class="error_bg"></div>


    <style>
        .error_bg {
            background-image: url("{!! ThemeHelper() !!}img/404.png");
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-position: 50%;
            display: block;
        }
    </style>
@endsection
