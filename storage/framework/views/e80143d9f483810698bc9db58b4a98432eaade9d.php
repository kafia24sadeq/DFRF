<?php echo MetaTags('', excerptHelper(settings("metaDescription"),150,''),ThemeHelper()."img/logo.png" , settings("metaKeywors") , settings("websiteName") ); ?>



<?php $__env->startSection('content'); ?>


<section id="video" >
  
    <div class="container" style="margin-top: 130px">
        
        <div class="our_impact_header lates-header" >
            <img class="img-fluid" src="/photos/Group_603.png" alt="">
            <h3 style="margin-top: 10px;">الفيديوهات</h3>
            <img class="img-fluid" src="/photos/Group_603.png" alt="">
          </div>
    
            <div class="row" style="margin-top:100px">
                <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-sm-12 col-md-6" style="margin-bottom: 50px;">
                        <a href="https://www.youtube.com/watch?v=<?php echo e($video->videoID); ?>" class="vide">
                            <div class="box" style="border-radius: 20px; !important;">
                                <div class="image-box" style="border-radius: 20px; !important;">
                                    <img width="100%; margin-top: 15px;" src="<?php echo e($video->image_name); ?>"
                                         alt=""  style=" border-radius: 20px; !important;
                                          box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                                    
                                         <img src="<?php echo ThemeHelper(); ?>img/video.png" class="videos" style=" " alt=""/>
    
                                         <div class="content-video"  style="margin-right: 3px;">
                                            <img  class="img-responsive"
                                            src="<?php echo ThemeHelper(); ?>/img/schedule.png" style="width:20px;height:20px;
                                            " dir="ltr">
                                            <p class="card-text news-date" dir="rtl"
                                            style="display:inline-block; margin-top: 18px;"><?php echo e($video->date); ?> </p>
                                            <p class="card-text news-date" dir="rtl"
                                            style="display:inline-block; margin-top: 18px;"><?php echo e($video->date); ?> </p>
                                              <p class="hyber-link " style="margin-top: 8px; color: #000000 !important; margin-right: 2px;"> <?php echo strip_tags(str_limit( $video->title,30,'...')); ?></p>
                                           
                                         </div>
           
                                </div>
                            </div>
                        </a>
                       
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    
    
            <div class="" style="clear:both; display: flex;justify-content: center" >
                <?php echo e($videos->links('vendor.pagination.bootstrap-4')); ?>

            </div>
    
    
        </div>
    
    

    <div class="page-header" style="text-align: center">
        
    </div>


    <style>
        .videos{
            position:absolute;
            top:36%; left:42%; height:50px; width:50px;
        }
    </style>
<section>

   


</section>
   
    <?php $__env->startPush('scripts'); ?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>




        <script>
            /* $('#videolink').on('click', function(){
                 $('#videolink').css('display');
             });*/
            $('.vide').magnificPopup({
                type: 'iframe',
                iframe: {
                    patterns: {
                        dailymotion: {

                            index: 'youtube.com',
                            id: function(url) {
                                var m = url.match(/^.+youtube.com\/(video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/);
                                if (m !== null) {
                                    if(m[4] !== undefined) {

                                        return m[4];
                                    }
                                    return m[2];
                                }
                                return null;
                            },

                            src: 'https://www.dailymotion.com/embed/video/%id%'

                        }
                    }
                }


            });
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>