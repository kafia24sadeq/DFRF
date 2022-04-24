<?php $__env->startSection('pageheading', trans("public.DEATHPENALTY")); ?>

<?php echo MetaTags( trans("public.DEATHPENALTY"), "",ThemeHelper()."img/logo.png" , "" , settings("websiteName") ); ?>

<?php $__env->startSection('content'); ?>

<section id="contact" style="padding-top:200px">


    <div class="our_impact_header lates-header" >
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
        <h3 style="margin-top: 10px;"> أحكام الأعدام</h3>
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
     </div>
    

   
     
    
  <div class="container">
      <div class="row">
          <div class="col" style="margin-bottom: 200px">
            <p style="margin-top: -121px;margin-bottom:200px"><?php echo $deathpenalty->content ?? ''; ?></p>
          </div>
      </div>
  </div>
</section>

    <style>
    .pro-work{
        background: red
    }

    .pro-work::before{
    content: "";
    width: 10px;
    display: inline-block;
    position: absolute;
    top: 85px;
    height: 10px;
    right: 1px;
    border-radius: 50%;
    background: #000;
      
    }

    </style>
   


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>