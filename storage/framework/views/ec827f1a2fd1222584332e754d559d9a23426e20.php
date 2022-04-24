<style>
  
</style>


<?php if($paginator->hasPages()): ?>
    <ul class="pagination">
        
        <?php if($paginator->onFirstPage()): ?>
            <li class="page-item disabled"><span class="page-link"
                 style="background: transparent;border:none"><i class="fa-solid fa-angle-right" 
                 style="font-weight:bold"></i></li>
        <?php else: ?>
            <li class="page-item"><a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>"
                 rel="prev" style="background: transparent;border:none" ><i class="fa-solid fa-angle-right"
                  style="font-weight:bold"></i></a></li>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <li class="page-item disabled" ><span class="page-link"
                    style="
                    color: #000;
                    font-size: 25px;
                    background: transparent;
                    border: none;
                    margin-top: -6px;"
                    
                    ><?php echo e($element); ?></span></li>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="page-item active"><span class="page-link" ><?php echo e($page); ?></span></li>
                    <?php else: ?>
                        <li class="page-item"><a class="page-link  page-customer" href="<?php echo e($url); ?>"
                            style="
                            color: #000;
                            font-size: 25px;
                            background: transparent;
                            border: none;
                            margin-top: -6px;"
                            
                            ><?php echo e($page); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <li class="page-item"><a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" 
                rel="next" style="background: transparent;border:none"><i class="fa-solid fa-angle-left"></i></a></li>
        <?php else: ?>
            <li class="page-item disabled"><span class="page-link" 
                style="background: transparent;border:none"><i class="fa-solid fa-angle-left"></i></span></li>
        <?php endif; ?>
    </ul>
<?php endif; ?>
