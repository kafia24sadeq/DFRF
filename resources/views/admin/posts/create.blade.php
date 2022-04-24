@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.create').' '.trans('admin.post') )
  @section('PageHeading',  trans('admin.create').' '.trans('admin.post') )

  {{-- inclide tinymce script for this page --}}
  @include('admin.jquery.tinymce')


  @foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
  @endforeach


  @include('admin.jquery.imageuploader')





  {!! Form::open(array('url' => '/admin/posts/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  <div class="">

    @include('admin.posts.form_partial')
  </div>




@endsection
