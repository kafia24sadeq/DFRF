@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.create').' '.trans('admin.poll') )
  @section('PageHeading',  trans('admin.create').' '.trans('admin.poll') )


  {{-- inclide tinymce script for this poll --}}
  @include('admin.jquery.tinymce')


  @foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
  @endforeach







  {!! Form::open(array('url' => '/admin/polls/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  <div class="">

    @include('admin.polls.form_partial')
  </div>




@endsection
