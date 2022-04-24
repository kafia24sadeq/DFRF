<?php echo e(Form::hidden('action',  '' , array('id'=>'action') )); ?>



<div class="" style="margin-bottom:40px;">
  <?php echo Form::button(trans('admin.save') , array('class'=>'btn btn-primary','id'=>'save')); ?>


  
    
  

  <?php if( ends_with(Route::currentRouteName(), 'edit') ): ?>
      
    <?php echo Form::button(trans('admin.delete') , array('class'=>'btn btn-danger pull-left', 'id'=>'delete')); ?>

  <?php endif; ?>
</div>
