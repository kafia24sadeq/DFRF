@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.edit').' '.trans('admin.page').' '.$model->title )
  @section('PageHeading',  trans('admin.edit').' '.trans('admin.page').' '.$model->title )

  @include('admin.jquery.tinymce')


  @foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
  @endforeach

  {!! Form::model($model,  array('route' => array('pages.update', $model->id),  'method' => 'PUT' , 'class'=>'', 'id'=>'myform' , 'name'=>'myform')) !!}
  @include('admin.pages.form_partial')





@endsection
