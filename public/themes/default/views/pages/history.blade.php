@extends('layouts.master')
@section('content')
    {{--@section('breadcrumbs',  Breadcrumbs::render('pages', $page ))--}}

    {!! MetaTags( 'أهداف الصندوق', '', ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

    <div class="container" style="margin-top: 100px">
        @php
            $history = Systems\Page::where('id',8)->first();

        @endphp
        <div class="row" style="justify-content: center">
            <div class="col-lg-2 text-center">
                <img style="width: 58px;" src="{!! ThemeHelper() !!}/img/icons/history.png" alt="">
                <h5 class="text-center" style="margin-top: 16px">{{ $history->title }}</h5>

            </div>
        </div>
        <div class="row" style="margin-top: 70px">
            <div class="list-menu">
                {!!  $history->content  !!}
            </div>
        </div>

    </div>



@endsection
