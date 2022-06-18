
<?php $__env->startSection('title', 'accountSetting-Page'); ?>
<?php $__env->startSection('content'); ?>

<main class="container-fluid">
    <div class="row my-4">

        
        <div class="col-md-8 mx-auto">
            <div class="row my-4 border p-3">
                <h3 class="border-bottom pb-2 my-4">Account Settings</h3>
              <div class="list-group">
                  <a href="#" class="text-decoration-none list-group-item-action h5"> General Settings</a>
                  <a href="#" class="text-decoration-none list-group-item-action h5"> Privacy & Security</a>
              </div>
            </div>
        </div>

        
        <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div> 
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sample projects\blog\resources\views/auth/accountSetting.blade.php ENDPATH**/ ?>