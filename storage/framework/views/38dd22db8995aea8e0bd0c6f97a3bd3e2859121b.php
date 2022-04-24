<?php $__env->startSection('content'); ?>


<?php $__env->startSection('title',  trans('admin.create').' '.trans('admin.work') ); ?>
<?php $__env->startSection('PageHeading',  trans('admin.create').' '.trans('admin.work') ); ?>




<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p class ="alert alert-danger"><?php echo e($error); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->make('admin.jquery.tinymce', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin.jquery.imageuploader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php echo Form::open(array('url' => '/admin/works/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')); ?>

<div class="">

    <?php echo $__env->make('admin.works.form_partial', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>