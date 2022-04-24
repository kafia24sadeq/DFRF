@extends('layouts.app')
@section('content')
  @section('title',  trans('admin.create').' '.trans('admin.permission') )
    @section('PageHeading',  trans('admin.create').' '.trans('admin.permission') )

      @foreach ($errors->all() as $error)
        <p class ="alert alert-danger">{{ $error }}</p>
      @endforeach
      {!! Form::open(array('url' => '/admin/permissions/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
      <div class="">

        @include('admin.permissions.form_partial')
      </div>


    @endsection
