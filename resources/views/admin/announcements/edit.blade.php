@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.edit').' '.trans('admin.announcement').' '.$model->title )
  @section('PageHeading',  trans('admin.edit').' '.trans('admin.announcement').' '.$model->title )

  @include('admin.jquery.tinymce')


  @foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
  @endforeach

  @include('admin.jquery.imageuploader')

  {!! Form::model($model,  array('route' => array('announcements.update', $model->id),  'method' => 'PUT' , 'class'=>'', 'id'=>'myform' , 'name'=>'myform')) !!}
  @include('admin.announcements.form_partial')


@endsection
