@extends('layouts.app')


@section('content')

@section('question',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.polls') )
@section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.polls') )



<style media="screen">
    * {
        margin: 0;
        padding: 0;
    }
</style>

<style media="screen">
    .btn-file {
        position: relative;
        overflow: hidden;
        margin: 10px 0;
    }

    .btn-file input {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
</style>


<h1>{!! $model->question !!}</h1>

@php $count = 0; @endphp


@for($i = 0 ; $i <= 10 ; $i++)
    @php $count += isset($options[$i]['votes'])? $options[$i]['votes']: 0 @endphp
@endfor

<h2> عدد الاصوات {!! $count !!}</h2>

@for($i = 0 ; $i <= 10 ; $i++)
    <!-- title -->

    <div class="">
        {!!  isset($options[$i]['name']) ? $options[$i]['name'] : "" !!} | {!!  isset($options[$i]['votes']) ? $options[$i]['votes'] : "0" !!} صوت
        <div style="width: {!! isset($options[$i]['votes'])?$options[$i]['votes']/$count*100 : 0 !!}%; background: #0000BB; height: 20px "></div>
    </div>
@endfor





@push('scripts')
    @include('admin.jquery.ajax')
@endpush
@endsection
