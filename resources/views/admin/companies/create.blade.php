@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.create').' '.trans('admin.company') )
  @section('PageHeading',  trans('admin.create').' '.trans('admin.company') )


  {{-- inclide tinymce script for this jobs --}}
  @include('admin.jquery.tinymce')


  @foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
  @endforeach



@include('admin.jquery.imageuploader')


  {!! Form::open(array('url' => '/admin/companies/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  <div class="">

    @include('admin.companies.form_partial')
  </div>




@endsection
