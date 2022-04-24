
<?php if($mails->isEmpty()): ?>

<?php else: ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo trans('admin.mail'); ?> </h3>
  </div>
  <div class="panel-body">




    <div class="table-responsive">

      <table class="table table-striped table-bordered table-hover table-sm" dir="rtl">
        <thead class="thead-inverse">
          <tr>
            <th><?php echo trans('admin.name'); ?></th>
            <th><?php echo trans('admin.read'); ?></th>
            <th><?php echo trans('admin.country'); ?></th>
          </tr>
        </thead>
        <tbody>


          <?php $__currentLoopData = $mails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo $element->name; ?></td>
              <td><?php echo link_to_route('mail.show',  trans('admin.read').' '. trans('admin.mail'), $element->id, array('class'=>'btn btn-default btn-xs')); ?></td>
              <td> <img src="<?php echo CP().'img/flags/'.strtolower($element->code).'.gif'; ?>" alt="" /> </td>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>

    <?php echo link_to_route('mail.index',  trans('admin.read').' '. trans('admin.mail'),array(),  array('class'=>'btn btn-primary btn-xs')); ?>


  </div>
</div>
</div>
<?php endif; ?>
