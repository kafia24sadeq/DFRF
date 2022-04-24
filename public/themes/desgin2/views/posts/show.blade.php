@extends('layouts.master')

{{--@section('breadcrumbs', Breadcrumbs::render('post', $post ))--}}
{{--@section('pageheading', $post->categories->name)--}}

{!! MetaTags($post->title , excerptHelper($post->content,150,''),$post->getImage() ) !!}

@section('content')


<style>
    .statement {
        color: orange !important;
    }
</style>
@push('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-viewport-checker/1.8.7/jquery.viewportchecker.min.js"></script>

    <style>
        .hideme {
            opacity: 0;
        }

        .visible {
            opacity: 1;
        }
    </style>

    <script>
        $(document).ready(function () {
            jQuery('.dummy').addClass("hideme").viewportChecker({
                classToAdd: 'visible animated fadeInDown',
                offset: 100
            });

            $('#mainTitle').each(function(idx) {
                var text = $(this).text();
                var words = text.split(" ");
                var html = "";

                for(var i=0; i<words.length; i++) {
                    if(words[i].charAt(0) == "#"){
                        html += '<span style="color:'+ "#eb7f3c" +';">'+words[i]+'</span> ' ;
                    } else
                    html +='<span>'+words[i]+'</span> ';

                }
                $(this).html(html);
            });

            $('#subject_font').each(function(idx) {
                var text = $(this).text();
                var words = text.split(" ");
                var html = "";

                for(var i=0; i<words.length; i++) {
                    if(words[i].charAt(0) == "#"){
                        html += '<a href="/search?search='+words[i].value+'" style="color:'+ "#eb7f3c" +';">'+words[i]+'</a> ' ;
                    } else
                        html +='<span>'+words[i]+'</span> ';

                }
                $(this).html(html);
            });

        });

    </script>

@endpush

<div>
        <!-- End works header -->
            <div class="">
                <h3 class="">{!! $post->introductory !!}  </h3>

                <h2 id="mainTitle" class="mainTitle">{!! RemoveEntity($post->title) !!}</h2>
                <div style="
         /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,efefef+60&0+0,1+99 */
    background: -moz-linear-gradient(left,  rgba(0,0,0,0) 0%, rgba(239,239,239,0.61) 60%, rgba(239,239,239,1) 99%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(239,239,239,0.61) 60%,rgba(239,239,239,1) 99%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right,  rgba(0,0,0,0) 0%,rgba(239,239,239,0.61) 60%,rgba(239,239,239,1) 99%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#efefef',GradientType=1 ); /* IE6-9 */
    padding: 3px;margin: 20px 0; font-size: 15px">
                    <img style="display: inline-block; " width="15px" src="{!! 	ThemeHelper() !!}img/clock2.png"
                         width="60px" alt="الوقت"> {!! Mydate($post->date)  !!}         </div>
            </div>
            <div class="row" style="position: relative;margin-bottom: 20px;margin-left: 10px;">
                <div class="col-sm-8">
                    {!!   Html::image(PhotosDir($post->getImage(), true, [1150,700]) ,  $post->title  , array('width'=>'100%','height'=>'500', 'class' => 'img-responsive full_width_image')) !!}
                </div>
                <div style="

                        -webkit-border-radius: 5px;
                        -moz-border-radius: 5px;
                        border-radius: 5px;

                position: absolute; bottom:20px; right: 20px;   background: rgba(255, 255, 255, 0.8 ); ">
                    @if(!empty($post->caption))
                        <p style="color: #000;

                         padding: 10px"><img style="display: inline-block; " src="{!! 	ThemeHelper() !!}img/logo.png"
                                             width="60px"
                                             alt="{!! Settings::get('websiteName')  !!}"> {!! $post->caption !!}</p>
                    @endif
                </div>

            </div>
            <div style="
                     /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,efefef+60&0+0,1+99 */
    background: -moz-linear-gradient(left,  rgba(0,0,0,0) 0%, rgba(239,239,239,0.61) 60%, rgba(239,239,239,1) 99%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(239,239,239,0.61) 60%,rgba(239,239,239,1) 99%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right,  rgba(0,0,0,0) 0%,rgba(239,239,239,0.61) 60%,rgba(239,239,239,1) 99%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#efefef',GradientType=1 ); /* IE6-9 */
    padding: 10px;
            margin-bottom: 20px;">
                <img style="display: inline-block; " src="{!! 	ThemeHelper() !!}img/logo.png" width="60px"
                     alt="{!! Settings::get('websiteName')  !!}"> <span
                        style="display: inline-block; color: #403D91; margin-right: 10px;"> {!! $post->source !!} </span>
            </div>

    <div id="subject_font" class="subject_font col-lg-8">
        {!! $post->content  !!}
    </div>

    <div style="clear: both "></div>

    {{--<div><a target="_blank" href="{!! route("print", $post->id) !!}"><img width="50px"--}}
                                                                          {{--src="http://www.isupply.ie/wp-content/uploads/2015/01/printIcon_grey11.png"--}}
                                                                          {{--alt=""></a></div>--}}

    @widget('SocialButtons')



    @widget('CommentWidget')

     {{-- more related --}}
        <div class="dummy"
             style="padding-bottom: 10px; overflow: hidden; margin-top: 20px; padding-top: 20px; border-top:1px solid #ccc;  ">

            <div class="widget_wrapper">
                <div class="divide-md" style="text-align:center">
                    <h2>{!! trans('public.recent').' '.trans('public.news') !!}</h2>
                </div>
                @foreach($more as  $key =>  $posts)

                    <div class="col-lg-4 parent">
                        <div style="overflow: hidden">
                            <a href="{!! route('post',$posts->id) !!}">
                                {{ Html::image(PhotosDir($posts->getImage(), true, [200,100]) ,  $posts->title  , array( "width"=>"100%", 'class' => ' child img-responsive')) }}
                            </a>
                        </div>
                        <h3 class="title_link" style=""><a
                                    href="{!! route('post',$posts->id) !!}">{!! $posts->title !!}</a></h3>

                        <p>{!!  excerptHelper($posts->content) !!}</p>

                    </div>

                @endforeach
            </div>
        </div>


</div>
@endsection

<style>
    .subject_font p {
        font-family: Arial !important;
        /* font-family: arial !important; */
    }
</style>