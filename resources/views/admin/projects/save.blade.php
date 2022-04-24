@extends('layouts.app')


@section('content')
@section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.projects') )
@section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.projects') )



<div class="panel panel-default">
    <div class="panel-body">
        {!! trans('admin.projects') !!}
    </div>
</div>

<div class="alert alert-success" role="alert">
  تم الحفظ في نجاح
</div>




@endsection