@extends('layouts.app')
@section('content')
@section('title',  trans('admin.edit').' '.trans('admin.password') )
@section('PageHeading',  trans('admin.edit').' '.trans('admin.password') )

@if($model->id == \Illuminate\Support\Facades\Auth::user()->id)

@foreach ($errors->all() as $error)
    <p class ="alert alert-danger">{{ $error }}</p>
@endforeach
{!! Form::open( array('route' => array('password.update', $model->id),  'method' => 'PUT', 'class'=>'', 'id'=>'myform' , 'name'=>'myform' , "autocomplete"=>"off")) !!}
<div class="">
    @include('admin.users.passworedit')
</div>
@else
<div>لا يمكنك تعديل هذا المستخدم</div>

    @endif
@endsection
