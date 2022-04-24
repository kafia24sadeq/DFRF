<?php $__env->startSection('title',  trans('admin.controlpanel') ); ?>
<?php $__env->startSection('PageHeading',  trans('admin.controlpanel') ); ?>
<?php $__env->startSection('content'); ?>


    <div class="panel panel-default">
        <div class="panel-body">
            <div class="btn-group">
                <?php echo link_to_route('posts.create',  trans('admin.add').' '. trans('admin.post'),array(), array('class'=>'btn btn-primary ')); ?>

                <?php echo link_to_route('videos.create',  trans('admin.add').' '. trans('admin.video'),array(), array('class'=>'btn btn-primary ')); ?>

                <?php echo link_to_route('mail.index',  trans('admin.mail'),array(), array('class'=>'btn btn-primary ')); ?>

                <?php echo link_to_route('categories.create',  trans('admin.add').' '. trans('admin.category'),array(), array('class'=>'btn btn-primary ')); ?>

            </div>
        </div>
    </div>

    <?php if(session('status')): ?>
        <div class ="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <div class="">
        <div class="" style="">
            
            <?php echo app('arrilot.widget')->run('MailWidget'); ?>
            <div class="panel panel-default" style="margin: 0;padding: 0">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo trans('admin.recent').'  '.trans('admin.posts'); ?> </h3>
                </div>
                <div class="panel-body">

                    <?php if($posts->isEmpty()): ?>
                        <p> </p>
                    <?php else: ?>
                        <div id="no-more-tables" class=" nmt">
                            <table class ="table table-striped table-bordered table-hover table-sm">
                                <thead>
                                <tr>
                                    <th><?php echo trans('admin.ID'); ?></th>
                                    <th><?php echo trans('admin.title'); ?></th>
                                    <th><?php echo trans('admin.section'); ?></th>
                                    <th><?php echo trans('admin.user'); ?></th>
                                    <th><?php echo trans('admin.edit'); ?></th>
                                    <th><?php echo trans('admin.details'); ?></th>
                                    <th><?php echo trans('admin.created_at'); ?></th>
                                    <th><?php echo trans('admin.count'); ?></th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td data-title="<?php echo trans('admin.ID'); ?>"><?php echo $post->id; ?></td>
                                        <td data-title="<?php echo trans('admin.title'); ?>"><?php echo BlockedOrNot($post->status); ?>  <?php echo $post->title; ?></td>


                                        <td data-title="<?php echo trans('admin.edit'); ?>"><?php echo link_to_route('posts.edit',  trans('admin.edit'), $post->id, array('class'=>'btn btn-default btn-xs')); ?>

                                        </td>
                                        <td data-title="<?php echo trans('admin.details'); ?>">
                                            <a href='<?php echo route("posts.show",["id" => $post->id] ); ?>' class="btn btn-default btn-xs"> <?php echo trans('admin.details'); ?></a>
                                        </td>
                                        <td data-title="<?php echo trans('admin.created_at'); ?>"><?php echo Mydate($post->created_at); ?></td>
                                        <td data-title="<?php echo trans('admin.count'); ?>"><?php echo $post->count; ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>

                        <?php echo link_to_route('posts.index',  trans('admin.show').' '.trans('admin.all').' '. trans('admin.posts'),array(),  array('class'=>'btn btn-primary btn-xs')); ?>


                    <?php endif; ?>
                </div>

            </div>


            
            <?php if($scheduled->isEmpty()): ?>
                <p> </p>
            <?php else: ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo trans('admin.scheduled'); ?> </h3>
                    </div>
                    <div class="panel-body">
                        <table class ="table table-striped table-bordered table-hover table-sm">
                            <thead>
                            <tr>
                                <th><?php echo trans('admin.ID'); ?></th>
                                <th><?php echo trans('admin.name'); ?></th>
                                <th><?php echo trans('admin.email'); ?></th>
                                <th><?php echo trans('admin.user'); ?></th>
                                <th><?php echo trans('admin.edit'); ?></th>
                                <th><?php echo trans('admin.created_at'); ?></th>
                                <th><?php echo trans('admin.date'); ?></th>
                                <th><?php echo trans('admin.status'); ?></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $scheduled; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo $post->id; ?></td>
                                    <td><?php echo $post->title; ?></td>
                                    <td><?php echo $post->categories->name; ?></td>
                                    <td><?php echo $post->publisher->name; ?></td>
                                    
                                        <td><?php echo link_to_route('posts.edit',  trans('admin.edit').' '. trans('admin.post'), $post->id, array('class'=>'btn btn-default btn-xs')); ?>

                                        </td>
                                    
                                        

                                    
                                    <td><?php echo Mydate($post->created_at); ?></td>
                                    <td><?php echo Mydate($post->date); ?></td>
                                    <td><?php echo BlockedOrNot($post->status); ?>


                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <?php echo link_to_route('posts.index',  trans('admin.show').' '.trans('admin.all').' '. trans('admin.posts'),array(),  array('class'=>'btn btn-primary btn-xs')); ?>


                    </div>
                    <?php endif; ?>



                    <?php if($drafts->isEmpty()): ?>
                        <p> </p>
                    <?php else: ?>

                    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo trans('admin.drafts'); ?> </h3>
                            </div>
                            <div class="panel-body">
                                    <table class ="table table-striped table-bordered table-hover table-sm">
                                        <thead>
                                        <tr>
                                            <th><?php echo trans('admin.ID'); ?></th>
                                            <th><?php echo trans('admin.name'); ?></th>
                                            <th><?php echo trans('admin.email'); ?></th>
                                            <th><?php echo trans('admin.user'); ?></th>
                                            <th><?php echo trans('admin.edit'); ?></th>
                                            <th><?php echo trans('admin.created_at'); ?></th>
                                            <th><?php echo trans('admin.date'); ?></th>
                                            <th><?php echo trans('admin.status'); ?></th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $drafts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo $post->id; ?></td>
                                                <td><?php echo $post->title; ?></td>
                                                <td><?php echo $post->categories->name; ?></td>
                                                <td><?php echo $post->publisher->name; ?></td>

                                                    <td><?php echo link_to_route('posts.edit',  trans('admin.edit').' '. trans('admin.post'), $post->id, array('class'=>'btn btn-default btn-xs')); ?>

                                                    </td>
                                                
                                                    

                                                
                                                <td><?php echo Mydate($post->created_at); ?></td>
                                                <td><?php echo Mydate($post->date); ?></td>

                                                <td><?php echo BlockedOrNot($post->status); ?>


                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>

                                    <?php echo link_to_route('posts.index',  trans('admin.show').' '.trans('admin.all').' '. trans('admin.posts'),array(),  array('class'=>'btn btn-primary btn-xs')); ?>


                            </div>
                        </div>
                            <?php endif; ?>

                            <?php echo app('arrilot.widget')->run('ArchiveWidget'); ?>

                        <?php $__env->startPush("sidebar"); ?>

                        <div>
                            
                        </div>
                        <div >


                            <div>
                                
                            </div>
                            
                            
                            

                        </div>
                        <?php $__env->stopPush(); ?>

                </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>