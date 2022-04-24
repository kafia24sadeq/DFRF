@extends('layouts.master')
@section('content')

{{--@section('breadcrumbs',  Breadcrumbs::render('pages', $program ))--}}

{!! MetaTags( "البرامج", ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

<div class="row" style="margin-bottom: 2em">
    <div class="col-sm-6 col-xs-12 parent dummy">
        <div style="position: relative;">
        </div>
        {{--<a href="{!! route("program", $economic->id) !!}">--}}
            {{--<div class="child" >--}}
                {{--<a href="{!! route("program", $economic->id) !!}"><img  style="width:100%;height: 347px;" class="img-responsive fadeit" src="{!! PhotosDir($economic_image->name) !!}" alt=""></a>--}}
                {{--<a href="{!! route("program", $economic->id) !!}">--}}
                    {{--<div  style="position: absolute; top: 0; left: 0; bottom: 0; right: 0;--}}
                            {{--width:50%;margin:auto; -webkit-filter: drop-shadow(8px 8px 10px black); /* Safari */ filter: drop-shadow(8px 8px 10px black); opacity: .8; background: rgba(244, 188, 48, 0.83); height: 40%; text-align:center; vertical-align:middle;color: #fff; font-weight: bold; ">--}}
                        {{--<div style="position: relative; margin: auto;display: table;height: 100%; margin: auto">--}}
                            {{--<div style="display: table-cell;display: table-cell;display: table-cell; vertical-align: middle;">--}}
                                {{--<div style="">{{ Html::image(ThemeHelper()."img/hammer.png" , "", array("width"=>"20%" ,"style"=>"text-align:center;")) }}</div>--}}
                                {{--<div style="color:#000; font-weight: bold;padding: 4px;">{!! $economic->title !!}</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</a>--}}
    </div>
    <div class="col-sm-6 col-xs-12 parent dummy">
        <div style="position: relative;">
        </div>
        {{--<a href="{!! route("program", $education->id) !!}">--}}
            {{--<div class="child" >--}}
                {{--<a href="{!! route("program", $education->id) !!}"><img  style="width:100%;height: 347px;"  class="img-responsive fadeit" src="{!! PhotosDir($education_image->name) !!}" alt=""></a>--}}
                {{--<a href="{!! route("program", $education->id) !!}">--}}
                    {{--<div  style="position: absolute; top: 0; left: 0; bottom: 0; right: 0;--}}
                            {{--width:50%;margin:auto; -webkit-filter: drop-shadow(8px 8px 10px black); /* Safari */ filter: drop-shadow(8px 8px 10px black); opacity: .8; background: rgba(244, 188, 48, 0.83); height: 40%; text-align:center; vertical-align:middle;color: #fff; font-weight: bold; ">--}}
                        {{--<div style="position: relative; margin: auto;display: table;height: 100%; margin: auto">--}}
                            {{--<div style="display: table-cell;display: table-cell;display: table-cell; vertical-align: middle;">--}}
                                {{--<div style="">{{ Html::image(ThemeHelper()."img/book.png" , "", array("width"=>"20%" ,"style"=>"text-align:center;")) }}</div>--}}
                                {{--<div style="color:#000; font-weight: bold;padding: 4px">{!! $education->title !!}</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</a>--}}
    </div>
</div>
<div class="row" style="margin-bottom: 2em">
    <div class="col-sm-6 col-xs-12 parent dummy">
        <div style="position: relative;">
        </div>
        {{--<a href="{!! route("program", $wash->id) !!}">--}}
            {{--<div class="child" >--}}
                {{--<a href="{!! route("program", $wash->id) !!}"><img  style="width:100%;height: 347px;"  class="img-responsive fadeit" src="{!! PhotosDir($wash_image->name) !!}" alt=""></a>--}}
                {{--<a href="{!! route("program", $wash->id) !!}">--}}
                    {{--<div  style="position: absolute; top: 0; left: 0; bottom: 0; right: 0;--}}
                            {{--width:50%;margin:auto; -webkit-filter: drop-shadow(8px 8px 10px black); /* Safari */ filter: drop-shadow(8px 8px 10px black); opacity: .8; background: rgba(244, 188, 48, 0.83); height: 40%; text-align:center; vertical-align:middle;color: #fff; font-weight: bold; ">--}}
                        {{--<div style="position: relative; margin: auto;display: table;height: 100%; margin: auto">--}}
                            {{--<div style="display: table-cell;display: table-cell;display: table-cell; vertical-align: middle;">--}}
                                {{--<div style="">{{ Html::image(ThemeHelper()."img/water.png" , "", array("width"=>"20%" ,"style"=>"text-align:center;")) }}</div>--}}
                                {{--<div style="color:#000; font-weight: bold;padding: 4px">{!! $wash->title !!}</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</a>--}}
    </div>
    <div class="col-sm-6 col-xs-12 parent dummy">

        {{--<a href="{!! route("program", $food->id) !!}">--}}
            {{--<div class="child" >--}}
                {{--<a href="{!! route("program", $food->id) !!}"><img  style="width:100%;height: 347px;"  class="img-responsive fadeit" src="{!! PhotosDir($food_image->name) !!}" alt=""></a>--}}
                {{--<a href="{!! route("program", $food->id) !!}">--}}
                    {{--<div  style="position: absolute; top: 0; left: 0; bottom: 0; right: 0;--}}
                            {{--width:50%;margin:auto; -webkit-filter: drop-shadow(8px 8px 10px black); /* Safari */ filter: drop-shadow(8px 8px 10px black); opacity: .8; background: rgba(244, 188, 48, 0.83); height: 40%; text-align:center; vertical-align:middle;color: #fff; font-weight: bold; ">--}}
                        {{--<div style="position: relative; margin: auto;display: table;height: 100%; margin: auto">--}}
                            {{--<div style="display: table-cell;display: table-cell;display: table-cell; vertical-align: middle;">--}}
                                {{--<div style="">{{ Html::image(ThemeHelper()."img/Wheat.png" , "", array("width"=>"20%" ,"style"=>"text-align:center;")) }}</div>--}}
                                {{--<div style="color:#000; font-weight: bold;padding: 4px">{!! $food->title !!}</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</a>--}}
    </div>
</div>
<div class="row" style="margin-bottom: 2em">
    <div class="col-sm-6 col-xs-12 col-sm-offset-3 parent dummy">

        {{--<a href="{!! route("program", $lodging->id) !!}">--}}
            {{--<div class="child" >--}}
                {{--<a href="{!! route("program", $lodging->id) !!}"><img  style="width:100%;height: 347px;"  class="img-responsive fadeit" src="{!! PhotosDir($lodging_image->name) !!}" alt=""></a>--}}
                {{--<a href="{!! route("program", $lodging->id) !!}">--}}
                    {{--<div  style="position: absolute; top: 0; left: 0; bottom: 0; right: 0;--}}
                            {{--width:50%;margin:auto; -webkit-filter: drop-shadow(8px 8px 10px black); /* Safari */ filter: drop-shadow(8px 8px 10px black); opacity: .8; background: rgba(244, 188, 48, 0.83); height: 40%; text-align:center; vertical-align:middle;color: #fff; font-weight: bold; ">--}}
                        {{--<div style="position: relative; margin: auto;display: table;height: 100%; margin: auto">--}}
                            {{--<div style="display: table-cell;display: table-cell;display: table-cell; vertical-align: middle;">--}}
                                {{--<div style="">{{ Html::image(ThemeHelper()."img/Accommodation.png" , "", array("width"=>"20%" ,"style"=>"text-align:center;")) }}</div>--}}
                                {{--<div style="color:#000; font-weight: bold;padding: 4px">{!! $lodging->title !!}</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</a>--}}
    </div>
</div>


@endsection
