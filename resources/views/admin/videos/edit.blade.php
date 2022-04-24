@extends('layouts.app')
@section('content')

  @section('title',  trans('admin.edit').' '.trans('admin.video').' '.$model->title )
  @section('PageHeading',  trans('admin.edit').' '.trans('admin.video').' '.$model->title )

    {!! Form::model($model , array('route' => array('videos.update', $model->id),  'method' => 'PUT', 'class'=>'', 'id'=>'myform' , 'name'=>'myform')) !!}
  @include('admin.videos.form_partial')



@endsection
