@extends('layouts.app')

@section('content')
@section('title',  trans('admin.edit').' '.$model->name )
@section('PageHeading',  trans('admin.edit').' '.$model->name )


{{-- inclide tinymce script for this page --}}
@include('admin.jquery.tinymce')


@foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
@endforeach

@include('admin.jquery.imageuploader')


{!! Form::model($model, array('route' => array('works.update', $model->id),  'method' => 'PUT', 'class'=>'', 'id'=>'myform' , 'name'=>'myform')) !!}
@include('admin.works.form_partial')





@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.22/moment.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" ></script>
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" >



@endsection
