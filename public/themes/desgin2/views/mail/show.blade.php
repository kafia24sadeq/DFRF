@extends('layouts.master')
@section('pageheading', trans("public.mail"))

{!! MetaTags( trans("public.mail"), "",ThemeHelper()."img/logo.png" , "" , settings("websiteName") ) !!}
@section('content')

    <div class="container">
        <header style="margin-bottom:2em">
            <img class="img-responsive" style="margin: auto;display: block" src="{!! ThemeHelper() !!}img/contactUs.png" alt="">
        </header>

        <!-- Contact form -->
        {!! Form::open(array('route' => array('mail.store')  , 'id'=>'myform' , 'name'=>'myform')) !!}
        <div class="form-group col-sm-6 fl_wrap">
            <label class="fl_label" for="name">{!! trans("public.name") !!}</label>
            <input type="text" name="name" value="" id="name" class="form-control fl_input">
        </div>
        <div class="form-group col-sm-6 fl_wrap">
            <label class="fl_label" for="email">{!! trans("public.email") !!}</label>
            <input type="text" name="email" value="" id="email" class="form-control fl_input">
        </div>

        <div class="form-group col-sm-12 fl_wrap">
            <label class="fl_label" for="message">{!! trans("public.message") !!}</label>
            <textarea type="text" name="message" value="" id="message" class="form-control fl_input"></textarea>
        </div>
        <div class="form-group col-sm-6">
            <button type="submit" value="save" id="save" class="btn btn-block">{!! trans('public.send') !!}</button>
        </div>
        <div class="form-group col-xs-12">
            <div class="message">
                <div class="divide-xs"></div>
                <div class="alert"></div>
            </div>
        </div>
        {!! Form::close() !!}

    </div>
@endsection

@push('scripts')
@include( 'jquery.ajax')
@endpush
