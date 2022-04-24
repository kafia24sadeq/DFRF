<?php $__env->startSection('content'); ?>
    <style>
        @media (min-width: 799px) {
            .col-sm-12.col-md-12.col-lg-8.well{
                margin-right: 14% !important;
                margin-top: 7% !important;
            }
        }
    </style>
            <div class="panel panel-default login">
                <div class="panel-heading"><?php echo trans('admin.login'); ?></div>
                <div class="panel-body">
                  <?php echo Form::open(array('url' => array('login') , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label"><?php echo trans('admin.email'); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label"><?php echo trans('admin.password'); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" style="margin-right: -17px;"> <?php echo trans('admin.rememberme'); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> <?php echo trans('admin.login'); ?>

                                </button>

                                <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>"><?php echo trans('admin.forgetpassword'); ?>?</a>
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>