


<style>
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    @media(min-width:768px) {
        body {
            margin-top: 50px;
        }
        /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
    }

    #wrapper {
        padding-right: 0;
    }
    *.btn.btn-primary{
      background: #248CC8 !important;
    }
    #page-wrapper {
        width: 100%;
        padding: 0;
        background-color: #fff;
    }

    @media(min-width:768px) {
        #wrapper {
            padding-right: 225px;
        }

        #page-wrapper {
            padding: 22px 10px;
        }
    }

    /* Top Navigation */

    .top-nav {
        padding: 0 15px;
    }

    .top-nav>li {
        display: inline-block;
        float: right;
    }

    .top-nav>li>a {
        padding-top: 20px;
        padding-bottom: 20px;
        line-height: 20px;
        color: #fff;
    }

    .top-nav>li>a:hover,
    .top-nav>li>a:focus,
    .top-nav>.open>a,
    .top-nav>.open>a:hover,
    .top-nav>.open>a:focus {
        color: #fff;
        background-color: #1a242f;
    }

    .top-nav>.open>.dropdown-menu {
        float: right;
        position: absolute;
        margin-top: 0;
        /*border: 1px solid rgba(0,0,0,.15);*/
        border-top-right-radius: 0;
        border-top-left-radius: 0;
        background-color: #fff;
        -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        box-shadow: 0 6px 12px rgba(0,0,0,.175);
    }

    .top-nav>.open>.dropdown-menu>li>a {
        white-space: normal;
    }

    /* Side Navigation */

    @media(min-width:768px) {
        .side-nav {
            position: fixed;
            top: 60px;
            right: 225px;
            width: 225px;
            margin-right: -225px;
            border: none;
            border-radius: 0;
            border-top: 1px rgba(0,0,0,.5) solid;
            overflow-y: auto;
            background-color: #616161;
            /*background-color: #5A6B7D;*/
            bottom: 0;
            overflow-x: hidden;
            padding-bottom: 40px;
        }

        .side-nav>li>a {
            width: 225px;
            border-bottom: 1px rgba(0,0,0,.3) solid;
        }

        .side-nav li a:hover,
        .side-nav li a:focus {
            outline: none;
            background-color: #1a242f !important;
        }
    }

    .side-nav>li>ul {
        padding: 0;
        border-bottom: 1px rgba(0,0,0,.3) solid;
    }

    .side-nav>li>ul>li>a {
        display: block;
        padding: 10px 15px 10px 38px;
        text-decoration: none;
        /*color: #999;*/
        color: #fff;
    }

    .side-nav>li>ul>li>a:hover {
        color: #fff;
    }
    .navbar-inverse .navbar-nav>li>a {
        color: #fff;
    }

    .navbar .nav > li > a > .label {
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        position: absolute;
        top: 14px;
        left: 6px;
        font-size: 10px;
        font-weight: normal;
        min-width: 15px;
        min-height: 15px;
        line-height: 1.0em;
        text-align: center;
        padding: 2px;
    }

    .navbar .nav > li > a:hover > .label {
        top: 10px;
    }

    .navbar-brand {
        padding: 5px 15px;
    }
</style>






{{--<!-- Sidebar -->--}}


{{--<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">--}}
{{--<!-- Brand and toggle get grouped for better mobile display -->--}}
{{--<div class="navbar-header">--}}
{{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">--}}
{{--<span class="sr-only">Toggle navigation</span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--</button>--}}
{{--<a class="navbar-brand" href="http://cijulenlinea.ucr.ac.cr/dev-users/">--}}
{{--<img src="http://placehold.it/200x50&text=LOGO" alt="LOGO"">--}}
{{--</a>--}}
{{--</div>--}}

{{--</div>--}}

{{--<!-- Search -->--}}
{{--<a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">--}}
{{--<span class="glyphicon glyphicon-search"></span>--}}
{{--</a>--}}

{{--<!-- Search body -->--}}
{{--<div id="search" class="panel-collapse collapse">--}}
{{--<div class="panel-body">--}}
{{--<form class="navbar-form" role="search">--}}
{{--<div class="form-group">--}}
{{--<input type="text" class="form-control" placeholder="Search">--}}
{{--</div>--}}
{{--<button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--</div>--}}
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background: #248CC8">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/admin">
            <img  src="/themes/default/img/sys/bandw.png" height="50px" alt="LOGO">
        </a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-left top-nav" style="background: #248CC8 !important;">






        <li><a  target="_blank" href="{{ url('/') }}"><span class=" sub_icon  glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
        @permission('reports.index')
        <li><a href="{!! url('/admin/reports/'   ) !!}" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i></a></li>
        @endpermission
        @permission('mail.index')
        <li><a  href="{{ url('/admin/mail/') }}"><span class=" sub_icon  glyphicon glyphicon-envelope" aria-hidden="true"></span></a></li>
        @endpermission

        <li><a  href="#" onclick="openNav()"><i  class="fa fa-bell-o" aria-hidden="true" style="color: white"></i>
            </a></li>


        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{!! Auth::user()->name !!}<b class="fa fa-angle-down"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{!! route("users.edit" ,Auth::user()->id  ) !!}"><i class="fa fa-fw fa-user"></i>{!! trans("admin.edit")." ".trans("admin.profile") !!}</a></li>
                <li><a href="{!! route("password.edit" ,Auth::user()->id  ) !!}"><i class="fa fa-fw fa-cog"></i>{!! trans("admin.edit")." ".trans("admin.password") !!}</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/logout') }}"><i class="fa fa-fw fa-power-off"></i>{!! trans("admin.logout") !!}</a></li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav  ">




            @if (Auth::check())
                @permission('controlpanel.index')
                <li><a  href="{{ url('/admin/controlpanel') }}"><span class=" sub_icon  glyphicon glyphicon-dashboard" aria-hidden="true"></span>  {!! trans('admin.controlpanel')  !!}</a></li>
                @endpermission

                <hr>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-4"><i class="sub_icon  glyphicon glyphicon-duplicate"></i> {!! trans('admin.posts') !!} <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-4" class="collapse">

                        @permission('posts.index')
                        <li><a  href="{{ url('/admin/posts/') }}"><span class=" sub_icon  glyphicon glyphicon-duplicate" aria-hidden="true"></span> {!! trans('admin.all').' '.trans('admin.posts') !!} </a></li>
                        @endpermission
                        @permission('posts.create')
                        <li><a  href="{{ url('/admin/posts/create') }}"><span class=" sub_icon  glyphicon glyphicon glyphicon-file" aria-hidden="true"></span> {!! trans('admin.create').' '.trans('admin.post') !!}</a></li>
                        @endpermission
                    </ul>
                </li>

                <hr>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-companies"><i class="sub_icon  glyphicon  glyphicon-user"></i>{!! trans('admin.the') !!}{!! trans('admin.members') !!} <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-companies" class="collapse">
                        @permission('members.index')
                        <li><a  href="{{ url('/admin/members/') }}"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> {!! trans('admin.all').' '.''.trans('admin.the').trans('admin.members') !!} </a></li>
                        @endpermission
                        @permission('members.create')
                        <li><a  href="{{ url('/admin/members/create') }}"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> {!! trans('admin.create').' '.trans('admin.member') !!}</a></li>
                        @endpermission
                    </ul>
                </li>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-announcements"><i class="sub_icon  glyphicon  glyphicon-user"></i> {{ trans('admin.applicants') }} <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-announcements" class="collapse">
{{--                        @permission('groups.index')--}}
{{--                        <li><a  href="{{ url('/admin/groups/') }}"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> {!! trans('admin.all').' '.trans('admin.groups') !!}</a></li>--}}
{{--                        @endpermission--}}
{{--                        @permission('groups.create')--}}
{{--                        <li><a  href="{{ url('/admin/groups/create') }}"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> {!! trans('admin.create').' '.trans('admin.group') !!}</a></li>--}}
{{--                        @endpermission--}}
{{--                        <hr>--}}
                        @permission('applicants.index')
                        <li><a  href="{{ url('/admin/applicants/') }}"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> {!! trans('admin.all').' '.trans('admin.applicants') !!} </a></li>
                        @endpermission

                    </ul>
                </li>

                <hr>

{{--                <li>--}}
{{--                    <a href="#" data-toggle="collapse" data-target="#submenu-products"><i class="sub_icon  glyphicon  glyphicon-user"></i> {!! trans('admin.products') !!} <i class="fa fa-fw fa-angle-down "></i></a>--}}
{{--                    <ul id="submenu-products" class="collapse">--}}
{{--                        @permission('products.index')--}}
{{--                        <li><a  href="{{ url('/admin/products/') }}"><span class=" sub_icon  glyphicon glyphicon-film " aria-hidden="true"></span> {!! trans('admin.all').' '.trans('admin.products') !!}</a></li>--}}
{{--                        @endpermission--}}
{{--                        @permission('products.create')--}}
{{--                        <li><a  href="{{ url('/admin/products/create') }}"><span class=" sub_icon  glyphicon glyphicon-film " aria-hidden="true"></span> {!! trans('admin.create').' '.trans('admin.product') !!}</a></li>--}}
{{--                        @endpermission--}}
{{--                        @permission('productcategories.create')--}}
{{--                        <li><a  href="{{ url('/admin/productcategories/create') }}"><span class=" sub_icon  glyphicon glyphicon-folder-open" aria-hidden="true"></span> {!! trans('admin.categories').' '.trans('admin.products') !!}</a></li>--}}
{{--                        @endpermission--}}

{{--                    </ul>--}}
{{--                </li>--}}

{{--                <hr>--}}

{{--                <li>--}}
{{--                    <a href="#" data-toggle="collapse" data-target="#submenu-companies"><i class="sub_icon  glyphicon  glyphicon-user"></i> {!! trans('admin.companies') !!} <i class="fa fa-fw fa-angle-down "></i></a>--}}
{{--                    <ul id="submenu-companies" class="collapse">--}}
{{--                        @permission('companies.index')--}}
{{--                        <li><a  href="{{ url('/admin/companies/') }}"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> {!! trans('admin.all').' '.trans('admin.companies') !!} </a></li>--}}
{{--                        @endpermission--}}
{{--                        @permission('companies.create')--}}
{{--                        <li><a  href="{{ url('/admin/companies/create') }}"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> {!! trans('admin.create').' '.trans('admin.company') !!}</a></li>--}}
{{--                        @endpermission--}}
{{--                    </ul>--}}
{{--                </li>--}}

                <hr>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-programs"><i class="sub_icon  glyphicon  glyphicon-user"></i> {!! trans('admin.programs') !!} <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-programs" class="collapse">
                        @permission('programs.index')
                        <li><a  href="{{ url('/admin/programs/') }}"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> {!! trans('admin.all').' '.trans('admin.programs') !!} </a></li>
                        @endpermission
                        @permission('programs.create')
                        <li><a  href="{{ url('/admin/programs/create') }}"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> {!! trans('admin.create').' '.trans('admin.program') !!}</a></li>
                        @endpermission
                    </ul>
                </li>

                <hr>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-projects"><i class="sub_icon  glyphicon  glyphicon-user"></i> {!! trans('admin.adminStat') !!} <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-projects" class="collapse">
                        @permission('projects.edit')
                        <li><a  href="{{ url('/admin/projects/1/edit') }}"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> {!! trans('').' '.trans('admin.adminStat') !!} </a></li>
                        @endpermission
                        {{-- @permission('projects.create')
                        <li><a  href="{{ url('/admin/projects/create') }}"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> {!! trans('admin.create').' '.trans('admin.project') !!}</a></li>
                        @endpermission --}}
                    </ul>
                </li>

                <hr>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-works"><i class="sub_icon  glyphicon  glyphicon-user"></i> {!! trans('admin.the_works') !!} <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-works" class="collapse">
                        @permission('works.index')
                        <li><a  href="{{ url('/admin/works/') }}"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> {!! trans('admin.all').' '.trans('admin.the_works') !!} </a></li>
                        @endpermission
                        @permission('works.create')
                        <li><a  href="{{ url('/admin/works/create') }}"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> {!! trans('admin.create').' '.trans('admin.work') !!}</a></li>
                        @endpermission
                    </ul>
                </li>

                <hr>

                {{--<li>--}}
                    {{--<a href="#" data-toggle="collapse" data-target="#submenu-articles"><i class="sub_icon  glyphicon  glyphicon-user"></i> {!! trans('admin.articles')." ".trans('admin.and')." ".trans('admin.writers') !!} <i class="fa fa-fw fa-angle-down "></i></a>--}}
                    {{--<ul id="submenu-articles" class="collapse">--}}
                        {{--@permission('articles.index')--}}
                        {{--<li><a  href="{{ url('/admin/articles/') }}"><span class=" sub_icon  glyphicon glyphicon-duplicate" aria-hidden="true"></span> {!! trans('admin.all').' '.trans('admin.articles') !!} </a></li>--}}
                        {{--@endpermission--}}
                        {{--@permission('articles.create')--}}
                        {{--<li><a  href="{{ url('/admin/articles/create') }}"><span class=" sub_icon  glyphicon glyphicon-duplicate" aria-hidden="true"></span> {!! trans('admin.create').' '.trans('admin.article') !!} </a></li>--}}
                        {{--@endpermission--}}
                        {{--<hr>--}}

                        {{--@permission('writers.index')--}}
                        {{--<li><a  href="{{ url('/admin/writers/') }}"><span class=" sub_icon  glyphicon glyphicon-duplicate" aria-hidden="true"></span> {!! trans('admin.all').' '.trans('admin.writers') !!} </a></li>--}}
                        {{--@endpermission--}}
                        {{--@permission('writers.create')--}}
                        {{--<li><a  href="{{ url('/admin/writers/create') }}"><span class=" sub_icon  glyphicon glyphicon glyphicon-file" aria-hidden="true"></span> {!! trans('admin.create').' '.trans('admin.writer') !!}</a></li>--}}
                        {{--@endpermission--}}
                    {{--</ul>--}}
                {{--</li>--}}



                {{--<hr>--}}

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-images"><i class="sub_icon  glyphicon  glyphicon-user"></i> {!! trans('admin.photos')." ".trans('admin.and')." ".trans('admin.video') !!} <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-images" class="collapse">

                        @permission('pictures.index')
                        <li><a  href="{{ url('/admin/pictures/') }}"><span class=" sub_icon  glyphicon glyphicon-camera" aria-hidden="true"></span> {!! trans('admin.all').' '.trans('admin.images') !!}</a></li>
                        @endpermission
                        @permission('pictures.create')
                        <li><a  href="{{ url('/admin/pictures/create') }}"><span class=" sub_icon  glyphicon glyphicon-camera" aria-hidden="true"></span> {!! trans('admin.create').' '.trans('admin.image') !!}</a></li>
                        @endpermission
                        @permission('imagecategories.create')
                        <li><a  href="{{ url('/admin/imagecategories/create') }}"><span class=" sub_icon  glyphicon glyphicon-folder-open" aria-hidden="true"></span> {!! trans('admin.categories').' '.trans('admin.images') !!}</a></li>
                        @endpermission

                        <hr>

                        @permission('videos.index')
                        <li><a  href="{{ url('/admin/videos/') }}"><span class=" sub_icon  glyphicon glyphicon-film " aria-hidden="true"></span> {!! trans('admin.all').' '.trans('admin.videos') !!}</a></li>
                        @endpermission
                        @permission('videos.create')
                        <li><a  href="{{ url('/admin/videos/create') }}"><span class=" sub_icon  glyphicon glyphicon-film " aria-hidden="true"></span> {!! trans('admin.create').' '.trans('admin.video') !!}</a></li>
                        @endpermission
                        @permission('videocategories.create')
                        <li><a  href="{{ url('/admin/videocategories/create') }}"><span class=" sub_icon  glyphicon glyphicon-folder-open" aria-hidden="true"></span> {!! trans('admin.categories').' '.trans('admin.videos') !!}</a></li>
                        @endpermission

                    </ul>
                </li>

                <hr>



                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-flies"><i class="sub_icon  glyphicon  glyphicon-list-alt"></i> {!! trans('admin.the_files') !!} <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-flies" class="collapse">
                        @permission('uploadfiles.index')
                        <li><a  href="{{ url('/admin/uploadfiles/') }}"><span class=" sub_icon  glyphicon glyphicon-list-alt" aria-hidden="true"></span> {!! trans('admin.all').' '.trans('admin.the_files') !!} </a></li>
                        @endpermission


                        @permission('uploadfiles.create')
                        <li><a  href="{{ url('/admin/uploadfiles/create') }}"><span class=" sub_icon  glyphicon glyphicon-folder-open" aria-hidden="true"></span> {!! trans('admin.upload')." ".trans("admin.files") !!}</a></li>
                        @endpermission
                    </ul>
                </li>

                <hr>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-jobs"><i class="sub_icon  glyphicon glyphicon-duplicate"></i> {!! trans('admin.the_jobs') !!} <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-jobs" class="collapse">
                        @permission('jobs.index')
                        <li><a  href="{{ url('/admin/jobs/') }}"><span class=" sub_icon  glyphicon glyphicon-duplicate" aria-hidden="true"></span> {!! trans('admin.all').' '.trans('admin.the_jobs') !!} </a></li>
                        @endpermission
                        @permission('jobs.create')
                        <li><a  href="{{ url('/admin/jobs/create') }}"><span class=" sub_icon  glyphicon glyphicon glyphicon-file" aria-hidden="true"></span> {!! trans('admin.create').' '.trans('admin.job') !!}</a></li>
                        @endpermission
                    </ul>
                </li>

                <hr>

{{--                <li>--}}
{{--                    <a href="#" data-toggle="collapse" data-target="#submenu-tenders"><i class="sub_icon  glyphicon glyphicon-duplicate"></i> {!! trans('admin.the_tenders') !!} <i class="fa fa-fw fa-angle-down "></i></a>--}}
{{--                    <ul id="submenu-tenders" class="collapse">--}}
{{--                        @permission('tenders.index')--}}
{{--                        <li><a  href="{{ url('/admin/tenders/') }}"><span class=" sub_icon  glyphicon glyphicon-duplicate" aria-hidden="true"></span> {!! trans('admin.all').' '.trans('admin.the_tenders') !!} </a></li>--}}
{{--                        @endpermission--}}
{{--                        @permission('tenders.create')--}}
{{--                        <li><a  href="{{ url('/admin/tenders/create') }}"><span class=" sub_icon  glyphicon glyphicon glyphicon-file" aria-hidden="true"></span> {!! trans('admin.create').' '.trans('admin.tender') !!}</a></li>--}}
{{--                        @endpermission--}}
{{--                    </ul>--}}
{{--                </li>--}}

                <hr>

{{--                <li>--}}
{{--                    <a href="#" data-toggle="collapse" data-target="#submenu-5"><i class="sub_icon  glyphicon  glyphicon-list-alt"></i> {!! trans('admin.tasks') !!} <i class="fa fa-fw fa-angle-down "></i></a>--}}
{{--                    <ul id="submenu-5" class="collapse">--}}
{{--                        @permission('tasks.index')--}}
{{--                        <li><a  href="{{ url('/admin/tasks/') }}"><span class=" sub_icon  glyphicon glyphicon-list-alt" aria-hidden="true"></span> {!! trans('admin.all').' '.trans('admin.tasks') !!} </a></li>--}}
{{--                        @endpermission--}}
{{--                        @permission('tasks.create')--}}
{{--                        <li><a  href="{{ url('/admin/tasks/create') }}"><span class=" sub_icon  glyphicon glyphicon-list-alt" aria-hidden="true"></span> {!! trans('admin.create').' '.trans('admin.tasks') !!}</a></li>--}}
{{--                        @endpermission--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <hr>--}}


                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-6"><i class="sub_icon  glyphicon  glyphicon-file"></i> {!! trans('admin.pages') !!} <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-6" class="collapse">

                        @permission('pages.index')
                        <li><a  href="{{ url('/admin/pages/') }}"><span class=" sub_icon  glyphicon glyphicon glyphicon-file" aria-hidden="true"></span> {!! trans('admin.all').' '.trans('admin.pages') !!} </a></li>
                        @endpermission
                        @permission('pages.create')
                        <li><a  href="{{ url('/admin/pages/create') }}"><span class=" sub_icon  glyphicon glyphicon glyphicon-file" aria-hidden="true"></span> {!! trans('admin.create').' '.trans('admin.page') !!}</a></li>
                        @endpermission
                    </ul>
                </li>
                <hr>


{{--                <li>--}}
{{--                    <a href="#" data-toggle="collapse" data-target="#submenu-4567"><i class="sub_icon  glyphicon  glyphicon-file"></i> {!! trans('admin.the_polls') !!} <i class="fa fa-fw fa-angle-down "></i></a>--}}
{{--                    <ul id="submenu-4567" class="collapse">--}}

{{--                        @permission('polls.index')--}}
{{--                        <li><a  href="{{ url('/admin/polls/') }}"><span class=" sub_icon  glyphicon glyphicon glyphicon-file" aria-hidden="true"></span> {!! trans('admin.all').' '.trans('admin.the_polls') !!} </a></li>--}}
{{--                        @endpermission--}}
{{--                        @permission('polls.create')--}}
{{--                        <li><a  href="{{ url('/admin/polls/create') }}"><span class=" sub_icon  glyphicon glyphicon glyphicon-file" aria-hidden="true"></span> {!! trans('admin.create').' '.trans('admin.poll') !!}</a></li>--}}
{{--                        @endpermission--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <hr>--}}





                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-categories"><i class="sub_icon  glyphicon  glyphicon-folder-open"></i> {!! trans('admin.the_categories') !!} <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-categories" class="collapse">
                        @permission('categories.index')
                        <li><a  href="{{ url('/admin/categories/') }}"><span class=" sub_icon  glyphicon glyphicon-folder-open" aria-hidden="true"></span> {!! trans('admin.the_categories').' '.trans('admin.posts') !!}</a></li>
                        @endpermission

                        @permission('categories.create')
                        <li><a  href="{{ url('/admin/categories/create') }}"><span class=" sub_icon  glyphicon glyphicon-folder-open" aria-hidden="true"></span>  {!! trans('admin.create').' '.trans('admin.category') !!}</a></li>
                        @endpermission

                    </ul>
                </li>
                <hr>









                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="sub_icon  glyphicon  glyphicon-user"></i> {!! trans('admin.system') !!} <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-2" class="collapse">

                        @permission('settings.index')
                        <li><a  href="{{ url('/admin/settings/') }}"><span class=" sub_icon  glyphicon glyphicon-wrench " aria-hidden="true"></span> {!! trans('admin.settings') !!}</a></li>
                        @endpermission
                        @permission('userlogs.index')
                        <li><a  href="{{ url('/admin/userlogs/') }}"><span class=" sub_icon  glyphicon glyphicon-align-justify" aria-hidden="true"></span> {!! trans('admin.logs') !!} </a></li>
                        @endpermission
                        @permission('reports.index')
                        <li><a  href="{{ url('/admin/reports/') }}"><span class=" sub_icon  glyphicon glyphicon-align-justify" aria-hidden="true"></span> {!! trans('admin.reports') !!} </a></li>
                        @endpermission
                        @permission('trash.index')
                        <li><a  href="{{ url('/admin/trash/') }}"><span class=" sub_icon  glyphicon glyphicon-trash" aria-hidden="true"></span> {!! trans('admin.trash') !!}</a></li>
                        @endpermission

                        @permission('advertisements.index')
                        <li><a  href="{{ url('/admin/advertisements/') }}"><span class=" sub_icon  glyphicon glyphicon-barcode" aria-hidden="true"></span> {!! trans('admin.advertisementss') !!}</a></li>
                        @endpermission

                    </ul>
                </li>
                <hr>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="sub_icon  glyphicon  glyphicon-user"></i> {!! trans('admin.users') !!} <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-1" class="collapse">



                        @permission('users.index')
                        <li><a  href="{{ url('/admin/users') }}"><span class=" sub_icon  glyphicon  glyphicon-user" aria-hidden="true"></span> {!! trans('admin.all').' '.trans('admin.users') !!}</a></li>
                        @endpermission
                        @permission('users.create')
                        <li><a  href="{{ url('/admin/users/create') }}"><span class=" sub_icon  glyphicon  glyphicon-user" aria-hidden="true"></span> {!! trans('admin.create').' '.trans('admin.user') !!}</a></li>
                        @endpermission
                        @permission('roles.index')
                        <li><a  href="{{ url('/admin/roles/') }}"><span class=" sub_icon  glyphicon glyphicon-briefcase" aria-hidden="true"></span> {!! trans('admin.all').' '.trans('admin.roles') !!} </a></li>
                        @endpermission
                        @permission('roles.create')
                        <li><a  href="{{ url('/admin/roles/create') }}"><span class=" sub_icon  glyphicon glyphicon-briefcase" aria-hidden="true"></span> {!! trans('admin.create').' '.trans('admin.role') !!}</a></li>
                        @endpermission

                    </ul>
                </li>
            @endif



        </ul>
    </div>
</nav>


