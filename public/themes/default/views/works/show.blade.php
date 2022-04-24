@extends('layouts.master')

{{--@section('breadcrumbs', Breadcrumbs::render('post', $post ))--}}
{{--@section('pageheading', $post->categories->name)--}}

{!! MetaTags($work->name , excerptHelper($work->content,150,''),'') !!}

@section('content')

    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    <div>
                        <p class="card-text news-date" dir="rtl" style="display:flex; margin-top: 18px;"><span></span>{{ $work->date }} </p>
                        <h3 class="story-details-title" style=" font-family: 'TitleFont', sans-serif">{{ $work->name }}</h3>

                        {{--                        @php--}}
                        {{--                            // $post = 0;--}}
                        {{--                                 $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('Y-m-d');--}}
                        {{--                        @endphp--}}

                    </div>
                    {{ Html::image(PhotosDir($work->image_name) ,  '' ,array('style'=>'margin-top:18px','class'=>'img-fluid') ) }}
                </div>
                <div class="row" style="margin-top: 30px;padding-right: 10px; padding-left: 10px;">
                    <p >{!! $work->content  !!}</p>
                </div>

            </div>
            <div class="col-lg-1 col-sm-12"></div>
            <div class="col-lg-4" id="last-course">
                <div class="row divide-md " style="    margin-bottom: 41px;margin-right: 20px;">
                    @if(empty($more))
                        {{ '' }}
                    @else
                        <h3 class="side-title underlined">آخر المشاريع</h3>
                    @endif
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    @forelse($more as $last)
                        <a href="/work/{{ $last->id }}" class="link-black">
                                                <div class="col-lg-1"></div>
                            <div class="col-lg-12 col-sm-12">
                                <div style="display: flex">

                                    <div style=" display: flex;flex-direction: column;justify-content: center;">

                                        <p class="card-text news-date" dir="rtl" style="display:flex;margin-right: 15px; "><span></span>{{ $last->date }} </p>

                                        <h5 class="last-title">{{ $last->name }}</h5>

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


@endsection


