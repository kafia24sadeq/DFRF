@extends('layouts.app')
@section('content')

  @section('title',  trans('admin.create').' '.trans('admin.product') )
  @section('PageHeading',  trans('admin.create').' '.trans('admin.product') )

{{-- inclide tinymce script for this program --}}
@include('admin.jquery.tinymce')


@foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
@endforeach



@include('admin.jquery.imageuploader')

  {!! Form::open(array('route' => array('products.store') , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  @include('admin.products.form_partial')

@endsection
