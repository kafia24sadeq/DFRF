<?php echo $__env->yieldContent('image_insert'); ?>

<!-- hidden image field -->

<?php echo e(Form::hidden('image_name', old('image_name')  , array('id'=>'image') )); ?>


<!-- caption -->
<div class ="form-group">
    <fieldset class="form-group" id="caption_fieldset">
        <?php echo Form::label('caption', trans('admin.caption'), array('class' => '')); ?>

        <div>
            <?php echo Form::text('caption', old('caption'), array('class'=>'form-control') ); ?>

        </div>
    </fieldset>
</div>

<!-- introductory title -->

  
    
    
      
    
  



<!-- title -->
<div class ="form-group">
  <fieldset class="form-group" id="title_fieldset">
    <?php echo Form::label('title', trans('admin.title'), array('class' => '')); ?>

    <div class ="">
      <?php echo Form::text('title' ,old('title'), array('class'=>'form-control') ); ?>

    </div>
  </fieldset>
</div>







<!-- source -->
<div class ="form-group">
  <fieldset class="form-group" id="source_fieldset">
    <?php echo Form::label('source',  trans('admin.source'), array('class' => '')); ?>

    <div>
      <?php echo Form::text('source' , old("source") , array('class'=>'form-control') ); ?>

    </div>
  </fieldset>
</div>










<div class ="form-group">
    <fieldset class="form-group" id="">
        <?php echo Form::label('categories', trans('admin.category'), array('class' => '')); ?>


        <div class ="">
            <?php echo Form::select('category_id',  $categorys  ,null, ['class' => 'form-control']); ?>

        </div>
    </fieldset>
</div>

<?php echo $__env->make('admin.includes.UploadTextToTinyMce', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class ="form-group">
    <fieldset class="form-group" id="content_fieldset">
        <?php echo Form::label('contents', trans('admin.content'), array('id' => '')); ?>

        <div>
            

            <textarea name="content" id="content" cols="30" rows="10"><?php echo e($post->content ?? ''); ?> </textarea>

        </div>
    </fieldset>
</div>




<div class ="form-group">
  <fieldset class="form-group" id="importance_fieldset">
    <?php echo Form::label('importance', trans('admin.importance'), array('class' => '')); ?>

    <div>
      <?php echo Form::select('importance',
        array(
          '1'=>1,
          '2'=>2,
          '3'=>3,
        ),null, ['class' => 'form-control'] ); ?>

    </div>
  </fieldset>
</div>



















    
        
        
            
              
                
                

              

        

    





<!-- date -->
<div class ="form-group" >
    <fieldset class="form-group" id="date_fieldset">
        <?php echo Form::label('scheduled','تاريخ الخبر', array('class' => '')); ?>


        <div id="datetimepicker1" class='input-group date form-control' >
            <?php echo Form::text('date', old('date'), array('class'=>'form-control', 'id'=>"datetimepicker") ); ?> <span class="glyphicon glyphicon-calendar"></span>
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
<script src="/cp/js/datetimepicker-master/build/jquery.datetimepicker.full.js"></script>
<link rel="stylesheet" type="text/css" href="/cp/js/datetimepicker-master/jquery.datetimepicker.css"/>

<link rel="stylesheet" href="/css/clipboardtext.css">
<script src="/js/clipboardtext.js"></script>

<script type="text/javascript">
    $.datetimepicker.setLocale('ar');

    $(function () {
        $('#datetimepicker').datetimepicker({
        });
    });





</script>


<?php $__env->stopPush(); ?>
