<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo trans('admin.insert').' '.trans('admin.images'); ?></h4>
      </div>
      <div class="modal-body">
        <?php echo $__env->make('admin.jquery.inliner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo trans('admin.close'); ?></button>
      </div>
    </div>

  </div>
</div>
