@extends('layouts.app')
  @section('content')
    @section('title',  trans('admin.edit').' '.trans('admin.role').' '.$model->display_name )
    @section('PageHeading',  trans('admin.edit').' '.trans('admin.role').' '.$model->display_name )

        @foreach ($errors->all() as $error)
          <p class ="alert alert-danger">{{ $error }}</p>
        @endforeach

        {!! Form::model($model , array('route' => array('roles.update', $model->id),  'method' => 'PUT', 'class'=>'', 'id'=>'myform' , 'name'=>'myform')) !!}
        <div class="">

          @include('admin.roles.form_partial')
        </div>


  @endsection
