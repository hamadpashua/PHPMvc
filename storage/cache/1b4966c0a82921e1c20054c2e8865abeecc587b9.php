
<?php $__env->startSection('title', 'changePassword-Page'); ?>
<?php $__env->startSection('content'); ?>

<main class="container-fluid">
    <div class="row my-4">

        
        <div class="col-md-8 mx-auto">
            <div class="row my-4 border p-3">
                <h4 class="border-bottom pb-2 my-4">Change Password</h4>
                <form>           
                     <div class="form-group mb-3">
                        <label for="password" class="form-label">Current Password <span class="text-danger">*</span> </label>
                        <input type="password" class="form-control" name="password" id="password">
                            <div class="text-muted">Enter the current used password</div>
                     </div>           
                     <div class="form-group mb-3">
                        <label for="new-password" class="form-label">New Password <span class="text-danger">*</span> </label>
                        <input type="password" class="form-control" name="new-password" id="new-password">
                     </div>            
                     <div class="form-group mb-3">
                        <label for="confirm-password" class="form-label">Confirm New Password <span class="text-danger">*</span> </label>
                        <input type="password" class="form-control" name="confirm-password" id="confirm-password">
                     </div>       
                     <div class="form-group mb-3">
                        <button class="btn btn-outline-success">Change Password</button>
                     </div>

                </form>
            </div>
        </div>

        
        <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div> 
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sample projects\blog\resources\views/auth/changePassword.blade.php ENDPATH**/ ?>