<?php $__env->startSection('pageheading', trans("public.ourwork")); ?>

<?php echo MetaTags( trans("public.ourwork"), "",ThemeHelper()."img/logo.png" , "" , settings("websiteName") ); ?>

<?php $__env->startSection('content'); ?>

<section id="contact" style="padding-top:200px">


    <div class="our_impact_header lates-header" >
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
        <h3 style="margin-top: 10px;"> اعمالنا</h3>
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
     </div>
    

     
    
 <div class="container" style="margin-top: 70px">
     <div class="row">
         <div class="col">
             <h3 style="margin-bottom: 50px;margin-right:23px">الانشطة التي قامت بتنفيذها مؤسسة دفاع للحقوق والحريات : </h3>
             <ul>
                <?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <li style="margin-top:20px;"><?php echo e(strip_tags( $work->content ?? '')); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </ul>
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

<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make( 'jquery.ajax', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>