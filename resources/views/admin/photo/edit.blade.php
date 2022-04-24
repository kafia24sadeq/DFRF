@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.edit').' '.trans('admin.image').' '.$model->title )
  @section('PageHeading',  trans('admin.edit').' '.trans('admin.image').' '.$model->title )

  @include('admin.jquery.tinymce')


@foreach ($errors->all() as $error)
  <p class ="alert alert-danger">{{ $error }}</p>
@endforeach



@include('admin.jquery.imageuploader')

  {!! Form::model($model,  array('route' => array('pictures.update', $model->id),  'method' => 'PUT' , 'class'=>'', 'id'=>'myform' , 'name'=>'myform')) !!}
  @include('admin.photo.form_partial')





@endsection
