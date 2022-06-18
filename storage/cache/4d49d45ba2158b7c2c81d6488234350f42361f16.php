
<?php $__env->startSection('title', 'profile-Page'); ?>
<?php $__env->startSection('content'); ?>

<main class="container-fluid">
    <div class="row my-4">

        
        <div class="col-md-8 mx-auto">
            <div class="row my-4 border p-3">
                <div class="col-md-2">
                    <img src="<?php echo e(asset('images/defaults/p_avatar.jpg')); ?> " width="130" height="130" class="rounded-circle" >
                </div>
                <div class="col-md-10 my-auto">
                    <h3>Hamad Pashua</h3>
                    <p class="mb-0"> <span class="fa fa-envelope"> </span> hamadpashua7@gmail.com </p> 
                    <p> <span class="fa fa-phone"> </span> +255 755 288462</p> 
                </div>
                <h4 class="border-bottom pb-2 my-4">Profile Info</h4>
                <form>           
                     <div class="form-group mb-3">
                        <label for="name" class="form-label">Username <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" name="name" id="name" value="hamadpashua">
                            <div class="text-muted">Enter valid username with 150 character</div>
                     </div>           
                     <div class="form-group mb-3">
                        <label for="email" class="form-label">Email Address <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" name="email" id="email" value="hamadpashua7@gmail.com">
                     </div>          
                     <div class="form-group mb-3">
                        <label for="email" class="form-label">Image <span class="text-danger">*</span> </label><br>
                        Current Image: <a href="#">images/defaults/p_avatar.jpg</a><br>
                        Change: <input type="file" class="" name="file" id="file">
                     </div>       
                     <div class="form-group mb-3">
                        <button class="btn btn-success">Update Profile</button>
                     </div>

                </form>
            </div>
        </div>

        
        <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div> 
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sample projects\blog\resources\views/auth/profile.blade.php ENDPATH**/ ?>