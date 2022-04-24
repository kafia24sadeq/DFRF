@extends('layouts.app')
  @section('content')

    @section('title',  trans('admin.create').' '.trans('admin.user') )
    @section('PageHeading',  trans('admin.create').' '.trans('admin.user') )

        @foreach ($errors->all() as $error)
          <p class ="alert alert-danger">{{ $error }}</p>
        @endforeach
        {!! Form::open(array('url' => '/admin/users/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform', "autocomplete"=>"off")) !!}
        <div class="">

          @include('admin.users.form_partial')
        </div>

  @endsection
