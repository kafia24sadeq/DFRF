

<style media="screen">
* {
  margin: 0;
  padding: 0;
}
</style>

<style media="screen">
.btn-file {
  position: relative;
  overflow: hidden;
  margin: 10px 0;
}
.btn-file input {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}
</style>




<!-- title -->
<div class ="form-group">
  <fieldset class="form-group" id="title_fieldset">
    <?php echo Form::label('title', trans('admin.title'), array('class' => '')); ?>

    <div class ="">
      <?php echo Form::text('title' ,old('title'), array('class'=>'form-control') ); ?>

    </div>
  </fieldset>
</div>



<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><?php echo trans('admin.insert').' '.trans('admin.images'); ?></button>

<div class ="form-group">
  <fieldset class="form-group" id="content_fieldset">
    <?php echo Form::label('content', trans('admin.content'), array('class' => '')); ?>

    <div>
      <?php echo Form::textarea('content' ); ?>

    </div>
  </fieldset>
</div>


<!-- status -->
<div class ="form-group">
  <fieldset class="form-group">
    <?php echo Form::label('status', trans('admin.status'), array('class' => '')); ?>

    <div>
      <?php echo $__env->make('admin.includes.status', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      </div>
    </fieldset>
  </div>


<?php echo $__env->make('admin.includes.buttons', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo Form::close(); ?>


<?php echo $__env->make('admin.includes.uploadimagemodal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->startPush('scripts'); ?>
  <?php echo $__env->make('admin.jquery.ajax', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>
