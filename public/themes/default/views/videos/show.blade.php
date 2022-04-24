@extends('layouts.master')
@section('breadcrumbs', Breadcrumbs::render('video', $video ))
@section('title' , $video->title)
@section('pageheading',  $video->videoCategory->name)



{!! MetaTags($video->title, excerptHelper($video->title ,150,''),  "https://www.youtube.com/embed/".$video->vid  ) !!}


@section('content')

  <div class="container" style="margin-top: 70px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{!! $video->videoID !!}" allowfullscreen></iframe>
            </div>
            <div style="text-align:right;padding-top: 36px;">
                <h5 class="mainTitle">{!! $video->title !!}</h5>
            </div>
        </div>
    </div>
  </div>




@endsection
