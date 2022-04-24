@extends('layouts.app')
  @section('content')

    @section('title',  trans('admin.create').' '.trans('admin.roles') )
    @section('PageHeading',  trans('admin.create').' '.trans('admin.roles') )

        @foreach ($errors->all() as $error)
          <p class ="alert alert-danger">{{ $error }}</p>
        @endforeach
        {!! Form::open(array('url' => '/admin/roles/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
        <div class="">
          @include('admin.roles.form_partial')
        </div>


  @endsection
