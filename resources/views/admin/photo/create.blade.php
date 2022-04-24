@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.create').' '.trans('admin.image') )
  @section('PageHeading',  trans('admin.create').' '.trans('admin.image') )


  {{-- inclide tinymce script for this program --}}
  @include('admin.jquery.tinymce')


@foreach ($errors->all() as $error)
  <p class ="alert alert-danger">{{ $error }}</p>
@endforeach



@include('admin.jquery.imageuploader')

  {!! Form::open(array('url' => '/admin/pictures/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  <div class="">

    @include('admin.photo.form_partial')
  </div>




@endsection
