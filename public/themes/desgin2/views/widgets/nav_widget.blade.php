@if ( Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\HomeController@index')
    <div class="navbar navbar-default navbar-transparent home_nav" role="navigation" data-start="padding: 26px 0px; background: rgba(101, 201, 166, 0.61); border-color: rgba(255, 255, 255, .3);" data-20p="padding: 21px 0px; background: rgba(255, 255, 255, 1); border-color: rgba(231, 231, 231, 1);">
    <div class="container">
        <div class="navbar-header">
            <div class="pull-left social_icon hidden-xs" style="padding-top: 5px;">
                <a class="fa_Facebook" target="_blank" href="https://www.facebook.com/{!! settings('facebook') !!}"><i class="icon-facebook1" aria-hidden="true"></i></a>
                <a class="fa_Telegram" target="_blank" href="https://telegram.me/{!! settings('telegram') !!}"><i class="icon-telegram1" aria-hidden="true"></i></a>
                <a class="fa_Google" target="_blank" href="https://www.plus.google.com/{!! settings('google') !!}"><i class="icon-google-plus1" aria-hidden="true"></i></a>
                <a class="fa_Twitter" target="_blank" href="https://twitter.com/{!! settings('twitter') !!}"><i class="icon-twitter1" aria-hidden="true"></i></a>
                <a class="fa_Whatsapp" target="_blank" href="https://whatsapp.com/{!! settings('whatsapp') !!}"><i class="fa-lg fa fa-whatsapp1" aria-hidden="true"></i></a>
                <a class="fa_Youtube" target="_blank" href="https://icon-instagram.com/{!! settings('icon-instagram') !!}"><i class="icon-instagram1" aria-hidden="true"></i></a>
            </div>
            <!-- Light and dark logo -->
            <a href="/" class="logo pull-right">
                <img class="img-responsive" src="{!! ThemeHelper() !!}/img/logo.png" width="400px" alt="">
            </a>
            <button type="button" class="navbar-toggle"   data-target="#navbar-collapse" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Navigation links -->
        <div class="collapse navbar-collapse " id="navbar-collapse" style="padding-top: 5px;">
            <ul class="nav navbar-nav navbar-right links">
                <li><a  class="active" href="#intro" data-start="color: rgb(255, 255, 255);" data-20p="color:rgb(97, 94, 94);">{!! trans('public.home') !!}</a></li>
                <li><a href="#about" data-start="color: rgb(255, 255, 255);" data-20p="color:rgb(97, 94, 94);">{!! trans('public.about') !!}</a></li>
                <li><a href="#works" data-start="color: rgb(255, 255, 255);" data-20p="color:rgb(97, 94, 94);">{!! trans('public.ourWorks') !!}</a></li>
                <li><a href="#products" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(97, 94, 94);">{!! trans('public.products') !!}</a></li>
                <li><a href="#partners" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(97, 94, 94);">{!! trans('public.partners') !!}</a></li>
                <li><a href="#contact" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(97, 94, 94);">{!! trans('public.contact') !!}</a></li>
                {{--<li><a href="http://english.info" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(97, 94, 94);">English</a></li>--}}
            </ul>
        </div>
    </div>
</div>
@else
    <div class="navbar navbar-default navbar-transparent home_nav" role="navigation" data-start="padding: 26px 0px; background: rgba(101, 201, 166, 0.61); border-color: rgba(255, 255, 255, .3);" data-20p="padding: 21px 0px; background: rgba(255, 255, 255, 1); border-color: rgba(231, 231, 231, 1);">
        <div class="container">
            <div class="navbar-header">
                <div class="pull-left social_icon hidden-xs " style="padding-top: 5px;">
                    <a class="fa_Facebook" target="_blank" href="https://www.facebook.com/{!! settings('facebook') !!}"><i class="icon-facebook1" aria-hidden="true"></i></a>
                    <a class="fa_Telegram" target="_blank" href="https://telegram.me/{!! settings('telegram') !!}"><i class="icon-telegram1" aria-hidden="true"></i></a>
                    <a class="fa_Google" target="_blank" href="https://www.plus.google.com/{!! settings('google') !!}"><i class="icon-google-plus1" aria-hidden="true"></i></a>
                    <a class="fa_Twitter" target="_blank" href="https://twitter.com/{!! settings('twitter') !!}"><i class="icon-twitter1" aria-hidden="true"></i></a>
                    <a class="fa_Whatsapp" target="_blank" href="https://whatsapp.com/{!! settings('whatsapp') !!}"><i class="fa-lg fa fa-whatsapp1" aria-hidden="true"></i></a>
                    <a class="fa_Youtube" target="_blank" href="https://icon-instagram.com/{!! settings('icon-instagram') !!}"><i class="icon-instagram1" aria-hidden="true"></i></a>
                </div>

                <!-- Light and dark logo -->
                <a href="/" class="logo pull-right">
                    <img class="img-responsive" src="{!! ThemeHelper() !!}/img/logo.png" width="400px" alt="">
                </a>
                <button type="button" class="navbar-toggle"   data-target="#navbar-collapse" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- Navigation links -->
            <div class="collapse navbar-collapse " id="navbar-collapse" style="padding-top: 5px;">
                <ul class="nav navbar-nav navbar-right links">
                    <li><a  class="active" href="/" data-start="color: rgb(255, 255, 255);" data-20p="color:rgb(97, 94, 94);">{!! trans('public.home') !!}</a></li>
                    <li><a href="{{ route('pages', 1)  }}" data-start="color: rgb(255, 255, 255);" data-20p="color:rgb(97, 94, 94);">{!! trans('public.about') !!}</a></li>
                    <li><a href="{!! route('works') !!}" data-start="color: rgb(255, 255, 255);" data-20p="color:rgb(97, 94, 94);">{!! trans('public.ourWorks') !!}</a></li>
                    <li><a href="{!! route('products') !!}" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(97, 94, 94);">{!! trans('public.products') !!}</a></li>
                    <li><a href="/mail" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(97, 94, 94);">{!! trans('public.contact') !!}</a></li>
                    {{--<li><a href="http://english.info" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(97, 94, 94);">English</a></li>--}}
                </ul>
            </div>
        </div>
    </div>
@endif
{{--<div class="navbar navbar-default navbar-transparent navbar-fixed-top" role="navigation" data-start="padding: 10px 0px;" data-20p="padding: 0px 0px;">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<!-- Light and dark logo -->--}}
            {{--<a href="/" class="navbar-brand" style="position: relative">--}}
                {{--<img class="" src="{!! ThemeHelper() !!}/img/logo.png" width="100px" height="75px" alt="" data-start="opacity: 1;" data-20p="opacity: 0;"--}}
                     {{--style="--}}

					 {{--position: absolute;  top: 0;"--}}
                {{-->--}}
                {{--<img class="" src="{!! ThemeHelper() !!}/img/logo.png" width="100px" height="75px" alt="" data-start="opacity: 0;" data-20p="opacity: 1;"--}}
                     {{--style="--}}

					  {{--position: absolute;  top: 0;--}}
                     {{--"--}}
                {{-->--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<!-- Navigation links -->--}}
        {{--<div class="collapse navbar-collapse" style="" id="navbar-collapse">--}}

            {{--<ul class="nav navbar-nav navbar-left" style="">--}}
                {{--<li><a href="/">Home</a></li>--}}
                {{--<li><a href="/" data-start="color: rgb(88, 88, 88);text-shadow: 0px 0px #3a3a3a;" data-20p="color: rgb(0, 0, 0);">{!! trans('public.home') !!}</a></li>--}}
                {{--<li><a href="/pages/11" data-start="color: rgb(88, 88, 88);text-shadow: 0px 0px #3a3a3a;" data-20p="color: rgb(0, 0, 0);">{!! trans('public.about') !!}</a></li>--}}
                {{--<li><a href="{!! route('programs') !!}"  data-start="color: rgb(88, 88, 88);text-shadow: 0px 0px #3a3a3a;" data-20p="color: rgb(0, 0, 0);">{!! trans('public.programs') !!}</a></li>--}}
                {{--<li><a href="{!! route('posts') !!}" data-start="color: rgb(88, 88, 88);" data-20p="color: rgb(0, 0, 0);">{!! trans('public.news') !!}</a></li>--}}
                {{--<li><a href="/images/21" data-start="color: rgb(88, 88, 88);text-shadow: 0px 0px #3a3a3a;" data-20p="color: rgb(0, 0, 0);">{!! trans('public.successstories') !!}</a></li>--}}
                {{--<li><a href="/images/13" data-start="color: rgb(88, 88, 88);text-shadow: 0px 0px #3a3a3a;" data-20p="color: rgb(0, 0, 0);">{!! trans('public.documents') !!}</a></li>--}}
                {{--<li><a href="{!! route('ads') !!}" data-start="color: rgb(88, 88, 88);text-shadow: 0px 0px #3a3a3a;" data-20p="color: rgb(0, 0, 0);">{!! trans('public.ads') !!}</a></li>--}}
                {{--<li><a href="/mail" data-start="color: rgb(88, 88, 88);text-shadow: 0px 0px #3a3a3a;" data-20p="color: rgb(0, 0, 0);">{!! trans('public.contact') !!}</a></li>--}}
                {{--<li><a href="/pages/13" data-start="color: rgb(88, 88, 88);text-shadow: 0px 0px #3a3a3a;" data-20p="color: rgb(0, 0, 0);">{!! trans('public.donate') !!}</a></li>--}}
                {{--<li><a href="http://english.nahdamakers.org" data-start="color: rgb(88, 88, 88);text-shadow: 0px 0px #3a3a3a;" data-20p="color: rgb(0, 0, 0);" style="font-family:'Open Sans', sans-serif;">{!! trans('public.english') !!}</a></li>--}}
                {{--<li class="dropdown search_dropdown">--}}
                    {{--<a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-start="color: rgb(88, 88, 88);" data-20p="color: rgb(0, 0, 0);">--}}
                        {{--<span class="glyphicon glyphicon-search" aria-hidden="true" data-start="color: rgb(88, 88, 88);text-shadow: 0px 0px #3a3a3a;" data-20p="color: rgb(0, 0, 0);"></span>--}}
                        {{--<span class="caret"></span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu" aria-labelledby="dropdownMenu1" style="min-width: 200px">--}}
                        {{--{!! Form::open(array('method'=>'GET', 'route' => 'search', 'class'=>' ')) !!}--}}

                        {{--<div class="form-group col-xs-12" style="margin: 0; padding: 0">--}}
                            {{--<input name="search" id="search" type="text" class="form-control" placeholder="{!! trans("public.search") !!}">--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-xs-12" style="margin: 0; padding: 0">--}}
                            {{--<button type="submit" class="btn search-btn" style="width: 36%">{!! trans("public.search") !!}</button>--}}
                        {{--</div>--}}

                        {{--</form>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}


{{--@if ( Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\HomeController@index')--}}


    {{--<!-- Start navigation -->--}}
    {{--<div class="navbar navbar-default navbar-transparent navbar-fixed-top" role="navigation" data-start="padding: 10px 0px; background: rgba(241, 236, 236, 0.6); border-color: rgba(255, 255, 255, .1);" data-20p="padding: 0px 0px; background: rgba(255, 255, 255, .95); border-color: rgba(231, 231, 231, 1);">--}}
        {{--<div class="container">--}}
            {{--<div class="navbar-header">--}}
                {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">--}}
                    {{--<span class="sr-only">Toggle navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}
                {{--<!-- Light and dark logo -->--}}
                {{--<a href="/" class="navbar-brand" style="position: relative">--}}
                    {{--<img class="" src="{!! ThemeHelper() !!}/img/logo.png" width="100px" height="75px" alt="" data-start="opacity: 1;" data-20p="opacity: 0;"--}}
                         {{--style="--}}

					 {{--position: absolute;  top: 0;"--}}
                    {{-->--}}
                    {{--<img class="" src="{!! ThemeHelper() !!}/img/logo.png" width="100px" height="75px" alt="" data-start="opacity: 0;" data-20p="opacity: 1;"--}}
                         {{--style="--}}

					  {{--position: absolute;  top: 0;--}}
                     {{--"--}}
                    {{-->--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<!-- Navigation links -->--}}
            {{--<div class="collapse navbar-collapse" style="" id="navbar-collapse">--}}

                {{--<ul class="nav navbar-nav navbar-left" style="">--}}
                    {{--<li><a href="/">Home</a></li>--}}
                    {{--<li><a href="/" data-start="color: rgb(88, 88, 88);" data-20p="color: rgb(0, 0, 0);">{!! trans('public.home') !!}</a></li>--}}
                    {{--<li><a href="/pages/11" data-start="color: rgb(88, 88, 88);" data-20p="color: rgb(0, 0, 0);">{!! trans('public.about') !!}</a></li>--}}
                    {{--<li><a href="{!! route('programs') !!}"  data-start="color: rgb(88, 88, 88);" data-20p="color: rgb(0, 0, 0);">{!! trans('public.programs') !!}</a></li>--}}
                    {{--<li><a href="{!! route('posts') !!}" data-start="color: rgb(88, 88, 88);" data-20p="color: rgb(0, 0, 0);">{!! trans('public.news') !!}</a></li>--}}
                    {{--<li><a href="/images/21" data-start="color: rgb(88, 88, 88);" data-20p="color: rgb(0, 0, 0);">{!! trans('public.successstories') !!}</a></li>--}}
                    {{--<li><a href="/images/13" data-start="color: rgb(88, 88, 88);" data-20p="color: rgb(0, 0, 0);">{!! trans('public.documents') !!}</a></li>--}}
                    {{--<li><a href="{!! route('ads') !!}" data-start="color: rgb(88, 88, 88);" data-20p="color: rgb(0, 0, 0);">{!! trans('public.ads') !!}</a></li>--}}
                    {{--<li><a href="/mail" data-start="color: rgb(88, 88, 88);" data-20p="color: rgb(0, 0, 0);">{!! trans('public.contact') !!}</a></li>--}}
                    {{--<li><a href="/pages/13" data-start="color: rgb(88, 88, 88);" data-20p="color: rgb(0, 0, 0);">{!! trans('public.donate') !!}</a></li>--}}
                    {{--<li><a href="http://english.nahdamakers.org" data-start="color: rgb(88, 88, 88);" data-20p="color: rgb(0, 0, 0);" style="font-family:'Open Sans', sans-serif;">{!! trans('public.english') !!}</a></li>--}}
                    {{--<li class="dropdown search_dropdown">--}}
                        {{--<a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-start="color: rgb(88, 88, 88);" data-20p="color: rgb(0, 0, 0);">--}}
                            {{--<span class="glyphicon glyphicon-search" aria-hidden="true" data-start="color: rgb(88, 88, 88);" data-20p="color: rgb(0, 0, 0);"></span>--}}
                            {{--<span class="caret"></span>--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu" aria-labelledby="dropdownMenu1" style="min-width: 200px">--}}
                            {{--{!! Form::open(array('method'=>'GET', 'route' => 'search', 'class'=>' ')) !!}--}}

                            {{--<div class="form-group col-xs-12" style="margin: 0; padding: 0">--}}
                                {{--<input name="search" id="search" type="text" class="form-control" placeholder="{!! trans("public.search") !!}">--}}
                            {{--</div>--}}
                            {{--<div class="form-group col-xs-12" style="margin: 0; padding: 0">--}}
                                {{--<button type="submit" class="btn search-btn" style="width: 36%">{!! trans("public.search") !!}</button>--}}
                            {{--</div>--}}

                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--@else--}}
    {{--<div class="navbar navbar-default navbar-transparent navbar-fixed-top" role="navigation"  >--}}
        {{--<div class="container">--}}
            {{--<div class="navbar-header">--}}
                {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">--}}
                    {{--<span class="sr-only">Toggle navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}
                {{--<!-- Light and dark logo -->--}}
                {{--<a href="/" class="navbar-brand" style="position: relative">--}}

                    {{--<img class="" src="{!! ThemeHelper() !!}/img/logo.png" style="opacity: 1 !important;" width="100px" height="60px">--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<!-- Navigation links -->--}}
            {{--<div class="collapse navbar-collapse" style="" id="navbar-collapse">--}}

                {{--<ul class="nav navbar-nav navbar-left" style="">--}}
                    {{--<li><a href="/">Home</a></li>--}}
                    {{--<li><a href="/" >{!! trans('public.home') !!}</a></li>--}}
                    {{--<li><a href="/pages/11" >{!! trans('public.about') !!}</a></li>--}}
                    {{--<li><a href="{!! route('programs') !!}"  >{!! trans('public.programs') !!}</a></li>--}}
                    {{--<li><a href="{!! route('posts') !!}" >{!! trans('public.news') !!}</a></li>--}}
                    {{--<li><a href="/images/21" >{!! trans('public.successstories') !!}</a></li>--}}
                    {{--<li><a href="/images/13" >{!! trans('public.documents') !!}</a></li>--}}
                    {{--<li><a href="{!! route('ads') !!}">{!! trans('public.ads') !!}</a></li>--}}
                    {{--<li><a href="/mail" >{!! trans('public.contact') !!}</a></li>--}}
                    {{--<li><a href="/pages/13" >{!! trans('public.donate') !!}</a></li>--}}
                    {{--<li><a href="http://english.nahdamakers.org" style="font-family:'Open Sans', sans-serif;">{!! trans('public.english') !!}</a></li>--}}
                    {{--<li class="dropdown search_dropdown">--}}
                        {{--<a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                            {{--<span class="glyphicon glyphicon-search" aria-hidden="true"></span>--}}
                            {{--<span class="caret"></span>--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu" aria-labelledby="dropdownMenu1" style="min-width: 200px">--}}
                            {{--{!! Form::open(array('method'=>'GET', 'route' => 'search', 'class'=>' ')) !!}--}}

                            {{--<div class="form-group col-xs-12" style="margin: 0; padding: 0">--}}
                                {{--<input name="search" id="search" type="text" class="form-control" placeholder="{!! trans("public.search") !!}">--}}
                            {{--</div>--}}
                            {{--<div class="form-group col-xs-12" style="margin: 0; padding: 0">--}}
                                {{--<button type="submit" class="btn search-btn" style="width: 36%">{!! trans("public.search") !!}</button>--}}
                            {{--</div>--}}

                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--@endif--}}
{{--<!-- End navigation -->--}}