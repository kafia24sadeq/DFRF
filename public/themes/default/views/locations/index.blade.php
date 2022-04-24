@extends('layouts.master')

{!! MetaTags( "أين نعمل"." | ".settings("websiteName"), "أين نعمل", ThemeHelper()."img/logo.png", "" ,
settings("websiteName") ) !!}


@section('content')

<div class="container">
    <div class="row divide-md title" style="margin-bottom: 0;">
        <h2 class="mainTitle underlined">{!! trans('public.aden') !!}</h2>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-lg-12">
                <img src="{{ ThemeHelper()  }}img/aden.png" class="responsive-img" style="width:100%;" >
        </div>
    </div>

</div>

<div class="container">
        <div class="row divide-md title" style="margin-bottom: 0;">
            <h2 class="mainTitle underlined">{!! trans('public.aldalea') !!}</h2>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                    <img src="{{ ThemeHelper()  }}img/aldalaa.png" class="img-responsive" style="width:100%;">
            </div>
        </div>
    
    </div>

@endsection