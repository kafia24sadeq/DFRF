@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.edit').' '.trans('admin.advertisement').' '.$model->title )
  @section('PageHeading',  trans('admin.edit').' '.trans('admin.advertisement').' '.$model->title )

  @include('admin.jquery.tinymce')




  {!! Form::model($model,  array('route' => array('advertisements.update', $model->id),  'method' => 'PUT' , 'class'=>'', 'id'=>'myform' , 'name'=>'myform')) !!}
  @include('admin.advertisements.form_partial')





@endsection
