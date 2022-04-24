@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.create').' '.trans('admin.page') )
  @section('PageHeading',  trans('admin.create').' '.trans('admin.page') )


  {{-- inclide tinymce script for this page --}}
  @include('admin.jquery.tinymce')


  @foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
  @endforeach







  {!! Form::open(array('url' => '/admin/pages/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  <div class="">

    @include('admin.pages.form_partial')
  </div>




@endsection
