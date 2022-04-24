<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Encoding -->
    <meta charset="utf-8">

    <link rel="canonical" href="{!! $metaURL !!}">

    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <!-- IE compatibility modes -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="google-site-verification" content="Sm6tjf3RpRQfdffwa2f9cGNixheuvXgXTTX9mN1J2uc" />
    <!-- Set the title of you site -->

    <!-- Set the descritpion of your site -->

    <script src="{!! ThemeHelper() !!}js/modernizr.js"></script>
    <!-- Main Bootstrap styling -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">

    <!-- Custom styling -->
    <link href="{!! ThemeHelper() !!}css/style.css" rel="stylesheet">
    <link href="{!! ThemeHelper() !!}css/animate.css" rel="stylesheet">
    <link href="{!! ThemeHelper() !!}css/style_icons.css" rel="stylesheet">

    <!-- Iconic font - FontAwesome -->
    {{--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">--}}

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="{!! ThemeHelper() !!}js/respond.min.js"></script>

    <link href="/OwlCarousel-master/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/OwlCarousel-master/owl-carousel/owl.theme.css" rel="stylesheet">

    <!-- Site thumbnail -->

    <!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries. All other JS at the end of file. -->
    <!-- [if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>

<!-- Favicon -->
    <link rel='shortcut icon' type='image/x-icon' href="{!! ThemeHelper() !!}img/sys/favicon.png" />
    <!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries. All other JS at the end of file. -->



    <style>
        @import url(//fonts.googleapis.com/earlyaccess/droidarabickufi.css);
        h4 {
            letter-spacing: 0px;
        }
        .ads_widgets  img {
            width: 100% !important;
            height: auto !important;
        }

        #intro {
            background-color : #56BCBA;
            -webkit-background-size: cover;
            background-size: cover;
            min-height: 100vh;
        }



        .border{
            transition: all 0.2s;


        }
        .border:hover
        {
            box-shadow: inset 0 0 0 1000000px #590f1a;
            color:white !important;
            font-weight: bolder !important;
            transition: all 0.2s;

        }

        .title_link a{
            /*font-weight: bold;*/
            margin: 10px 0;
            clear: both;
            margin-top: 20px;
            font-size: 22px;
            line-height:35px;
            display: block;
        }


        .header-pic {
            width: 100%;
        }
        .border-div{
            background-color: #580f1a;
            height: 30px !important;

        }
        .sp-color {
            color: #e4a909;
            font-size: 40px
        }


        .icon {
            padding-top: 20px !important;
            width: 70px;
        }

        .subject_font{
            font-size: 20px;
            line-height: 35px;
            font-family: Arial !important;
        }
        .subject_font a{
            font-family: Arial !important;
        }

        .fixedsocial {
            top: 60%;
            height: 200px;
            width: 60px;
            position: fixed;
            left: 1%;
        }
        #head-soc ul li {list-style :none; display: inline;}
        #head-soc ul li a { transition: all 0.3s ease;
            text-indent: -9999px; font-size: 0; line-height: 0; overflow: hidden ; height: 32px; width: 32px ;border: 0;
            {{--background: url( '{!! ThemeHelper() !!}img/social-media.png') ;--}}
            display: block;padding:0 !important}

        {{--#head-soc li#g a {--}}
            {{--background: url( '{!! ThemeHelper() !!}img/social-media.png') ;--}}
            {{--background-position: 0px 0px;--}}
        {{--}--}}
        /*#head-soc li#g a:hover {background-position: 0px -32px;}*/

        #head-soc li#rss a {
            background: url( '{!! ThemeHelper() !!}img/rss.svg') ;
            background-position: 50%;
            background-size: contain;}
        #head-soc li#rss a:hover {background-position: -32px 0;}

        #head-soc li#sub a {
            background: url( '{!! ThemeHelper() !!}img/telegram.svg') ;
            background-position: 50%;
            background-size: contain;}
        #head-soc li#sub a:hover {background-position:-32px 0;}

        #head-soc li#fb a {
            background: url( '{!! ThemeHelper() !!}img/facebook.svg') ;
            background-position: 50%;
            background-size: contain;}
        #head-soc li#fb a:hover {background-position: -32px 0;}

        #head-soc li#twit a {
            background: url( '{!! ThemeHelper() !!}img/twitter.svg') ;
            background-position: 50%;
            background-size: contain;}
        #head-soc li#twit a:hover {background-position:-32px 0;}

        {{--#head-soc li#li a {--}}
            {{--background: url( '{!! ThemeHelper() !!}img/social-media.png') ;--}}
            {{--background-position: -160px 0px;}--}}
        {{--#head-soc li#li a:hover {background-position: -160px -32px;}--}}

        #head-soc li#youtube a {
            background: url( '{!! ThemeHelper() !!}img/youtube.svg') ;
            background-position: 50%;
            background-size: contain;}
        #head-soc li#youtube a:hover {background-position: -32px 0;}

        .sub-contact {
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .cont-details{
            display: block;
            margin-bottom: 10px;
            letter-spacing: 0px;
            font-size:17px;
        }
        .header-pic {
            width: 100%;
        }
        .border-div{
            background-color: #F3C041;
            height: 30px !important;

        }
        .sp-color {
            color: #e4a909;
            font-size: 40px
        }

        .program-panel .description-text {
            margin-bottom: 20px;
            margin-top: 20px;
            line-height: 1.4em;

        }

        .numbers {
            font-size: 50px;
        }
        .circle {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: #F3C041;
            position: relative;
            z-index: 99;
            margin-left: auto;
            margin-right: auto;
            margin-top: -60px;
            text-align: center;
        }

        .icon {
            padding-top: 20px !important;
            width: 70px;
        }
    </style>

    {{-- TODO add analytics code from setting--}}


    {{--java script code--}}
    {!!   @settings('analytics') !!}
    {!!   @settings('gWebmaster') !!}
    {!!   @settings('bing') !!}
    {!!   @settings('facebookCode') !!}
    {!!   @settings('other') !!}
    {{-- end java script code--}}
    <title>{!! $metaTitle !!}</title>

    {{--meta tags--}}
    <meta name="description" content='{!! $metaDescription !!}'>
    <meta name="keywords" content='{!! $metaKeywords !!}'>
    <meta name="author" content='{!! $metaAuthor !!}'>
    {{--meta tags ends--}}

    {{-- facebook open graph --}}
    <meta property="og:title"              content='{!! $metaTitle !!}' />
    <meta property="og:url"                content='{!! $metaURL !!}' />
    <meta property="og:type"               content="website" />
    <meta property="og:site_name" content="{!! settings("websiteName") !!}">
    <meta property="og:description"        content='{!! $metaDescription !!}' />



    <meta property="og:image" content="{!! $metaImage !!}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />


    {{-- end facebook open graph --}}


    {{-- twitter summary card --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content='{!! '@'.settings('twitter') !!}' />
    <meta name="twitter:title" content='{!! $metaTitle !!}' />
    <meta name="twitter:description" content='{!! $metaDescription !!}' />
    <meta name="twitter:image" content='{!! $metaImage !!}' />
    {{-- end twitter summary card --}}
</head>

<body style="position: relative">

<!-- Start preloader -->
<div class="se-pre-con">
    <img src="{{ ThemeHelper()  }}img/0.gif">
</div>
<!-- End preloader -->


@widget('NavWidget')

@if ( Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\HomeController@index' ||
 Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\ProgramsController@show')
    @yield('content')
@elseif(Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\PagesController@show')
    <div>
        @yield('content')
    </div>

@else
    <div class="" style="margin-top: 100px">
        @yield('content')
    </div>

@endif



@widget('FooterNavWidget')

{{--<div class="fixedsocial">--}}
    {{--<div id="head-soc" style="float:right; margin-top:15px;">--}}
        {{--<ul style="">--}}
            {{--<li id="fb"><a target="_blank" href="https://www.facebook.com/{!! settings('facebook') !!}">Facebook</a></li>--}}
            {{--<li id="twit"><a target="_blank" href="https://twitter.com/{!! settings('twitter') !!}">Twitter</a></li>--}}
            {{--<li id="rss"><a target="_blank" href="/rsslinks/">RSS Feed</a> </li>--}}
            {{--<li id="sub"><a target="_blank" href="https://telegram.me/{!! settings('telegram') !!}">Subscribe</a></li>--}}
            {{--<li id="youtube"><a target="_blank" href="{!! settings('youtube') !!}">Youtube</a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}


<div class="">
    {{--@widget('PollsRead')--}}
</div>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
{{--<script src="{!! ThemeHelper() !!}js/jquery.min.js"></script>--}}
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUI8j5w8Cv1rL2iaVV4A7mz3e9jGHNA2A&callback=initMap" async defer></script>--}}
<!-- Main Bootstrap js -->
<script src="{!! ThemeHelper() !!}js/bootstrap.min.js"></script>
<script src="/OwlCarousel-master/owl-carousel/owl.carousel.js"></script>


<!-- Retina support -->
{{--<script src="{!! ThemeHelper() !!}js/retina.js"></script>--}}
<!-- Animated elements -->
<script src="{!! ThemeHelper() !!}js/imagesloaded.min.js"></script>
{{--<script src="{!! ThemeHelper() !!}js/skrollr.js"></script>--}}
{{--<!--[if lt IE 9]>--}}
{{--<script src="{!! ThemeHelper() !!}js/skrollr.ie.js"></script>--}}
{{--<![endif]-->--}}
<!-- Smooth scroll -->
<script src="{!! ThemeHelper() !!}js/jquery.scrollto.min.js"></script>
<script src="{!! ThemeHelper() !!}js/jquery.easing.js"></script>
<script src="{!! ThemeHelper() !!}js/jquery.localscroll.min.js"></script>
<script src="{!! ThemeHelper() !!}js/smoothscroll.js"></script>
<!-- Gallery lightbox -->
<script src="{!! ThemeHelper() !!}js/ekko-lightbox.min.js"></script>
<!-- Contact form and google map -->
<script src="{!! ThemeHelper() !!}js/jquery.form.js"></script>
<script src="{!! ThemeHelper() !!}js/jquery.flowuplabels.js"></script>
<!-- Custom scripts and triggers -->
<script src="{!! ThemeHelper() !!}js/custom.js"></script>

<script src="{!! ThemeHelper() !!}js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
{{--<script>--}}
    {{--function initMap() {--}}
        {{--var map = new google.maps.Map(document.getElementById('map-canvas'), {--}}
            {{--center: {lat: 12.807193, lng: 45.039854},--}}
            {{--zoom: 16--}}
        {{--});--}}
    {{--}--}}
    {{--google.maps.event.addDomListener(window, 'load', initMap);--}}
{{--</script>--}}

@stack('scripts')


<!-- End scripts -->

</html>
