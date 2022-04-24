@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.create').' '.trans('admin.announcement') )
  @section('PageHeading',  trans('admin.create').' '.trans('admin.announcement') )

{{-- inclide tinymce script for this page --}}
@include('admin.jquery.tinymce')


@foreach ($errors->all() as $error)
  <p class ="alert alert-danger">{{ $error }}</p>
@endforeach


@include('admin.jquery.imageuploader')


{!! Form::open(array('url' => '/admin/announcements/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}

<div class="">
    @include('admin.announcements.form_partial')
</div>




@endsection
