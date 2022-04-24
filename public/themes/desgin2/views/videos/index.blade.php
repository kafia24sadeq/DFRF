@extends('layouts.master')
{{-- @section('title' ,  $posts->categories->name ) --}}
{{-- @section('breadcrumbs', Breadcrumbs::render('posts', $post )) --}}
{{-- @section('pageheading', $post->categories->name) --}}


{!! MetaTags( $videos[0]->videoCategory->name, excerptHelper(settings("metaDescription"),150,''),ThemeHelper()."img/logo.png" , settings("metaKeywors") , settings("websiteName") ) !!}


@section('content')

  <div class="page-header">
     <h1>{!! $videos[0]->videoCategory->name !!}</h1>
  </div>


    <div class="">
      {{ $videos->links('vendor.pagination.bootstrap-4') }}
    </div>



    <div class="row divide-sm">

      @foreach ($videos as $element)
        <div class="col-xs-12 col-sm-12 col-md-12  divide-sm" >


            <div class="col-xs-12 col-sm-12 col-md-6">
              <a href="{!! route('video',$element->id) !!}">
                <div class="resizedrow spec center-block">
                  <img class="img-responsive img-thumbnail resized" src="{!! $element->image !!}" alt="">
                </div>
              </a>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-6">
              <h3 class=""><a href="{!! route('video',$element->id) !!}">{!! $element->title !!}</a></h3>
              <p class="">{!!  \Illuminate\Support\Str::words(strip_tags($element->content),50, '...'); !!}</p>
            </div>


        </div>
      @endforeach
    </div>

          <div class="clearfix"></div>
      <div class="" style="clear:both">
        {{ $videos->links('vendor.pagination.bootstrap-4') }}
      </div>



@endsection
