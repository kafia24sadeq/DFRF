@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.edit').' '.trans('admin.courses').' '.$model->title )
  @section('PageHeading',  trans('admin.edit').' '.trans('admin.courses').' '.$model->title )

  @include('admin.jquery.tinymce')

@foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
@endforeach

@include('admin.jquery.imageuploader')



  {!! Form::model($model,  array('route' => array('courses.update', $model->id),  'method' => 'PUT' , 'class'=>'', 'id'=>'myform' , 'name'=>'myform')) !!}
  @include('admin.courses.form_partial')





@endsection
