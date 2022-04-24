<?php $__env->startSection('content'); ?>

  <?php $__env->startSection('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.pages') ); ?>
  <?php $__env->startSection('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.pages') ); ?>


    <div class="panel panel-default">
      <div class="panel-body">
          <?php echo link_to_route('pages.create',  trans('admin.add').' '. trans('admin.page'),array(), array('class'=>'btn btn-primary ')); ?>



      </div>
    </div>

    <table class ="table table-striped table-bordered table-hover table-sm">
      <thead>
        <tr>
          <th><?php echo trans('admin.ID'); ?></th>
          <th><?php echo trans('admin.title'); ?></th>
          <th><?php echo trans('admin.edit'); ?></th>
          <th><?php echo trans('admin.date'); ?></th>
          <th><?php echo trans('admin.status'); ?></th>

        </tr>
      </thead>
      <tbody>


        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo $element->id; ?></td>
            <td><?php echo $element->title; ?></td>
            <td><?php echo link_to_route('pages.edit',  trans('admin.edit').' '. trans('admin.page'), $element->id, array('class'=>'btn btn-primary btn-xs')); ?>

              
            </td>
            <td><?php echo Mydate($element->created_at); ?></td>
            <td><?php echo BlockedOrNot($element->status); ?>


            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>