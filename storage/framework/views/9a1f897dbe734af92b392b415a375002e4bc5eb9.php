<?php $__env->startSection('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.posts') ); ?>
<?php $__env->startSection('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.posts') ); ?>

<?php $__env->startSection('content'); ?>

<div class="panel panel-default" >
    <div class="panel-body">
        <?php echo link_to_route('posts.create',  trans('admin.add').' '. trans('admin.post'),array(), array('class'=>'btn btn-primary ')); ?>



        <?php echo link_to_route('categories.create',  trans('admin.add').' '. trans('admin.section'),array(), array('class'=>'btn btn-primary ')); ?>

    </div>
</div>

<?php echo e($posts->links('vendor.pagination.bootstrap-4')); ?>


<table class ="table table-striped table-bordered table-hover table-sm" style="margin: 0;padding: 0">
    <thead>
    <tr>
        <th><?php echo trans('admin.ID'); ?></th>
        <th><?php echo trans('admin.title'); ?></th>
        <th><?php echo trans('admin.section'); ?></th>
        <th><?php echo trans('admin.image'); ?></th>

        <th><?php echo trans('admin.edit'); ?></th>
        <th><?php echo trans('admin.delete'); ?></th>
        <th><?php echo trans('admin.date'); ?></th>
        <th><?php echo trans('admin.status'); ?></th>
        <th><?php echo trans('admin.count'); ?></th>
    </tr>
    </thead>
    <tbody>


    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $post->id; ?></td>
            <td><?php echo $post->title; ?></td>
            <td><?php echo $post->categories->name; ?></td>
            <td>  <img src= "<?php echo PhotosDir($post->getImage(), true); ?>" width="100px"  alt="" /></td> 
            <td><?php echo link_to_route('posts.edit',  trans('admin.edit').' '. trans('admin.post'), $post->id, array('class'=>'btn btn-default btn-xs')); ?></td>
            <td>
                <?php echo e(Form::open(array('url' => '/admin/posts/' . $post->id,'onsubmit' => 'return ConfirmDelete()'))); ?>

                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                <?php echo e(Form::submit('Delete', array('class' => 'btn btn-danger'))); ?>

                <?php echo e(Form::close()); ?>

            </td>

            <td><?php echo Mydate($post->created_at); ?></td>
            <td><?php echo BlockedOrNot($post->status); ?></td>
            <td><?php echo $post->count; ?></td>

        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo e($posts->links('vendor.pagination.bootstrap-4')); ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>