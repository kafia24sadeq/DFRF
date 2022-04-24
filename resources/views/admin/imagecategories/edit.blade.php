@extends('layouts.app')
@section('content')

  @section('title',  trans('admin.edit').' '.trans('admin.category').' '.$model->name )
  @section('PageHeading',  trans('admin.edit').' '.trans('admin.category').' '.$model->name )


  {!! Form::model($model, array('route' => array('imagecategories.update', $model->id),  'method' => 'PUT', 'class'=>'', 'id'=>'myform' , 'name'=>'myform')) !!}

  <div class="">

    @include('admin.imagecategories.form_partial')
  </div>

@endsection
