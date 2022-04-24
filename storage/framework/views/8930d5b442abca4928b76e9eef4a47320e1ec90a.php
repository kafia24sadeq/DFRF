<?php $__env->startSection('title' , 'الصور' ); ?>
<?php $__env->startSection('pageheading',  'استوديو الصور' ); ?>


<?php echo MetaTags('Images', "",  "" ); ?>


<?php $__env->startSection("content"); ?>


                        

                                

                

    

                
                 
                    
                        kkkkkkkkkkkkkkkk
                        
                        

              
            
          
        

    <section id="photo">

        <div class="container" style="margin-top: 130px">
            
            <div class="our_impact_header lates-header" >
                <img class="img-fluid" src="/photos/Group_603.png" alt="">
                <h3 style="margin-top: 10px;">الصور</h3>
                <img class="img-fluid" src="/photos/Group_603.png" alt="">
              </div>
        
                <div class="row" style="margin-top:100px">
                    <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-sm-12 col-md-6" style="margin-bottom: 50px;">
                            
                                
                            
                            <div class="box" style="border-radius: 20px; !important;">
                                <div class="image-box" style="border-radius: 20px; !important;">
                            <img src="../photos/<?php echo e($photo->name); ?>" style="width: 100%;height:100%;position: relative;" class="img-fluid"/>
                                </div>

                        <p  style="font-family: dubai;font-size: 17px;color:#fff;margin-right: 16px;"><?php echo strip_tags(str_limit(  $photo->title,40,'...')); ?></p>
                        
                            </div>
                        </div>  
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
        
        
                <div class="" style="clear:both; display: flex;justify-content: center" >
                    <?php echo e($photos->links('vendor.pagination.bootstrap-4')); ?>

                </div>
        
        
            </div>
        
    
    </section>





<?php $__env->stopSection(); ?>





















<?php echo $__env->make("layouts.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>