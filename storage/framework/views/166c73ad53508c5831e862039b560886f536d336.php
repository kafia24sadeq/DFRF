


<style>
    @import  url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
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






        <li><a  target="_blank" href="<?php echo e(url('/')); ?>"><span class=" sub_icon  glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
        <?php if (\Entrust::can('reports.index')) : ?>
        <li><a href="<?php echo url('/admin/reports/'   ); ?>" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i></a></li>
        <?php endif; // Entrust::can ?>
        <?php if (\Entrust::can('mail.index')) : ?>
        <li><a  href="<?php echo e(url('/admin/mail/')); ?>"><span class=" sub_icon  glyphicon glyphicon-envelope" aria-hidden="true"></span></a></li>
        <?php endif; // Entrust::can ?>

        <li><a  href="#" onclick="openNav()"><i  class="fa fa-bell-o" aria-hidden="true" style="color: white"></i>
            </a></li>


        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo Auth::user()->name; ?><b class="fa fa-angle-down"></b></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo route("users.edit" ,Auth::user()->id  ); ?>"><i class="fa fa-fw fa-user"></i><?php echo trans("admin.edit")." ".trans("admin.profile"); ?></a></li>
                <li><a href="<?php echo route("password.edit" ,Auth::user()->id  ); ?>"><i class="fa fa-fw fa-cog"></i><?php echo trans("admin.edit")." ".trans("admin.password"); ?></a></li>
                <li class="divider"></li>
                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-fw fa-power-off"></i><?php echo trans("admin.logout"); ?></a></li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav  ">




            <?php if(Auth::check()): ?>
                <?php if (\Entrust::can('controlpanel.index')) : ?>
                <li><a  href="<?php echo e(url('/admin/controlpanel')); ?>"><span class=" sub_icon  glyphicon glyphicon-dashboard" aria-hidden="true"></span>  <?php echo trans('admin.controlpanel'); ?></a></li>
                <?php endif; // Entrust::can ?>

                <hr>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-4"><i class="sub_icon  glyphicon glyphicon-duplicate"></i> <?php echo trans('admin.posts'); ?> <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-4" class="collapse">

                        <?php if (\Entrust::can('posts.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/posts/')); ?>"><span class=" sub_icon  glyphicon glyphicon-duplicate" aria-hidden="true"></span> <?php echo trans('admin.all').' '.trans('admin.posts'); ?> </a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('posts.create')) : ?>
                        <li><a  href="<?php echo e(url('/admin/posts/create')); ?>"><span class=" sub_icon  glyphicon glyphicon glyphicon-file" aria-hidden="true"></span> <?php echo trans('admin.create').' '.trans('admin.post'); ?></a></li>
                        <?php endif; // Entrust::can ?>
                    </ul>
                </li>

                <hr>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-companies"><i class="sub_icon  glyphicon  glyphicon-user"></i><?php echo trans('admin.the'); ?><?php echo trans('admin.members'); ?> <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-companies" class="collapse">
                        <?php if (\Entrust::can('members.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/members/')); ?>"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> <?php echo trans('admin.all').' '.''.trans('admin.the').trans('admin.members'); ?> </a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('members.create')) : ?>
                        <li><a  href="<?php echo e(url('/admin/members/create')); ?>"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> <?php echo trans('admin.create').' '.trans('admin.member'); ?></a></li>
                        <?php endif; // Entrust::can ?>
                    </ul>
                </li>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-announcements"><i class="sub_icon  glyphicon  glyphicon-user"></i> <?php echo e(trans('admin.applicants')); ?> <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-announcements" class="collapse">







                        <?php if (\Entrust::can('applicants.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/applicants/')); ?>"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> <?php echo trans('admin.all').' '.trans('admin.applicants'); ?> </a></li>
                        <?php endif; // Entrust::can ?>

                    </ul>
                </li>

                <hr>































                <hr>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-programs"><i class="sub_icon  glyphicon  glyphicon-user"></i> <?php echo trans('admin.programs'); ?> <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-programs" class="collapse">
                        <?php if (\Entrust::can('programs.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/programs/')); ?>"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> <?php echo trans('admin.all').' '.trans('admin.programs'); ?> </a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('programs.create')) : ?>
                        <li><a  href="<?php echo e(url('/admin/programs/create')); ?>"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> <?php echo trans('admin.create').' '.trans('admin.program'); ?></a></li>
                        <?php endif; // Entrust::can ?>
                    </ul>
                </li>

                <hr>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-projects"><i class="sub_icon  glyphicon  glyphicon-user"></i> <?php echo trans('admin.adminStat'); ?> <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-projects" class="collapse">
                        <?php if (\Entrust::can('projects.edit')) : ?>
                        <li><a  href="<?php echo e(url('/admin/projects/1/edit')); ?>"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> <?php echo trans('').' '.trans('admin.adminStat'); ?> </a></li>
                        <?php endif; // Entrust::can ?>
                        
                    </ul>
                </li>

                <hr>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-works"><i class="sub_icon  glyphicon  glyphicon-user"></i> <?php echo trans('admin.the_works'); ?> <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-works" class="collapse">
                        <?php if (\Entrust::can('works.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/works/')); ?>"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> <?php echo trans('admin.all').' '.trans('admin.the_works'); ?> </a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('works.create')) : ?>
                        <li><a  href="<?php echo e(url('/admin/works/create')); ?>"><i class=" sub_icon  glyphicon glyphicon-fire" aria-hidden="true"></i> <?php echo trans('admin.create').' '.trans('admin.work'); ?></a></li>
                        <?php endif; // Entrust::can ?>
                    </ul>
                </li>

                <hr>

                
                    
                    
                        
                        
                        
                        
                        
                        
                        

                        
                        
                        
                        
                        
                        
                    
                



                

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-images"><i class="sub_icon  glyphicon  glyphicon-user"></i> <?php echo trans('admin.photos')." ".trans('admin.and')." ".trans('admin.video'); ?> <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-images" class="collapse">

                        <?php if (\Entrust::can('pictures.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/pictures/')); ?>"><span class=" sub_icon  glyphicon glyphicon-camera" aria-hidden="true"></span> <?php echo trans('admin.all').' '.trans('admin.images'); ?></a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('pictures.create')) : ?>
                        <li><a  href="<?php echo e(url('/admin/pictures/create')); ?>"><span class=" sub_icon  glyphicon glyphicon-camera" aria-hidden="true"></span> <?php echo trans('admin.create').' '.trans('admin.image'); ?></a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('imagecategories.create')) : ?>
                        <li><a  href="<?php echo e(url('/admin/imagecategories/create')); ?>"><span class=" sub_icon  glyphicon glyphicon-folder-open" aria-hidden="true"></span> <?php echo trans('admin.categories').' '.trans('admin.images'); ?></a></li>
                        <?php endif; // Entrust::can ?>

                        <hr>

                        <?php if (\Entrust::can('videos.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/videos/')); ?>"><span class=" sub_icon  glyphicon glyphicon-film " aria-hidden="true"></span> <?php echo trans('admin.all').' '.trans('admin.videos'); ?></a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('videos.create')) : ?>
                        <li><a  href="<?php echo e(url('/admin/videos/create')); ?>"><span class=" sub_icon  glyphicon glyphicon-film " aria-hidden="true"></span> <?php echo trans('admin.create').' '.trans('admin.video'); ?></a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('videocategories.create')) : ?>
                        <li><a  href="<?php echo e(url('/admin/videocategories/create')); ?>"><span class=" sub_icon  glyphicon glyphicon-folder-open" aria-hidden="true"></span> <?php echo trans('admin.categories').' '.trans('admin.videos'); ?></a></li>
                        <?php endif; // Entrust::can ?>

                    </ul>
                </li>

                <hr>



                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-flies"><i class="sub_icon  glyphicon  glyphicon-list-alt"></i> <?php echo trans('admin.the_files'); ?> <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-flies" class="collapse">
                        <?php if (\Entrust::can('uploadfiles.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/uploadfiles/')); ?>"><span class=" sub_icon  glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?php echo trans('admin.all').' '.trans('admin.the_files'); ?> </a></li>
                        <?php endif; // Entrust::can ?>


                        <?php if (\Entrust::can('uploadfiles.create')) : ?>
                        <li><a  href="<?php echo e(url('/admin/uploadfiles/create')); ?>"><span class=" sub_icon  glyphicon glyphicon-folder-open" aria-hidden="true"></span> <?php echo trans('admin.upload')." ".trans("admin.files"); ?></a></li>
                        <?php endif; // Entrust::can ?>
                    </ul>
                </li>

                <hr>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-jobs"><i class="sub_icon  glyphicon glyphicon-duplicate"></i> <?php echo trans('admin.the_jobs'); ?> <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-jobs" class="collapse">
                        <?php if (\Entrust::can('jobs.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/jobs/')); ?>"><span class=" sub_icon  glyphicon glyphicon-duplicate" aria-hidden="true"></span> <?php echo trans('admin.all').' '.trans('admin.the_jobs'); ?> </a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('jobs.create')) : ?>
                        <li><a  href="<?php echo e(url('/admin/jobs/create')); ?>"><span class=" sub_icon  glyphicon glyphicon glyphicon-file" aria-hidden="true"></span> <?php echo trans('admin.create').' '.trans('admin.job'); ?></a></li>
                        <?php endif; // Entrust::can ?>
                    </ul>
                </li>

                <hr>













                <hr>
















                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-6"><i class="sub_icon  glyphicon  glyphicon-file"></i> <?php echo trans('admin.pages'); ?> <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-6" class="collapse">

                        <?php if (\Entrust::can('pages.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/pages/')); ?>"><span class=" sub_icon  glyphicon glyphicon glyphicon-file" aria-hidden="true"></span> <?php echo trans('admin.all').' '.trans('admin.pages'); ?> </a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('pages.create')) : ?>
                        <li><a  href="<?php echo e(url('/admin/pages/create')); ?>"><span class=" sub_icon  glyphicon glyphicon glyphicon-file" aria-hidden="true"></span> <?php echo trans('admin.create').' '.trans('admin.page'); ?></a></li>
                        <?php endif; // Entrust::can ?>
                    </ul>
                </li>
                <hr>




















                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-categories"><i class="sub_icon  glyphicon  glyphicon-folder-open"></i> <?php echo trans('admin.the_categories'); ?> <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-categories" class="collapse">
                        <?php if (\Entrust::can('categories.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/categories/')); ?>"><span class=" sub_icon  glyphicon glyphicon-folder-open" aria-hidden="true"></span> <?php echo trans('admin.the_categories').' '.trans('admin.posts'); ?></a></li>
                        <?php endif; // Entrust::can ?>

                        <?php if (\Entrust::can('categories.create')) : ?>
                        <li><a  href="<?php echo e(url('/admin/categories/create')); ?>"><span class=" sub_icon  glyphicon glyphicon-folder-open" aria-hidden="true"></span>  <?php echo trans('admin.create').' '.trans('admin.category'); ?></a></li>
                        <?php endif; // Entrust::can ?>

                    </ul>
                </li>
                <hr>









                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="sub_icon  glyphicon  glyphicon-user"></i> <?php echo trans('admin.system'); ?> <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-2" class="collapse">

                        <?php if (\Entrust::can('settings.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/settings/')); ?>"><span class=" sub_icon  glyphicon glyphicon-wrench " aria-hidden="true"></span> <?php echo trans('admin.settings'); ?></a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('userlogs.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/userlogs/')); ?>"><span class=" sub_icon  glyphicon glyphicon-align-justify" aria-hidden="true"></span> <?php echo trans('admin.logs'); ?> </a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('reports.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/reports/')); ?>"><span class=" sub_icon  glyphicon glyphicon-align-justify" aria-hidden="true"></span> <?php echo trans('admin.reports'); ?> </a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('trash.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/trash/')); ?>"><span class=" sub_icon  glyphicon glyphicon-trash" aria-hidden="true"></span> <?php echo trans('admin.trash'); ?></a></li>
                        <?php endif; // Entrust::can ?>

                        <?php if (\Entrust::can('advertisements.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/advertisements/')); ?>"><span class=" sub_icon  glyphicon glyphicon-barcode" aria-hidden="true"></span> <?php echo trans('admin.advertisementss'); ?></a></li>
                        <?php endif; // Entrust::can ?>

                    </ul>
                </li>
                <hr>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="sub_icon  glyphicon  glyphicon-user"></i> <?php echo trans('admin.users'); ?> <i class="fa fa-fw fa-angle-down "></i></a>
                    <ul id="submenu-1" class="collapse">



                        <?php if (\Entrust::can('users.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/users')); ?>"><span class=" sub_icon  glyphicon  glyphicon-user" aria-hidden="true"></span> <?php echo trans('admin.all').' '.trans('admin.users'); ?></a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('users.create')) : ?>
                        <li><a  href="<?php echo e(url('/admin/users/create')); ?>"><span class=" sub_icon  glyphicon  glyphicon-user" aria-hidden="true"></span> <?php echo trans('admin.create').' '.trans('admin.user'); ?></a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('roles.index')) : ?>
                        <li><a  href="<?php echo e(url('/admin/roles/')); ?>"><span class=" sub_icon  glyphicon glyphicon-briefcase" aria-hidden="true"></span> <?php echo trans('admin.all').' '.trans('admin.roles'); ?> </a></li>
                        <?php endif; // Entrust::can ?>
                        <?php if (\Entrust::can('roles.create')) : ?>
                        <li><a  href="<?php echo e(url('/admin/roles/create')); ?>"><span class=" sub_icon  glyphicon glyphicon-briefcase" aria-hidden="true"></span> <?php echo trans('admin.create').' '.trans('admin.role'); ?></a></li>
                        <?php endif; // Entrust::can ?>

                    </ul>
                </li>
            <?php endif; ?>



        </ul>
    </div>
</nav>


