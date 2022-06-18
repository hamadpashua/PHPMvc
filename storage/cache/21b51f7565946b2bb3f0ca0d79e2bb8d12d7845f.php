
<?php $__env->startSection('title', 'post-index-Page'); ?>
<?php $__env->startSection('content'); ?>

<main class="container-fluid">
    <div class="row my-4">

        
        <div class="col-md-8 mx-auto">
            <div class="row my-4">
                <div class="col-md-2">
                    <img src="<?php echo e(asset('images/defaults/p_avatar.jpg')); ?> " width="130" height="130" class="rounded-circle" >
                </div>
                <div class="col-md-10">
                    <h3>The Labor Force in Tanzania</h3>
                    <p> <span class="fa fa-user"> </span> Hamad | <span class="far fa-calendar"></span> 23 July, 2022 | <span class="far fa-comment-alt"></span> 34 </p> 
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <p class="my-2"><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
            </div>
        </div>

        
        <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div> 
</main>

<?php $__env->stopSection(); ?>





 

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sample projects\blog\resources\views/posts/index.blade.php ENDPATH**/ ?>