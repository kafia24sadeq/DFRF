@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.create').' '.trans('admin.program') )
  @section('PageHeading',  trans('admin.create').' '.trans('admin.program') )


  {{-- inclide tinymce script for this program --}}
  @include('admin.jquery.tinymce')


@foreach ($errors->all() as $error)
  <p class ="alert alert-danger">{{ $error }}</p>
@endforeach



@include('admin.jquery.imageuploader')

  {!! Form::open(array('url' => '/admin/programs/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  <div class="">

    @include('admin.programs.form_partial')
  </div>




@endsection
