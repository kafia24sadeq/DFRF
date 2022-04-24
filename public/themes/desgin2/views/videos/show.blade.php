@extends('layouts.master')
@section('breadcrumbs', Breadcrumbs::render('video', $video ))
@section('title' , $video->title)
@section('pageheading',  $video->videoCategory->name)



{!! MetaTags($video->title, excerptHelper($video->title ,150,''),  "https://www.youtube.com/embed/".$video->vid  ) !!}


@section('content')
<style media="screen">
.video_container {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 56.25%;
}
.video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>
<div>
  <h1 class="mainTitle">{!! $video->title !!}</h1>
</div>



<div class="panel panel-default">
  <div class="panel-body">
    <div class="video_container">

    <iframe class="video" src="https://www.youtube.com/embed/{!! $video->vid !!}" frameborder="0" allowfullscreen></iframe>
  </div>

    @widget('SocialButtons')

  </div>
</div>




@endsection
