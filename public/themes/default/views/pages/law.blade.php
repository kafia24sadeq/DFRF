@extends('layouts.master')
@section('content')
{{--@section('breadcrumbs',  Breadcrumbs::render('pages', $page ))--}}

{!! MetaTags( 'قانون الصندوق', '', ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

    <div class="container" style="margin-top: 100px">
        <div class="row" style="justify-content: center">
            <div class="col-lg-2 text-center">
                @php
                   $laws = Systems\Page::where('id',3)->get();
                @endphp
                @foreach($laws as $law)
                <img style="width: 58px;" src="{!! ThemeHelper() !!}/img/icons/law.png" alt="">
                <h5 class="text-center" style="margin-top: 16px">{{ $law->title }}</h5>

            </div>
        </div>
        <div class="row">
            <div style="display: flex;    margin-top: 18px;">
{{--                <img class="img-fluid" src="{{ ThemeHelper() }}/img/icons/feather.png" alt="">--}}
                <p class="statement">ينص القانون على:</p>
            </div>
            <div class="law" >
                <p style="padding: 5px">
                    {{ strip_tags($law->content)  }}
                </p>
            </div>

        </div>
            @endforeach
    </div>

<style>
    .statement::before{
        content: url("{{ ThemeHelper()  }}/img/icons/feather.png");
    }
</style>

@endsection
