@extends('layouts.app')
@section('content')


@section('title',  trans('admin.create').' '.trans('admin.work') )
@section('PageHeading',  trans('admin.create').' '.trans('admin.work') )


{{-- inclide tinymce script for this page --}}

@foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
@endforeach

@include('admin.jquery.tinymce')

@include('admin.jquery.imageuploader')



{!! Form::open(array('url' => '/admin/works/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
<div class="">

    @include('admin.works.form_partial')
</div>


@endsection