@extends('layouts.master')
@section('content')



@section('breadcrumbs',  Breadcrumbs::render('pages', $job ))

{!! MetaTags( $job->title." | ".settings("websiteName"), $job->title, $job->getImage() , $job->image, settings("websiteName") ) !!}


@php
    use Carbon\Carbon;
    $today = Carbon::today()->format('Y-m-d');

  function deadline($date){
     return Carbon::parse($date);
 }
@endphp


<style>
    .job-dead{
        padding: 3px;
        margin: 2px 0;
        font-size: 12px;
        color: #c50000;
        font-weight: bold;
    }
</style>
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-lg-11 col-sm-6" style="padding: 10px; background: -moz-linear-gradient(left,  rgba(0,0,0,0) 0%, rgba(239,239,239,0.61) 60%, rgba(239,239,239,1) 99%); /* FF3.6-15 */
        background: -webkit-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(239,239,239,0.61) 60%,rgba(239,239,239,1) 99%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to right,  rgba(0,0,0,0) 0%,rgba(239,239,239,0.61) 60%,rgba(239,239,239,1) 99%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#efefef',GradientType=1 ); /* IE6-9 */
                margin-bottom: 20px;">
            <h1 style="color: #248CC8">{{ $job->title }}</h1>
            @if(deadline($job->deadline) < $today)
                <p class="job-dead">
                    تم إنتهاء هذا الإعلان!
                </p>
            @endif
        </div>

    </div>
</div>

{{--    <div id="subject_font" class="subject_font col-lg-8">--}}
{{--        {!! $job->content  !!}--}}
{{--    </div>--}}

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-6" style="padding: 10px">
            <p>
                {!! $job->content !!}
            </p>
        </div>
    </div>

</div>


@endsection
