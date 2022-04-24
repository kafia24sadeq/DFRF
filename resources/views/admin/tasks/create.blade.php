@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.create').' '.trans('admin.tasks') )
  @section('PageHeading',  trans('admin.create').' '.trans('admin.tasks') )





  @foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
  @endforeach







  {!! Form::open(array('url' => '/admin/tasks/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  <div class="">

    @include('admin.tasks.form_partial')
  </div>




@endsection
