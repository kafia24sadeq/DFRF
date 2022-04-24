@extends('layouts.master')
@section('content')

@section('breadcrumbs',  Breadcrumbs::render('pages', $page ))

{!! MetaTags( $page->title, excerptHelper( $page->content ,150,''), ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

    @if($page->id == 13)
        <header style="margin-bottom:2em">
            <img class="img-responsive" style="margin: auto;display: block" src="{!! ThemeHelper() !!}img/donate1.png" alt="">
        </header>
    @endif
    @if($page->id == 11)
        <div id="intro2">
            <div class="">
                <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="visible-md visible-lg carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @php $i = 0 ; @endphp
                        @forelse($about_images as $value)
                            <div class="item @if($i==0) active @endif" style="height: 100vh">
                                <a href="{!! $value->link !!}">{{ Html::image(PhotosDir($value->name) ,  $value->content  , array('style' => 'width:100%;height:100%')) }}</a>
                                <div class="carousel-caption">
                                    {!! $value->content !!}
                                </div>
                            </div>
                            @php $i++ ; @endphp
                        @empty

                        @endforelse

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    @endif
        <div class="container">
        @if($page->id != 13)
            <div style="margin-top: 50px">
{{--                <h1 class="mainTitle">{!! $page->title !!}</h1>--}}
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-body">
                @if($page->id == 13)
                    <div class="row">
                        <div class="col-sm-6" style="border-left:1px solid #5A111C ">
                            <h1 class="mainTitle">{!! $page->title !!}</h1>
                            <h3>رسالة للداعمين و الخيرين.</h3>
                            <p>بناء الأنسان صورة نحلم بها ونشد الخطئ نحو تحقيقها لن تكتمل إلا بدعم الجميع ومساندتهم،
                  فساهموا معنا لنحقق الكثير
                            </p>
                            <h4 style="font-weight: bold">تبرع عبر حساباتنا المصرفية</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="/themes/default/img/logo1.png" style="margin-bottom: 1em">
                                    <h4>العمقي للصرافة</h4>
                                    <h4>254028551</h4>
                                </div>
                                <div class="col-sm-6">
                                    <img src="/themes/default/img/ibyemen.png" width="43%" style="margin-bottom: 1em">
                                    <h4>بنك اليمـن الـدولي</h4>
                                    <h4>391931</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h1 class="mainTitle">تطوع معنا.</h1>
                            <p>تنمية الذات تبدأ بالتطوع وتنتهي بالنهضة المجتمعية .. ولتكن بصمتك هنا شارك
                                وتطوع معنا.
                            </p>
                            <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                                <a href="{!! route('volunteer.index') !!}" class="volunteer__button"><img style="display:inline-block;width: 20%;margin-left: 10px;" src="/img/donate33.png">تطوع معنا</a>
                            </div>
                            {{--<a href="" style="display: block; margin: auto" class="">--}}
                                {{--<img class="img-responsive" style="display: block; margin: auto"  width="50%" src="{!! ThemeHelper() !!}img/volunteer.png" alt="">--}}
                            {{--</a>--}}
                        </div>
                    </div>
                @endif
                {!! $page->content !!}

            </div>
        </div>
    </div>

@endsection
