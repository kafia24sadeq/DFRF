

     

                    
                    

<?php $__env->startPush('scripts'); ?>
   <?php echo $__env->make( 'jquery.ajax', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>


<footer>

   <div class="container" >
    
    

    
    
    
    <div class="row">
        <div class="col-sm " >
           
        </div>
        <div class="col-sm  " style="text-align: left">
            <img style="width: 44px;position: relative;margin-left: -60px !important; " class="img-responsive scrolltotop"
            src="<?php echo ThemeHelper(); ?>/img/icons/up.png">
        </div>
    </div>
    <div class="row">
        <div class="col " style="text-align: left" >
           
        </div>
        <div class="col-10" style="text-align: left;" >
                <img style="height:  140px; margin-left:46px " class="img-responsive  footer-logo"
                src="<?php echo ThemeHelper(); ?>/img/icons/logo.png" >
                <button type="button" class="btn btn-web footer-btn" style="margin-left: 26px;" >أبلغ عن</button>
        </div>
    </div>
    <div class="row">
        
        <div class="col-sm col-md" >
            <div class="pull-right social_icon hidden-xs " style="padding-top: 53px;">
                <h3 style="color: #717070;margin-right: 26px;margin-bottom:30px">تابعنا</h3>
                <a class="fa_Facebook" target="_blank"href="https://ar-ar.facebook.com/DFRFye/"><i class="fa-brands fa-facebook-f"></i></a>
                <a class="fa_Youtube" target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                <a class="fa_Twitter" target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a>
                <a class="fa_Telegram" target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
        </div>
        <div class="col-sm col-md" >
            <div class="links-footer" style="display: flex;justify-content: space-around;" >
           <div >
            <p><a href="<?php echo e('/'); ?>" style="color: #717070 !important">الصفحة الرئيسية</a></p>
            <p><a   href="<?php echo e('/pages/1'); ?>" style="color: #717070 !important">من نحن</a></p>
            <p><a href="#" style="color: #717070 !important">اخر الاخبار</a></p>
            <p><a href="#" style="color: #717070 !important">القضايا</a></p>
           </div>
           <div class="one">
            <p><a href="/ourworks" style="color: #717070 !important">المعرض</a></p>
            <p><a href="/ourworks" style="color: #717070 !important">اعمالنا</a></p>
            <p><a href="<?php echo e('/mails/create'); ?>" style="color: #717070 !important"><?php echo trans("public.contactus"); ?></a></p>
            <p><a href="#" style="color: #717070 !important">EN</a></p>
           </div>
           <div class="three" >
            <p><a href="#" style="color: #717070 !important;margin-top: -39px;">سياسة الخصوصية</a></p>
            <p><a href="#" style="color: #717070 !important">اتفاقية المستخدم</a></p>
            <p><a href="#" style="color: #717070 !important">FAQ</a></p>
           </div>

        </div>
    </div>
   </div>


        
    



        
            
             
                

              
            

        











         
        
 


</footer>


<div class="container-fluid footer-img">
 <div style="margin-top: 36px;text-align: center;margin-bottom: 20px; " class="you-img">
    <img   class="img-responsive" style="width: 100px;"
    src="<?php echo ThemeHelper(); ?>/img/icons/you_white.png" >
    <p style="color: #fff">POWERED BY YOU IT</p>
 </div>
</div>

<div class="copy " style="margin-bottom: 10px !important">
Defense for Rights and  freedoms Foundation @ All  rights reserved 2022
</div>


<?php $__env->startPush('scripts'); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$('.scrolltotop').click(function(){
   $('html, body').animate({scrollTop : 0},800);
   return false;
});
});
</script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
    var foot=document.querySelector('footer');
    var navbar=document.querySelector('.navbar');
   window.addEventListener('scroll', function() {
    //   alert(window.scrollY);///value
    //   alert(foot.offsetTop);//// 2968

    if(window.scrollY>=foot.offsetTop-200)
    {
        navbar.style.display='none';
    }
    else{
        navbar.style.display='';
    }

   });

   
    </script>
    <style>
        .social_icon i{
    color: #1F3669;
    font-size: 30px;
    margin-right: 20px;
        }
       footer p{
            margin-top: 25px;
            margin-left: 33px;
        }
    </style>
<?php $__env->stopPush(); ?>
