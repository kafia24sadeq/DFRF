<!DOCTYPE html>
<html dir="rtl" lang="en">
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
{{--    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=dubai-light" />--}}

    <script src="{!! ThemeHelper() !!}js/modernizr.js"></script>
    <!-- Main Bootstrap styling -->
{{--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>--}}

{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">--}}
    <link rel="stylesheet" href="/owl/css/owl.carousel.css">
    <link rel="stylesheet" href="/owl/css/owl.theme.default.css">
    <link
            href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
            rel="stylesheet"  type='text/css'>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom styling -->
{{--    <link href="{!! ThemeHelper() !!}css/sass/style.css" rel="stylesheet">--}}
    <link href="{!! ThemeHelper() !!}css_styles/css/app.css" rel="stylesheet">
    <link href="{!! ThemeHelper() !!}css/bootstrap_rtl.min.css" rel="stylesheet">
    <link href="{!! ThemeHelper() !!}css/animate.css" rel="stylesheet">
    <link href="{!! ThemeHelper() !!}css/style_icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel='shortcut icon' type='image/x-icon' href="{!! ThemeHelper() !!}img/icons/logo.png" />
    <!-- Iconic font - FontAwesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


    <style>
        /* @font-face{
            font-family: "AlfFont";
            src: url("/themes/default/fonts/dubai.ttf");
        } */
        body{
            /* font-family: AlfFont !important; */
            font-family: arial !important;
        }
        .about-tile{
            /* font-family: AlfFont !important; */
            font-family: arial !important;
        }
    </style>
{{--    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>--}}
    <script src="{!! ThemeHelper() !!}js/respond.min.js"></script>

{{--    <link href="/OwlCarousel-master/owl-carousel/owl.carousel.css" rel="stylesheet">--}}
{{--    <link href="/OwlCarousel-master/owl-carousel/owl.theme.css" rel="stylesheet">--}}



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
{{--<div class="se-pre-con">--}}
{{--    <img src="{{ ThemeHelper()  }}img/0.gif">--}}
{{--</div>--}}
{{--<!-- End preloader -->--}}


@widget('NavWidget')

@if ( Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\HomeController@index' ||
 Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\ProgramsController@show')
    @yield('content')
@elseif(Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\PagesController@show')
    <div>
        @yield('content')
    </div>

@else
    <div class="">
        @yield('content')
    </div>

@endif



@widget('FooterNavWidget')




{{--@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])--}}


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

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="/owl/js/jquery-3.4.1.min.js"></script>
<script src="/owl/js/owl.carousel.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="{!! ThemeHelper() !!}/js/bootstrap.min.js" ></script>

{{--<script src="{!! ThemeHelper() !!}js/jquery.min.js"></script>--}}
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUI8j5w8Cv1rL2iaVV4A7mz3e9jGHNA2A&callback=initMap" async defer></script>--}}
<!-- Main Bootstrap js -->
{{--<script src="{!! ThemeHelper() !!}js/bootstrap.min.js"></script>--}}
{{--<script src="/OwlCarousel-master/owl-carousel/owl.carousel.js"></script>--}}

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="{!! ThemeHelper() !!}js/imagesloaded.min.js"></script>

<script src="{!! ThemeHelper() !!}js/jquery.scrollto.min.js"></script>
<script src="{!! ThemeHelper() !!}js/jquery.easing.js"></script>
<script src="{!! ThemeHelper() !!}js/jquery.localscroll.min.js"></script>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script !src="">

    $('img[data-enlargable]').addClass('img-enlargable').click(function(){
        var src = $(this).attr('src');
        $('<div>').css({
            background: 'RGBA(0,0,0,.5) url('+src+') no-repeat center',
            backgroundSize: 'contain',
            width:'100%', height:'100%',
            position:'fixed',
            zIndex:'10000',
            top:'0', left:'0',
            cursor: 'zoom-out'
        }).click(function(){
            $(this).remove();
        }).appendTo('body');
    });
</script>


    <script !src="">
        $('#stickThis').css({"display": "none !important"});

        $(window).on('scroll', function () {
            if ($(window).scrollTop() >= $('.show-nav').offset.top + $('.show-nav').outerHeight() - window.innerHeight) {

                $('#stickThis').addClass("show");
                // alert('Hellew');

            } else {
                $('#stickThis').removeClass("show");
            }
        });


    </script>


@stack('scripts')


<!-- End scripts -->

</html>
