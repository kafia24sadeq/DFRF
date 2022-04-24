<!DOCTYPE html>
<html lang="en">

<head dir="rtl">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>@yield('title', trans('admin.controlpanel'))</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" >
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.2.0/paper/bootstrap.min.css" >--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.min.css" >


    <link rel='shortcut icon' type='image/x-icon' href="{!! ThemeHelper() !!}img/icons/logo.png" />

    <style>
        @media only screen and (max-width: 800px) {

            /* Force table to not be like tables anymore */
            #no-more-tables table,
            #no-more-tables thead,
            #no-more-tables tbody,
            #no-more-tables th,
            #no-more-tables td,
            #no-more-tables tr {
                display: block;
            }

            /* Hide table headers (but not display: none;, for accessibility) */
            #no-more-tables thead tr {
                position: absolute;
                /*top: -9999px;*/
                /*left: -9999px;*/
                display: none;
            }

            #no-more-tables tr { border: 1px solid #ccc; }

            #no-more-tables td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
                white-space: normal;
                text-align:right;
            }

            #no-more-tables td:before {
                /* Now like a table header */
                position: absolute;
                /* Top/left values mimic padding */
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                text-align:right;
                font-weight: bold;
            }

            /*
            Label the data
            */
            #no-more-tables td:before { content: attr(data-title); }
        }



        /*notification center*/
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #fff;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            color: #111;
            z-index: 1000000;
            border-right:2px solid #ccc ;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;

            text-decoration: none;
            color: #818181;
            display: block;
            transition: 0.3s
        }

        .sidenav a:hover, .offcanvas a:focus{
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }


        .no-gutter > [class*='col-'] {
            padding-right:0;
            padding-left:0;
        }
    </style>
    @push("scripts")
    <script>
        $(document).ready(function () {
            $(".nmt").each(function() {
                var nmtTable = $(this);
                var nmtHeadRow = nmtTable.find("thead tr");

                nmtTable.find("tbody tr").each(function () {
                    var curRow = $(this);
                    for (var i = 0; i < curRow.find("td").length; i++) {
                        var rowSelector = "td:eq(" + i + ")";
                        var headSelector = "th:eq(" + i + ")";
                        curRow.find(rowSelector).attr('data-title', nmtHeadRow.find(headSelector).html());
                    }
                });

            });
        });
    </script>
    @endpush
</head>



<body id="app-layout" dir="rtl" style="background: #F5F8FA">





<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->

    @widget('MenuWidget')




    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 col-lg-10 well" id="content">

                    {{--<nav class="navbar navbar-default ">--}}
                    {{--<div class="container-fluid">--}}


                    {{--</div>--}}

                    {{--<div class=" navbar-collapse" id="app-navbar-collapse">--}}
                    {{--<!-- Left Side Of Navbar -->--}}



                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@if (Auth::guest())--}}
                    {{--<a class="navbar-brand" href="{{ url('/login') }}">{!! trans('admin.login') !!}</a>--}}
                    {{--@else--}}
                    {{--<a href="#menu-toggle" class="navbar-brand" id="menu-toggle"><span class=" glyphicon glyphicon-th-list"></span></a>--}}

                    {{--<a class="navbar-brand"  target="_blank" href="{{ url('/') }}"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a>--}}
                    {{--                            <a class="navbar-brand pull-left" href="{!! route("admin.users.edit", \Illuminate\Support\Facades\Auth::id()) !!}">  {{ Auth::user()->name }} </a>--}}
                    {{--<a class="navbar-brand" href="{{ url('/logout') }}"> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> {!! trans('admin.exit') !!}</a>--}}
                    {{--@endif--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</nav>--}}




                    @yield('breadcrumbs')

                    @if (Auth::check())

                        <div class="page-header"><h1>@yield('PageHeading')</h1>  </div>

                    @endif


                    <div class="panel panel-default">

                        <div class="panel-body" style="background: #F6F6F6">

                            @yield('content')
                            @stack('message')
                            {{--@if ( Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\Admin\PanelController@index')--}}

                            {{--@widget('AdminBreaking')--}}

                            {{--@endif--}}
                        </div>
                    </div>












                    <div style="text-align:center;margin:20px auto">
                        powered by YOU for Information technolgy
                    </div>

                </div>
                <div class="col-lg-4">@stack("sidebar")</div>
            </div>
        </div>

    </div>
</div>




<div id="mySidenav" class="sidenav">
    @asyncWidget('NotificationCenterWidget')


    @push('scripts')
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    @endpush
</div>
</body>


<!-- JavaScripts -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<link rel="stylesheet" href="/js/bootstrap-notify-master/animate.css" media="screen" title="no title" charset="utf-8">


<script>
    $(function(){
        $('[data-toggle="tooltip"]').tooltip();
        $(".side-nav .collapse").on("hide.bs.collapse", function() {
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-left").addClass("fa-angle-down");
        });
        $('.side-nav .collapse').on("show.bs.collapse", function() {
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-left");
        });
    });




</script>


@stack('scripts')



</html>
<style>
    .has-error-content{
        border: 1px solid red;
    }

    .has-error-text{
        color:red;
        font-weight: bold;
        font-size: 16px;
    }
</style>
