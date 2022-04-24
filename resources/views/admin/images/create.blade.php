@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="" style="">
      @section('title',  trans('admin.create').' '.trans('admin.image') )
      @section('PageHeading',  trans('admin.create').' '.trans('admin.image') )
      @include('admin.jquery.imageuploader')
    </div>
  </div>
</div>
@endsection
