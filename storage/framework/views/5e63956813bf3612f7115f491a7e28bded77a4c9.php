<?php echo MetaTags( " | ".settings("websiteName"), "", ThemeHelper()."img/logo.png", "" ,
settings("websiteName") ); ?>




<?php $__env->startSection('content'); ?>
<section id="all-news">
   
    
    <div class="our_impact_header lates-header"  >
      <img class="img-fluid" src="/photos/Group_603.png" alt="">
        <h3 style="margin-top: 10px;"> الاخبار</h3>
        <img class="img-fluid" src="/photos/Group_603.png" alt=""> 
      
      </div>
    <div class="container " style="margin-top:50px" >
        <div class="latest-content" style="display: flex;flex-wrap: wrap;"> 
              <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
              <div class="card card-lates" style="">
                <?php echo e(Html::image(PhotosDir($post->image_name) ,  '' ,array('class'=>'story-image') )); ?>

                 <div class="row content"  style="margin-top: -93px;padding-right: 33px;
                 " >
                 <div style="display:flex">
                     <img style="height:20px;width:20px;border-radius: 0!important; " class="img-responsive"
                         src="<?php echo ThemeHelper(); ?>/img/schedule.png">
                         <p class="card-text news-date" dir="rtl"
                          style="margin-top: -1px;"><?php echo e($post->date); ?> </p>
                 </div>
                   
                         <br/>
                         <p  style="font-family: dubai;font-size: 17px;color:#fff;margin-right: -2px;"><?php echo strip_tags(str_limit( $post->title,40,'...')); ?></p>
                         <a href="/news/<?php echo e($post->id); ?>" class="hyber-link news-readmore" style="margin-right: 174px;
                            margin-top: -1px;">
                             <small style="color: #DE7778;font-size: 117%;">قراءة المزيد</small><img style="height: 15px; transform: rotate(180deg);margin-top: 5px;
                                 margin-right: 10px; border-radius:0" 
                                  src="<?php echo ThemeHelper(); ?>/img/read.png">
                         </a>
                 </div>
                    
               </div>
               
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
           
         </div> 
        
         </div>
         <div class="paginate">
            <?php echo e($posts->links('vendor.pagination.bootstrap-4')); ?>

</section>

   

    

        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          
               
                

         

         

           
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="row">
                <div class="col-lg-12 col-sm-12"
                     style="display: flex; justify-content: center;align-items: center;">
                    <h2 class="text-center"><?php echo e('لايوجد محتوى حالياً'); ?></h2>
                </div>
            </div>
        <?php endif; ?>

        
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>