<style media="screen">
.btn-file {
  position: relative;
  overflow: hidden;
  margin: 10px;
}
.btn-file input.upload {
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


<?php $__env->startSection('modalcontent'); ?>

  <?php echo Form::open( array('url' => array('uploadmultiimage'),'method' => 'POST' ,   'files'=>true , 'id'=>'myform2' , 'name'=>'myform2')); ?>


  <span class="btn btn-info btn-file">
    <?php echo trans('admin.select').' '.trans('admin.images'); ?>

    <?php echo Form::file('files[]', array('multiple'=>'multiple', 'class'=>'btn-file')); ?>

  </span>

  <fieldset class="form-group" id="">
    <?php echo Form::label('image_tags', trans('admin.tags'), array('class' => '')); ?>


    <div class ="">
      <?php echo Form::text('image_tags' ,old('image_tags'), array('class'=>'form-control') ); ?>

    </div>
  </fieldset>

  <fieldset class="form-group" id="">
    <div class ="">
      <?php echo Form::label('copyrights', trans('admin.copyrights'), array('class' => '')); ?>

      <?php echo Form::select('copyrights',
        array(
          '0'=>'بدون',
          'center'=>'وسط',
          'top'=>'فوق',
          'bottom'=>'تحت',
          'right'=>'يمين',
          'left'=>'يسار',
          'top-left'=>'فوق يسار',
          'top-right'=>'فوق يمين',
          'bottom-left'=>'تحت يسار',
          'bottom-right'=>'تحت يمين',
        ) ,null, ['class' => 'form-control'] ); ?>

      </div>
    </fieldset>


    <fieldset class="form-group" id="">
      <?php echo Form::label('transparency', trans('admin.transparency'), array('class' => '')); ?>


      <div class ="">
        <?php echo Form::select('transparency',
          array(
            '0'=>'0%',
            '20'=>'20%',
            '40'=>'40%',
            '50'=>'50%',
            '60'=>'60%',
            '80'=>'80%',
            '90'=>'90%',

          ) ,null, ['class' => 'form-control'] ); ?>

        </div>
      </fieldset>

      <?php echo Form::button(trans('admin.upload').' '. trans('admin.image') , array('class'=>'btn btn-info btn-file actionable  ')); ?>

      <?php echo Form::close(); ?>


      <div id="allfiles">

      </div>
    <?php $__env->stopSection(); ?>



    <?php $__env->startPush('modalscripts'); ?>

      <?php echo $__env->make('admin.jquery.multiuploadnajax', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <script src="/js/bootstrap-notify-master/bootstrap-notify.min.js" ></script>
      <link rel="stylesheet" href="/js/bootstrap-notify-master/animate.css" media="screen" title="no title" charset="utf-8">
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>