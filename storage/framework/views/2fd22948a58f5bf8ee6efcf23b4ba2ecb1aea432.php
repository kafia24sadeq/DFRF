<?php echo MetaTags($post->title , excerptHelper($post->content,150,''),''); ?>


<?php $__env->startSection('content'); ?>
<section id="news_page">
      <div class="our_impact_header lates-header" >
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
        <h3 style="margin-top: 10px;">الاخبار</h3>
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
      </div>
     
     <div class="container"  style="margin-top: 110px">
        <div class="row">
            <div class="col"  >
                <img style="height:30px;width:30px " class="img-responsive"
                                        src="<?php echo ThemeHelper(); ?>/img/schedule.png">
                <p class="card-text news-date" dir="rtl"
                style="display:inline-block; margin-top: 18px;"><?php echo e($post->date); ?> </p>

                <h3 class="story-details-title"
                style=" font-family: 'TitleFont', sans-serif"><?php echo $post->title; ?> </h3>
                <?php echo e(Html::image(PhotosDir($post->image_name) ,  '' ,array('style'=>'','class'=>'img-fluid show-image') )); ?>

            </div>
            <div class="col" >
                <p ><?php echo $post->content; ?></p>
                
                <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
                <div class="pull-right social_icon hidden-xs " style="padding-top: 26px;">
                   
                   <p class="share"  style="color: #717070;margin-right: 26px;margin-bottom:30px">شارك هذا الخبر :</p>
                   <a class="fa_Facebook" target="_blank"href="https://ar-ar.facebook.com/DFRFye/"><i class="fa-brands fa-facebook-f"></i></a>
                   <a class="fa_Youtube" target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                   <a class="fa_Twitter" target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a>
                   <a class="fa_Telegram" target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
               </div>
            </div>
        
        </div>
     </div>
</section>
<section id="other-news">
    <div class="our_impact_header lates-header" >
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
        <h3 style="margin-top: 10px;">اخر الاخبار</h3>
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
      </div>

      <div class="container" >
       <div class="latest-content" >
         <?php $__currentLoopData = $more; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $last): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
        <div class="card card-lates" style="width:20rem;height:260px">
            <?php echo e(Html::image(PhotosDir($last->image_name) ,  '' ,array('style'=>'width: 100%;height:100%;position: relative;','class'=>'img-fluid ') )); ?>

            <div class="row content"  style="margin-top: -93px;padding-right: 33px;
            " >
            <div style="display:flex">
                <img style="height:20px;width:20px;border-radius: 0!important; " class="img-responsive"
                    src="<?php echo ThemeHelper(); ?>/img/schedule.png">
                    <p class="card-text news-date" dir="rtl"
                     style="margin-top: -1px;"><?php echo e($post->date); ?> </p>
            </div>
              
                    <br/>
                    <p  style="font-family: dubai;font-size: 17px;color:#fff;margin-right: -2px;"><?php echo strip_tags(str_limit( $last->title,40,'...')); ?></p>
                    <a href="/news/<?php echo e($last->id); ?>" class="hyber-link news-readmore" >
                        <small style="color: #DE7778;font-size: 117%;">قراءة المزيد</small><img style="height: 15px; transform: rotate(180deg);margin-top: 5px;
                            margin-right: 10px; border-radius:0" 
                             src="<?php echo ThemeHelper(); ?>/img/read.png">
                    </a>
            </div>
               
          </div>
          
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      
    </div> 
  
    </div>
    <div style="display: flex;" class="SeeMor">
        <a href="/news" class="text-center">
           <p style="display: inline;color:#717070">رؤية المزيد</p>
           <img style="height: 15px;border-radius:0;transform: rotate(179deg);margin-top: 6px;" 
            src="<?php echo ThemeHelper(); ?>/img/Group_598.png">
        </a>
    </div>
   
</section>
    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>