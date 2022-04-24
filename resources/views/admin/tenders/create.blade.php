@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.create').' '.trans('admin.tender') )
  @section('PageHeading',  trans('admin.create').' '.trans('admin.tender') )


  {{-- inclide tinymce script for this tenders --}}
  @include('admin.jquery.tinymce')


@foreach ($errors->all() as $error)
  <p class ="alert alert-danger">{{ $error }}</p>
@endforeach


@include('admin.jquery.imageuploader')


{!! Form::open(array('url' => '/admin/tenders/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  <div class="">

    @include('admin.tenders.form_partial')
  </div>


@endsection
