@extends('layouts.master')
{{-- @section('title' ,  $posts->categories->name ) --}}
 {{--@section('breadcrumbs', Breadcrumbs::render('writer', '' ))--}}
 @section('pageheading', trans("public.writers"))


{!! MetaTags($model->question, excerptHelper(settings("metaDescription"),150,''),ThemeHelper()."img/logo.png" , settings("metaKeywors") , settings("websiteName") ) !!}


@section('content')



    <div>   {!!  $model->question !!}</div>


    <!-- Contact form -->
    {!! Form::open(array('route' => array('polls.update' ,  $model->id )   ,'method' => 'PUT', 'id'=>'myform' , 'name'=>'myform')) !!}

    <input type="hidden" id="question" name="question" value=" {!!  $model->id   !!}">

    @for($i = 0 ; $i <= 10 ; $i++)
        <div>
        @if(isset($options[$i]['name']))
        <input type="radio" id="radioButton" name="radio" value="{!!  $options[$i]['id']   !!}">  {!!  $options[$i]['name']   !!}
        </div>
        @endif
    @endfor



    <div class="form-group col-sm-6">
        <button type="submit" value="save" id="save" class="btn btn-block">{!! trans('public.send') !!}</button>
    </div>

    {!! Form::close() !!}
@endsection

@push('scripts')
    @include( 'jquery.ajax')
@endpush




