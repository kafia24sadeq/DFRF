<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title', trans('').' '.trans('').' '.trans('admin.adminStat') ); ?>
<?php $__env->startSection('PageHeading', trans('').' '.trans('').' '.trans('admin.adminStat') ); ?>









<!--<form method="POST" action="projects/save" accept-charset="UTF-8" class="" id="myformama" name="myformama">success   -->

<?php echo Form::model($projects , array('route' => array('projects.update', $projects->id),  'method' => 'PUT', 'class'=>'', 'id'=>'myform' , 'name'=>'myform')); ?>

<?php   //  {!! csrf_field() !!} ?>
<?php echo e(method_field('PATCH')); ?>


<div class="form-group">
  <fieldset class="form-group" id="title_fieldset">
    <label for="beneficiaries" class="">المتقدمين</label>
    <div class="">
      <input class="form-control" name="applicants_num" type="text" value="<?php echo $projects->applicants_num; ?>"
        id="beneficiaries">
    </div>
  </fieldset>
</div>

<div class="form-group">
  <fieldset class="form-group" id="title_fieldset">
    <label for="idea" class="">المتدربين</label>
    <div class="">
      <input class="form-control" name="trainees_num" type="text" value="<?php echo $projects->trainees_num; ?>" id="idea">
    </div>
  </fieldset>
</div>

<div class="form-group">
  <fieldset class="form-group" id="title_fieldset">
    <label for="team" class="">عدد المراكز</label>
    <div class="">
      <input class="form-control" name="centers_num" type="text" value="<?php echo $projects->centers_num; ?>" id="team">
    </div>
  </fieldset>
</div>
<div class="form-group">
    <fieldset class="form-group" id="title_fieldset">
        <label for="team" class="">عدد الدورات</label>
        <div class="">
            <input class="form-control" name="courses_no" type="text" value="<?php echo $projects->courses_no; ?>" id="team">
        </div>
    </fieldset>
</div>

<div class="form-group">
  <?php echo Form::submit(' حفظ ', ['class' => 'btn btn-info']); ?>

</div>


<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>