@extends('public.layouts.app')
@section('title' , $page->title)
@section('content')

<div class="page-header">
  <h1>{!! $page->title !!}</h1>
</div>



<div class="panel panel-default">
  <div class="panel-body">
    {!! $page->content !!}
  </div>
</div>




<img src="/photos/CityofAdenYemen-article-header.jpg" width="100%" alt="" />
</div>

@endsection
