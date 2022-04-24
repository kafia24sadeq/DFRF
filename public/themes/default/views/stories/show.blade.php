@extends('layouts.master')

{{--@section('breadcrumbs', Breadcrumbs::render('post', $post ))--}}
{{--@section('pageheading', $post->categories->name)--}}

{!! MetaTags($post->title , excerptHelper($post->content,150,''),'') !!}

@section('content')
    <section style="background: #FFEDDC;padding: 1px;">
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-lg-7">
                <div class="row">

                    <div>
                        <p class="card-text text-black" dir="rtl" style="display:flex; margin-top: 18px;padding-right: 34px;">{{ $post->date }} </p>
                        <h3 class="story-details-title" style=" font-family: 'TitleFont', sans-serif">{{ $post->title }}</h3>

{{--                        @php--}}
{{--                            // $post = 0;--}}
{{--                                 $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('Y-m-d');--}}
{{--                        @endphp--}}

                    </div>
                    {{ Html::image(PhotosDir($post->image_name) ,  '' ,array('style'=>'margin-top:18px','class'=>'img-fluid') ) }}
                </div>
                <div class="row" style="margin-top: 30px; padding: 8px">
                    <p>{!! $post->content  !!}</p>
                </div>
                <div class="row">
                    <p class="share">شارك هذه القصة :</p>
                </div>
                <div class="row" id="share-news" style="margin-bottom: 30px">


                    <a href="https://www.facebook.com/sharer/sharer.php?u={!! Request::url() !!} {!! $post->title !!} {!! settings("websiteName") !!}">
                        <p style="margin-right: 10px">
                            <img style="width: 40px" src="{{ ThemeHelper() }}/img/facebook.png" alt="">
                        </p>
                    </a>

                    {{--                                    <a href="https://telegram.me/share/url?url={!! $post->title !!} {!! settings("websiteName") !!} {!! Request::url() !!}'"><p style="margin-right: 10px"><img--}}
                    {{--                                                src="{{ ThemeHelper() }}/img/telegram.png" alt=""></p></a>--}}

                    <a href="https://twitter.com/intent/tweet?hashtags='.$hashtags.'&amp;text={!! Request::url() !!} {!! $post->title !!} {!! settings("websiteName") !!}">
                        <p style="margin-right: 10px">
                            <img style="width: 40px" src="{{ ThemeHelper() }}/img/twitter.png" alt="">
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-lg-1 col-sm-12"></div>
            <div class="col-lg-4" id="last-course">
                <div class="row divide-md " style="    margin-bottom: 41px;margin-right: 20px;">
                    @if(empty($more))
                        {{ '' }}
                        @else
                        <h3 class="side-title underlined">متعلقات</h3>
                    @endif
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    @forelse($more as $last)
                        <a href="/news/{{ $last->id }}" class="link-black">
{{--                    <div class="col-lg-1"></div>--}}
                    <div class="col-lg-12 col-sm-12">
                        <div style="display: flex">

                            <div style=" display: flex;flex-direction: column;justify-content: center;">
{{--                                @php--}}
{{--                                    // $post = 0;--}}
{{--                                         $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $last->created_at)->format('Y-m-d');--}}
{{--                                @endphp--}}
                                <p class="card-text text-black" dir="rtl" style="display:flex;margin-right: 15px; "><span></span>{{ $last->date }} </p>

                                <h5 class="last-title">{{ $last->title }}</h5>

                            </div>
                        </div>
                        <hr>
                    </div>
                        </a>
                        @empty
                        <div class="col-lg-12">
                            <p class="last-title">لايوجد محتوى إضافي حالياً</p>
                        </div>
                        @endforelse
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection


