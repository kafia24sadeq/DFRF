<?php $__env->startSection('pageheading', trans("public.mail")); ?>

<?php echo MetaTags( trans("public.mail"), "",ThemeHelper()."img/logo.png" , "" , settings("websiteName") ); ?>

<?php $__env->startSection('content'); ?>

<section id="contact" style="padding-top:200px">



    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    <div class="our_impact_header lates-header" >
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
        <h3 style="margin-top: 10px;">تواصل معنا</h3>
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
     </div>
<div class="container">
    <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
   <?php endif; ?>

    <div class="row mt-5">
        <div class="col-lg-3"></div>
        <div class="col-lg-6" >
           <?php echo e(Form::open(array('route' => array('mails.store')  , 'id'=>'application' , 'name'=>'application'))); ?>

         
               <div class="form-group  fl_wrap">
                   <label class="fl_label" for="name"><?php echo e(trans('public.name')); ?></label>
                   <input type="text" name="name" value="<?php echo e(old('name')); ?>" id="name"
                          class="form-control fl_input"
                          required>
              
           </div>
        
            <div class="form-group  fl_wrap">
            <label class="fl_label" for="email"><?php echo e(trans('public.email')); ?></label>
            <input type="text" name="email" value="<?php echo e(old('email')); ?>" id="email"
                   class="form-control fl_input" required>
        </div> 
             
        <div class="form-group  fl_wrap">
                   <label class="fl_label" for="phone"><?php echo e(trans('public.phone')); ?></label>
                   <input type="number" name="phone" value="<?php echo e(old('phone')); ?>" id="phone"
                          class="form-control fl_input" required>
               </div> 
          
          <div class="form-group fl_wrap ">
               <label class="fl_label" for="message"><?php echo e(trans('public.message')); ?></label>
               <textarea type="text" name="message" value="<?php echo e(old('message')); ?>" id="message"
                         class="form-control fl_input"
                         required></textarea>
           </div> 
           <div class="form-group text-center mt-5">
               <button type="submit" value="save" id="save" class="btn btn-warning"
                       style="color: white;background:  #DE7778;; border-color:  #DE7778; width:100%" ><?php echo e(trans('public.send')); ?></button>
           </div>
           <div class="form-group col-xs-12">
               <div class="message">
                   <div class="divide-xs"></div>
                   <div class="alert"></div>
               </div>
           </div>
           <?php echo e(Form::close()); ?>

       </div>
        <div class="col-lg-3"></div>

    </div>
</div>
    

</section>

    <style>
        .custom-select:focus {
            border-color: #248CC8 !important;
            outline: 0;
            box-shadow: unset !important;
        }

        .custom-select {
            border: 1px solid #248CC8 !important;
        }
        .form-group input ,.form-group textarea ,.form-group button{
            box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;
           border-radius: 10px;
        }
        textarea {
        height: 200px !important;
     }
    </style>
   


<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make( 'jquery.ajax', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>