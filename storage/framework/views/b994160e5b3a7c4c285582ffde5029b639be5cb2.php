<?php $__env->startSection('content'); ?>

<?php $__env->startSection('breadcrumbs',  Breadcrumbs::render('pages', $page )); ?>

<?php echo MetaTags( $page->title, excerptHelper( $page->content ,150,''), ThemeHelper()."img/logo.png", "" , settings("websiteName") ); ?>


<style>


</style>
<section  id="about-page" style="">
<div class="container">
    
        <div class="our_impact_header lates-header" >
            <img class="img-fluid" src="/photos/Group_603.png" alt="">
            <h3 style="margin-top: 10px;">من نحن</h3>
            <img class="img-fluid" src="/photos/Group_603.png" alt="">
         </div>
    

  <div class="row" style="margin-top: 70px">
        <div class="col-lg-12 col-sm-12"> 
        
          
     </div>
    </div>
</div> 
<div class="container">
    <div class="row">
        <div class="col-lg-8" >
            <p>  <?php echo $page->content; ?></p>
        </div>
        <div class="col-lg-4">
              <div class="about-box-left" >
                <img style="height:200px;width:200px " class="img-responsive"
                src="<?php echo ThemeHelper(); ?>/img/icons/logo.png">
              </div>
        </div>
        
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
              
              <div class="about-title" >
                <img  src="<?php echo ThemeHelper(); ?>img/our_vision.png" alt="">
                <p><?php echo e($vision->title); ?></p>
            </div>
            <p style="margin-top:-20px"><?php echo e(strip_tags($vision->content ?? '')); ?></p>

            
            <div class="about-title" >
                <img  src="<?php echo ThemeHelper(); ?>img/message (2).png" alt="">
                <p><?php echo e($message->title); ?></p>
            </div>
            <p style="margin-top:-20px"><?php echo e(strip_tags($message->content ?? '')); ?></p>
            
        

        <div class="about-title" >
            <img  src="<?php echo ThemeHelper(); ?>img/OUR GENERAL GOALS.png" alt="">
            <p><?php echo $ourgeneralgals ->title; ?></p>
        </div>
        
         <p  style="margin-top:-20px"><?php echo $ourgeneralgals->content; ?></p>

        
            <div class="about-title" >
            <img  src="<?php echo ThemeHelper(); ?>img/OUR SPECIAL GOALS.png" alt="" style="margin-top:-16px">
            <p><?php echo $ourspecialgoals ->title; ?></p>
        </div>
        <p style="margin-top:-20px"><?php echo $ourspecialgoals ->content; ?></p> 

        
     <div class="about-title" >
            <img  src="<?php echo ThemeHelper(); ?>img/OUR_VALU.png" alt="" style="margin-top:-10px">
            <p><?php echo e($value->title); ?></p>
        </div>
        <p style="margin-top:-20px"><?php echo e(strip_tags($value->content?? '')); ?></p>

        </div>
    </div>
</div>

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>