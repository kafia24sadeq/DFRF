@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.create').' '.trans('admin.job') )
  @section('PageHeading',  trans('admin.create').' '.trans('admin.job') )


  {{-- inclide tinymce script for this jobs --}}
  @include('admin.jquery.tinymce')


  @foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
  @endforeach



@include('admin.jquery.imageuploader')


  {!! Form::open(array('url' => '/admin/jobs/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  <div class="">

    @include('admin.jobs.form_partial')
  </div>




@endsection
