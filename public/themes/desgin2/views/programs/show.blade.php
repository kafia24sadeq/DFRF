@extends('layouts.master')
@section('content')

@section('breadcrumbs',  Breadcrumbs::render('pages', $program ))

{!! MetaTags( $program->title, excerptHelper( $program->content ,150,''), ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

<style>
    /*
inspi#f8b80b from http://codepen.io/Rowno/pen/Afykb
*/
    .carousel-fade .carousel-inner .item {
        opacity: 0;
        transition-property: opacity;
    }

    .carousel-fade .carousel-inner .active {
        opacity: 1;
    }

    .carousel-fade .carousel-inner .active.left,
    .carousel-fade .carousel-inner .active.right {
        left: 0;
        opacity: 0;
        z-index: 1;
    }

    .carousel-fade .carousel-inner .next.left,
    .carousel-fade .carousel-inner .prev.right {
        opacity: 1;
    }

    .carousel-fade .carousel-control {
        z-index: 2;
    }

    /*
    WHAT IS NEW IN 3.3: "Added transforms to improve carousel performance in modern browsers."
    now override the 3.3 new styles for modern browsers & apply opacity
    */
    @media all and (transform-3d), (-webkit-transform-3d) {
        .carousel-fade .carousel-inner > .item.next,
        .carousel-fade .carousel-inner > .item.active.right {
            opacity: 0;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        .carousel-fade .carousel-inner > .item.prev,
        .carousel-fade .carousel-inner > .item.active.left {
            opacity: 0;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        .carousel-fade .carousel-inner > .item.next.left,
        .carousel-fade .carousel-inner > .item.prev.right,
        .carousel-fade .carousel-inner > .item.active {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }


    #carousel-example-generic .carousel-indicators {
        bottom: 10%;


    }

    #carousel-example-generic .carousel-indicators li {
        width: 20px;
        height: 20px;
        background-color: #fdc513;

    }

    #carousel-example-generic .carousel-indicators .active{
        background-color: #2D312A;

    }
    .carousel-inner>.item>a>img {
        height: 100%;
        width: 100%;
    }

    .program_icon {
        min-height: 70px;
    }
    .program_icon img{
        height: 70px;
        display: table-cell;
        margin: auto;
        margin-bottom: 1em;
    }
</style>

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
                    @forelse($programs_images as $value)
                        <div class="item @if($i==0) active @endif" style="height: 100vh">
                            <a href="{!! $value->link !!}">{{ Html::image(PhotosDir($value->name) ,  $value->content  , array(    'class' => '')) }}</a>
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
    @push("scripts")
        <script>
            $('#carousel-example-generic').carousel();
        </script>
    @endpush
    <div class="border-div">
    </div>
    <div class="circle">
        <img  style="margin-left:auto;margin-right:auto" class="icon img-responsive" src="/img/program_icon{{$program->id}}.png">
    </div>
        <div class="container program-panel">
            <div class="row main-head">
                <div class="col-sm-12 text-center">
                    <h1 class="main-headline"><b>{{$program->title}}</b></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center description-text">
                    <p>{{$program->program_content}}</p>
                </div>
            </div>
            <div class="row row-flex">
                <div class="col-sm-12 col-sm-offset-1">
                    <div class="main-cols col-sm-5 text-center">
                        <div class="col-content">
                            <div class="program_icon">
                                <img class="img-responsive " src="{!! ThemeHelper()."img/3.png" !!}"  alt="">
                            </div>
                            <h3><b>مناطق التدخل</b></h3>
                            <h3><b>{{$program->areas}}</b></h3>
                        </div>
                    </div>
                    <div class="main-cols col-sm-5 text-center">
                        <div class="col-content">
                            <div class="program_icon">
                                <img class="program_icon img-responsive " src="{!! ThemeHelper()."img/4.png" !!}"  alt="">
                            </div>
                            <h3><b>عدد المشاريع</b></h3>
                            <h1 class="numbers"><b>{{$program->projects_count}}</b></h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-flex">
                <div class="col-sm-12 col-sm-offset-1">
                    <div class="main-cols col-sm-5 text-center">
                        <div class="col-content">
                            <div class="program_icon">
                                <img class="program_icon img-responsive " src="{!! ThemeHelper()."img/2.png" !!}"  alt="">
                            </div>
                            <h3><b>الميزانية </b></h3>
                            <h1 class="numbers"><b>{{number_format($program->budget)}}</b><span class="sp-color"><b> $</b></span></h1>
                        </div>
                    </div>
                    <div class="main-cols col-sm-5 text-center">
                        <div class="col-content">
                            <div class="program_icon">
                                <img class="program_icon img-responsive " src="{!! ThemeHelper()."img/1.png" !!}"  alt="">
                            </div>
                            <h3><b>إجمالي المستفيدين</b></h3>
                            <h1 class="numbers"><b>{{$program->total_beneficiaries}}</b></h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-flex">
                <div class="col-sm-12 col-sm-offset-1">
                    <div class="main-cols col-sm-5 text-right">
                        <div class="col-content">
                            <div class="program_icon">
                                <img class="program_icon img-responsive " src="{!! ThemeHelper()."img/5.png" !!}"  alt="">
                            </div>
                            <h3 class="text-center"><b>الأنشطة </b></h3>
                            {!! $program->activities !!}
                        </div>
                    </div>
                    <div class="main-cols col-sm-5 text-right">
                        <div class="col-content">
                            <div class="program_icon">
                                <img class="program_icon img-responsive " src="{!! ThemeHelper()."img/6.png" !!}"  alt="">
                            </div>
                            <h3 class="text-center"><b>أسماء المشاريع</b></h3>
                            <div>
                                {!! $program->projects !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
