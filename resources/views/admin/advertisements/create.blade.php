@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.create').' '.trans('admin.advertisement') )
  @section('PageHeading',  trans('admin.create').' '.trans('admin.advertisement') )


  {{-- inclide tinymce script for this advertisements --}}
  @include('admin.jquery.tinymce')


  @foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
  @endforeach







  {!! Form::open(array('url' => '/admin/advertisements/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  <div class="">

    @include('admin.advertisements.form_partial')
  </div>




@endsection
