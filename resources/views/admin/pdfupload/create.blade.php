@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="" style="">
                @section('title',  trans('admin.upload').' '.trans('admin.file') )
                @section('PageHeading',  trans('admin.upload').' '.trans('admin.file'))
                @include('admin.jquery.fileuploader')
            </div>
        </div>
    </div>
@endsection