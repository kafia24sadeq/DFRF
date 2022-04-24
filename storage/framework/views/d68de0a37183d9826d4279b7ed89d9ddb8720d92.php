<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title',  trans('admin.edit').' '.$model->name ); ?>
<?php $__env->startSection('PageHeading',  trans('admin.edit').' '.$model->name ); ?>



<?php echo $__env->make('admin.jquery.tinymce', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p class ="alert alert-danger"><?php echo e($error); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->make('admin.jquery.imageuploader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo Form::model($model, array('route' => array('works.update', $model->id),  'method' => 'PUT', 'class'=>'', 'id'=>'myform' , 'name'=>'myform')); ?>

<?php echo $__env->make('admin.works.form_partial', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>





<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.22/moment.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" ></script>
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" >



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>