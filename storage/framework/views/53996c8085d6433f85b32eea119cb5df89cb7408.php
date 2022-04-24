<?php echo $__env->yieldContent('image_insert'); ?>

<!-- hidden image field -->

<?php echo e(Form::hidden('image_name', old('image_name')  , array('id'=>'image') )); ?>


<!-- image caption -->
<div class ="form-group">
    <fieldset class="form-group" id="title_fieldset">
        <?php echo Form::label('caption', trans('admin.image_caption')); ?>

        <div class ="">
            <?php echo Form::text('caption' , old('caption') , array('class'=>'form-control','id' => 'caption') ); ?>

        </div>
    </fieldset>
</div>


<!-- name -->
<div class ="form-group">
  <fieldset class="form-group" id="name_fieldset">
    <?php echo Form::label('name', trans('admin.name'), array('class' => '')); ?>

    <div class ="">
      <?php echo Form::text('name' ,old('name'), array('class'=>'form-control') ); ?>

    </div>
  </fieldset>
</div>



<div class="form-group">
    <fieldset  id="">
        <?php echo Form::label('program', trans('admin.program'), array('class' => '')); ?>

        <?php echo Form::select('program',  $programs  ,null, ['class' => 'form-control']); ?>

    </fieldset>
</div>

<div class ="form-group">
    <fieldset class="form-group" id="content_fieldset">
        <?php echo Form::label('content', trans('admin.content'), array('class' => '')); ?>

        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><?php echo trans('admin.insert').' '.trans('admin.images'); ?></button>
        <div style="margin-top: 10px;">
            <?php echo Form::textarea('content'); ?>

        </div>
    </fieldset>
</div>




  
    
    
      
    
  




    <!-- status -->
<div class ="form-group" style="">
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.22/moment.min.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" ></script>
      <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" >

      <script type="text/javascript">
      $(function () {
        $('#datetimepicker1').datetimepicker({
        });
      });
      </script>
    <?php $__env->stopPush(); ?>
