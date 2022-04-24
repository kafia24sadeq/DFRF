@extends('layouts.app')
  @section('content')
    @section('title',  trans('admin.edit').' '.trans('admin.user').' '.$model->name )
    @section('PageHeading',  trans('admin.edit').' '.trans('admin.user').' '.$model->name )



<div class="panel panel-default">
    <div class="panel-body">
        {!! link_to_route('password.edit' ,  trans('admin.edit').' '. trans('admin.password'),$model->id, array('class'=>'btn btn-primary')) !!}

    </div>
</div>

        @foreach ($errors->all() as $error)
          <p class ="alert alert-danger">{{ $error }}</p>
        @endforeach
        {!! Form::model($model , array('route' => array('users.update', $model->id),  'method' => 'PUT', 'class'=>'', 'id'=>'myform' , 'name'=>'myform' , "autocomplete"=>"off")) !!}
        <div class="">
          @include('admin.users.form_partial')
        </div>
  @endsection
