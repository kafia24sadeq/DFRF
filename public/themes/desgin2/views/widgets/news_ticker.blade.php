
{{--<div class="news_ticker_wrapper row" style="background-color: #5A111C; height: 40px; border-bottom: 2px solid #c0c0c0">--}}
{{--<div class="col-sm-2 col-xs-12 text-center">--}}
{{--<h3 style="white-space: nowrap; margin:10px 0; padding: 0;font-weight: bold;color: #fff;">{!! trans("public.latest") !!} :</h3>--}}
{{--</div>--}}
{{--<marquee  scrolldelay="5"  class="col-sm-10 col-xs-12" style="background-color: #5A111C;">--}}
{{--@foreach($posts as $post)--}}
{{--<a style="display:inline-block;padding-top: 10px; color: #fff;" href="{!! route("post",  $post->id  ) !!}">{!! $post->title  !!}</a>--}}
{{--<img style="display:inline-block; padding-right: 1.5em;" width="50px" height="25px" src="{!! ThemeHelper() !!}/img/logo.png">--}}
{{--@endforeach--}}
{{--</marquee>--}}
{{--</div>--}}

<div class="news_ticker_wrapper row" style="background-color: #5A111C; height: 40px; border-bottom: 2px solid #c0c0c0">
    <div class="simple-marquee-container">
        <div class="marquee-sibling col-xs-5 col-sm-2 col-sm-push-10 col-xs-push-7">
            {!! trans("public.latest") !!} :
            {{--<h3 class="col-sm-2 marquee-sibling" style="white-space: nowrap; margin:10px 0; padding: 0;font-weight: bold;color: #fff;"></h3>--}}
        </div>
        <div class="marquee col-xs-7 col-sm-10  col-sm-pull-2 col-xs-pull-5">
            <ul class="marquee-content-items">
                @foreach($posts as $post)
                    <li><a style="color: #fff;" href="{!! route("post",  $post->id  ) !!}">{!! $post->title  !!}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<style>
    /* News Ticker Style */

    .simple-marquee-container *{
        -webkit-box-sizing:border-box;
        -moz-box-sizing:border-box;
        -o-box-sizing:border-box;
        box-sizing:border-box;
        /* font-family: 'Droid Arabic Kufi' !important; */
        font-family: Arial !important;
    }
    .simple-marquee-container {
        width: 100%;
        background: #5A111C;
        float: left;
        display: inline-block;
        overflow: hidden;
        box-sizing: border-box;
        height: 45px;
        position: relative;
        cursor: pointer;
        /* font-family: 'Droid Arabic Kufi' !important; */
        font-family: Arial !important;

    }

    .simple-marquee-container .marquee-sibling {
        padding: 0;
        background: #5A111C;
        /*width: 20%;*/
        height: 45px;
        line-height: 42px;
        font-size: 16px;
        font-weight: bold;
        color: #ffffff;
        text-align: center;
        float: right;
        right: 0;
        /* font-family: 'Droid Arabic Kufi' !important; */
        font-family: Arial !important;
        z-index: 1000;
    }

    .simple-marquee-container .marquee, .simple-marquee-container *[class^="marquee"] {
        display: inline-block;
        white-space: nowrap;
        position:absolute;
    }

    .simple-marquee-container .marquee{
        margin-left:-25%;
    }

    .simple-marquee-container .marquee-content-items{
        display: inline-block;
        padding: 5px;
        margin: 0;
        height: 45px;
        position: relative;
    }

    .simple-marquee-container .marquee-content-items li{
        display: inline-block;
        line-height: 35px;
        color: #fff;
        font-family: 'Droid Arabic Kufi' !important;

    }

    .simple-marquee-container .marquee-content-items li:after{
        content: "";
        margin: 0 1em;
        width: 50px;
        height: 25px;
        position: relative;
        bottom: -5px;
        display: inline-block;
        background-size: contain;
        background-repeat: no-repeat;
        background-image: url("{!! ThemeHelper() !!}img/logo_colored.jpg");
    }

</style>
@push('scripts')
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
    {{--<script src="https://rawgit.com/conradfeyt/Simple-Marquee/master/js/marquee.js"></script>--}}

    <script src="{!! ThemeHelper() !!}js/marquee_js.js"></script>

    <script>
        $(document).ready(function() {

            $(function () {
                $('.simple-marquee-container').SimpleMarquee({
                    duration: 40000,
                    delayBetweenCycles : 0,
                    onComplete: 0,
                });
            });
        });

    </script>
@endpush