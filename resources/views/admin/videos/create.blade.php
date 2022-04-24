@extends('layouts.app')
@section('content')

  @section('title',  trans('admin.create').' '.trans('admin.video') )
  @section('PageHeading',  trans('admin.create').' '.trans('admin.video') )

  {!! Form::open(array('route' => array('videos.store') , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  @include('admin.videos.form_partial')



@endsection
