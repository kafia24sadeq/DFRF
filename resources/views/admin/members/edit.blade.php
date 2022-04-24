@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.edit').' '.trans('admin.member').' '.$model->name )
  @section('PageHeading',  trans('admin.edit').' '.trans('admin.member').' '.$model->name )

  @include('admin.jquery.tinymce')

@foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
@endforeach

@include('admin.jquery.imageuploader')



  {!! Form::model($model,  array('route' => array('members.update', $model->id),  'method' => 'PUT' , 'class'=>'', 'id'=>'myform' , 'name'=>'myform')) !!}
  @include('admin.members.form_partial')





@endsection
