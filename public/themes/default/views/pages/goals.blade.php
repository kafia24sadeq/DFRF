@extends('layouts.master')
@section('content')
    {{--@section('breadcrumbs',  Breadcrumbs::render('pages', $page ))--}}

    {!! MetaTags( 'أهداف الصندوق', '', ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

    <div class="container" style="margin-top: 100px">
        @php
            $goals = Systems\Page::where('id',7)->first();

        @endphp
        <div class="row" style="justify-content: center">
            <div class="col-lg-2 text-center">
                <img style="width: 58px;" src="{!! ThemeHelper() !!}/img/icons/goals.png" alt="">
                <h5 class="text-center" style="margin-top: 16px">{{ $goals->title }}</h5>

            </div>
        </div>

        <div class="row" style="margin-top: 70px; padding: 15px; justify-content: center">
            <div class="list-menu">
                {!!  $goals->content  !!}
            </div>
        </div>

        </div>



@endsection
