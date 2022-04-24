
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"/>
<style>
 .nav-link {
     color: #fff;
  
            /* font-family: AlfFont !important; */
            font-family: arial !important;
      
 }
 /* .nav-link:hover{
     color: #DE7778;
 } */
.nav-item{
    padding-right: 20px
}
.navbar-nav{
    padding-right: 52px
}
.dropdown-toggle{
     color: #fff;
 }

 .dropdown-toggle:hover{
     color:#DE7778;
 } 
 /* .icon-search:hover{
     color: #fff !important;
 }  */
.nav-color:hover{
    color:#DE7778;
}
.btn-web {
  color: #fff;
  background-color: #DE7778;
  border-color: #DE7778;
  border-radius:10px;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
  padding: 6px 30px;
}
.active{
    color: #DE7778 !important;
}
.btn-web:hover{
  color: #fff;
  background-color: #DE7778;
  border-color: #DE7778;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
  padding: 6px 30px;
}
.search-box{
    /* height: 43px; */
    /* width: 279px; */
     /* position: absolute; */
    /* top: 63px;  */
    /* left: -51px; */
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    border: 4px solid #DE7778;
    z-index: 100000;
    /* padding-top: 14px; */
    text-align: center;
    background: #fff;
    display: none;
    border-radius: 10px
}
.search-box::before{
  
}
.SearchBox::before{
    content: "";
    position: absolute;
    top:-28px;
    right: 7px;
    border-left: 12px solid transparent;
    border-right: 12px solid transparent;
    border-top: 14px solid transparent;
    border-bottom: 14px solid #DE7778;
}
.SearchBox{
position: relative;
}

.search-box input[type="text"]
{
    width: 215px;
    /* border: 1px solid #DE7778;
    outline: none */
}
.search-box button
{
    background: #DE7778;
    border: 1px solid #DE7778;
    outline: none;
    cursor: pointer;
    color: #fff;
    width: 100%;

}

.fa-solid, .fas {
    color: white;
}
</style>


<nav class="navbar navbar-expand-lg fixed-top " role="navigation" style="background:#1F3669 !important;padding:0px !important">
<div class="container">
    <a class="navbar-brand" href="<?php echo e('/'); ?>">
        <img style="height: 100px; " class="img-responsive"
    src="<?php echo ThemeHelper(); ?>/img/icons/logo.png"></a>
    </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" ></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav " >
      <li class="nav-item "><a href="<?php echo e('/'); ?>" class="nav-link  nav-color  <?php if( Request::is('/*')): ?>active
          
      <?php endif; ?>"  ><?php echo trans("public.home"); ?></a></li>
      <li class="nav-item ">
          <a  href="<?php echo e('/pages/1'); ?>"   class="nav-link nav-color <?php if(\Request::is('pages/*') ): ?> active  <?php endif; ?>" >
              <?php echo trans("public.about"); ?>

          </a>
      </li>
      <li class="nav-item">
          <a href="#latest" class="nav-link nav-color ">
              <?php echo e(trans('public.LATEST')); ?>

          </a>
      </li>
      <li class="nav-item">
          <div class="dropdown">
              <a class="btn  dropdown-toggle nav-color <?php echo e((request()->is('issues/*')) ? 'active ' : ''); ?>" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false" >
                  القضايا
              </a>
              <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuLink">

                      <a class="dropdown-item" href="/issues/one"><?php echo e(trans('public.DEATHPENALTY')); ?></a>
                      <a class="dropdown-item" href="/issues/two">معتقل جوانتانامو</a>
                      <a class="dropdown-item" href="/issues/three">الطائرات المسيرة</a>
                      <a class="dropdown-item" href="/issues/four">التعذيب</a>
                      <a class="dropdown-item" href="/issues/fifteen">الاعتقال غير القانوني</a>
              </div>
          </div>
      </li>
      <li class="nav-item ">
       
        <a  href="/ourworks" class="nav-link nav-color <?php if(\Request::is('ourworks*') ): ?> active  <?php endif; ?>">
            <?php echo e(trans('public.ourwork')); ?>

        </a>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <a class="btn  dropdown-toggle nav-color <?php echo e((request()->is('images*')) ||  (request()->is('videos*'))  ? 'active ' : ''); ?>" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" >
               المعرض 
            </a>
            <div class="dropdown-menu text-center " aria-labelledby="dropdownMenuLink" >

                    <a class="dropdown-item <?php if(\Request::is('images*') ): ?> active  <?php endif; ?>" href="/images"><?php echo e(trans('public.images')); ?></a>

                    <a class="dropdown-item <?php if(\Request::is('videos*') ): ?> active  <?php endif; ?>" href="/videos"><?php echo e(trans('public.videos')); ?></a>
            </div>
        </div>
      </li>
      <li class="nav-item "><a href="<?php echo e('/mails/create'); ?>"  class="nav-link nav-color <?php echo e((request()->is('mails*')) ? 'active' : ''); ?> "><?php echo trans("public.contactus"); ?></a></li>
      <li class="nav-item"><button type="button" class="btn btn-web">أبلغ عن</button></li>
      <li class="nav-item">
        <div class="dropdown">
            <a class="btn  dropdown nav-color <?php echo e((request()->is('issues/*')) ? 'active ' : ''); ?>" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" >
               <i class="fa-solid fa-magnifying-glass" style="margin-right: 10px;"></i> 
            </a>
            <div class="dropdown-menu text-center " aria-labelledby="dropdownMenuLink" style="width: 205px;border:none;background:transparent">
                <div class="SearchBox">
                    <form action="<?php echo e(route('search')); ?>" method="GET" >
                        <input type="text" name="search" required  class="form-control " placeholder="Search" style="border-radius: 10px;border:3px solid #DE7778;" />
                    </form>
                </div>
                   
            </div>
        </div>
    </li>
      <li class="nav-item"><a href="#" class="nav-link nav-color">EN</a></li>
  </ul>
 
</div>


      
  
    
</div>  
</nav> 

    



<style>
    /* @media (min-width: 1166px) {
        .navbar-light .navbar-nav .nav-link.lang{

            padding-right: 80px !important;
        }

    } */

</style>
<?php $__env->startPush('scripts'); ?>
       <script src="js/jquery-3.6.0.min.js"></script>
       <script>
                
            $(document).ready(function(){
                  //
                //   $(".nav-link:first").addClass("active");
                    // $(".nav-color").on("click",function(){
                    //    $(".nav-color").removeClass("active");
                    //    $(this).addClass("active");
                    //    });

                
                // hide the navbar downloade scroll
                $(document).scroll(function()
                  {
                 if($(window).scrollTop()>50){
                  $("nav").css('background','#fff');
                  $("nav").css('box-shadow','rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;');
                  $(".nav-link ").css('color','#717070');
                  $(".dropdown-toggle").css('color','#717070');
                  $(".dropdown-toggle::after").css('color','#717070');
                  $(".fa-magnifying-glass").css('color','#717070');
                  }
                else
                {
                  $("nav").css("background","#1F3669");
                  $(".nav-link ").css('color','#fff');
                  $(".dropdown-toggle").css('color','#fff')
                  $(".fa-magnifying-glass").css('color','#fff');
                  }
           });

           ////hide or show search icon
        //    $(".fa-solid").click(function()
        //    {
        //        $(".search-box").toggle();
        //    }
        //    );



            });
       </script>
<?php $__env->stopPush(); ?>



