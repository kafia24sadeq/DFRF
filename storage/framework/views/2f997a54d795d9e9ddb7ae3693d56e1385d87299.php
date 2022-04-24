<?php $__env->startSection('content'); ?>

  <?php $__env->startSection('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.jobs') ); ?>
  <?php $__env->startSection('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.jobs') ); ?>




    <table class ="table table-striped table-bordered table-hover table-sm">
      <thead>
        <tr>
          <th><?php echo trans('admin.ID'); ?></th>
          <th><?php echo trans('admin.title'); ?></th>
          <th><?php echo trans('admin.deadline'); ?></th>
          <th><?php echo trans('admin.location'); ?></th>
          <th><?php echo trans('admin.date'); ?></th>
          <th><?php echo trans('admin.status'); ?></th>
          <th><?php echo trans('admin.edit'); ?></th>
        </tr>
      </thead>
      <tbody>


        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo $element->id; ?></td>
            <td><?php echo $element->title; ?></td>
            <td><?php echo $element->deadline; ?></td>
            <td><?php echo $element->location; ?></td>
            <td><?php echo Mydate($element->created_at); ?></td>
            <td><?php echo BlockedOrNot($element->status); ?>

            <td><?php echo link_to_route('jobs.edit',  trans('admin.edit').' '. trans('admin.job'), $element->id, array('class'=>'btn btn-primary btn-xs')); ?>

              
            </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>