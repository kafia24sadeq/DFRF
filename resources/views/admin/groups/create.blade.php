@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.create').' '.trans('admin.group') )
  @section('PageHeading',  trans('admin.create').' '.trans('admin.group') )


  {{-- inclide tinymce script for this jobs --}}
{{--  @include('admin.jquery.tinymce')--}}


  @foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
  @endforeach



{{--@include('admin.jquery.imageuploader')--}}


  {!! Form::open(array('url' => '/admin/groups/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  <div class="">

    @include('admin.groups.form_partial')
  </div>




@endsection
