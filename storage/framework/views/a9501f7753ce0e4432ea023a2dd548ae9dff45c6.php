<style>
    /* .w-10{
        width: 100% !important;
        
    } */
    .carousel-caption {
    /* bottom: 200px; */
    right: 10%;
    z-index: 10;
    color: #fff;
    width: 450px;
    height: 400px;
    top:32%;
    text-align: center;
    
}
   
  


</style>




<?php 
    use Systems\Image;
        $slides = Image::where('image_categories_id',1)->where('status',0)->take(6)->get();
        $count = count($slides);
 ?>



<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo e($loop->index); ?>" class="<?php echo e($loop->first ? 'active' : ''); ?>"></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
    

    <div class="carousel-inner" >


        <?php $__empty_1 = true; $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="carousel-item <?php echo e($key == 0 ? ' active' : ''); ?>">
            <img src="/photos/<?php echo e($slide->name); ?>" class="d-block w-10" alt="...">
            <div class="carousel-caption ">


                    



                    <?php if( $slide->content != ""): ?>
                      <div class="carousel-content">
                      <p style="color:white !important;"><?php echo strip_tags(str_limit( $slide->content ,400,'...')); ?></p> 
                      <div style="text-align:center;margin-left:81px;margin-right:81px">
                        <button type="button" class="btn btn-web" style="margin-top:100px;padding-top:10px;padding-bottom:10px">وقع العريضة</button>
                      </div>
                      
                      </div>
                     <?php endif; ?>
            </div>
        </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="carousel-item">
                <img src="<?php echo ThemeHelper(); ?>/img/no_courses.svg" class="d-block w-10" alt="...">
            </div>
        <?php endif; ?>


    </div>
    
</div>
