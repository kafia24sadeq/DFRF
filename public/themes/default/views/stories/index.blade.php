@extends('layouts.master')

{!! MetaTags( " قصص النجاح"." | ".settings("websiteName"), "قصص النجاح", ThemeHelper()."img/logo.png", "" ,
settings("websiteName") ) !!}

{{--@endif--}}

@section('content')

    <div class="container" style="margin-top:50px;">

        <div class="row">
            <div class="col-lg-3 col-sm-12"></div>
            <div class="col-lg-6 col-sm-12">
                <div class="about-cover text-center">
                    <p class="page-title">
                        @if(!empty($category->name))
                            {{$category->name}}
                        @else
                            {{  'قصص النجاح' }}
                        @endif
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12"></div>
        </div>
        <div class="paginate">
            {{ $stories->links('vendor.pagination.bootstrap-4') }}
        </div>

    </div>

    <div class="container" style="margin-top: 80px">

        @forelse($stories as $post)
       
            <div class="row space-top-bottom">
                <div class="col-lg-4 col-sm-12 story-imgdiv" >
                    <a href="/success_stories/{{ $post->id }}">  {{ Html::image(PhotosDir($post->image_name) ,  '' ,array('class'=>'story-image') ) }} </a>
                </div>
                <div class="col-lg-8 col-sm-12 d-flex flex-column justify-content-center">
                    <a href="/success_stories/{{ $post->id }}"> <h2 class="story-title divid-sm">{{ $post->title }}</h2></a>

                    <p class="story-content divid-sm">{{ strip_tags(str_limit($post->content,200 ,'...')) }}</p>
                </div>
            </div>
        @empty
            <div class="row">
                <div class="col-lg-12 col-sm-12"
                     style="display: flex; justify-content: center;align-items: center;">
                    <h2 class="text-center">{{ 'لايوجد محتوى حالياً' }}</h2>
                </div>
            </div>
        @endforelse

        <div class="paginate">
            {{ $stories->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>

@endsection

