 <?php if( Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\HomeController@index'): ?>
<style>
header{
    margin-top: 92px;
    height: 657px;
    background:#F0F0F0;
}
</style>

<div class="nav-sm">
    
</div>
<?php echo $__env->make('includes.navbar-row', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<header>
    <div class="carousel-col">
        <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</header>


<?php $__env->startPush('scripts'); ?>
    <script>
        $(".nav-item").on("click", function (e) {
            $("li.nav-item").removeClass("active");
            $(this).addClass("active");
        });
    </script>
<?php $__env->stopPush(); ?>

<?php else: ?>

<?php echo $__env->make('includes.navbar-row', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php endif; ?>
