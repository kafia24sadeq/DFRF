@extends('layouts.app')

@section('content')
  @section('title',  trans('admin.edit').' '.trans('admin.post').' '.$model->title )
  @section('PageHeading',  trans('admin.edit').' '.trans('admin.post').' '.$model->title )


    {{-- inclide tinymce script for this page --}}
    @include('admin.jquery.tinymce')


      @foreach ($errors->all() as $error)
        <p class ="alert alert-danger">{{ $error }}</p>
      @endforeach

      @include('admin.jquery.imageuploader')


      {!! Form::model($model, array('route' => array('posts.update', $model->id),  'method' => 'PUT', 'class'=>'', 'id'=>'myform' , 'name'=>'myform')) !!}
      @include('admin.posts.form_partial')





    @endsection


    @section('scripts')


      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.22/moment.min.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" ></script>
      <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" >

      <script type="text/javascript">
      $(function () {
        $('#datetimepicker1').datetimepicker({
        });
      });
      </script>

    @endsection
