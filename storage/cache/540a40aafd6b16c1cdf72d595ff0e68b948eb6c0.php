
<?php $__env->startSection('title', 'post-create-Page'); ?>
<?php $__env->startSection('content'); ?>

<main class="container-fluid">
    <div class="row my-4">

        
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><h5>Create new Post</h5></div>
                </div>
                <div class="card-body">
                <form>           
                     <div class="form-group mb-3">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="title">
                     </div>           
                     <div class="form-group mb-3">
                        <label for="body" class="form-label">Body/Description <span class="text-danger">*</span> </label>
                        <textarea class="form-control" rows="10" name="body" id="body" placeholder="Enter the post here"></textarea>
                     </div>        
                     <div class="form-group mb-3">
                        <button class="btn btn-success">Create Post</button>
                     </div>
                </form>
                </div>
            </div>
        </div>

        
        <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div> 
</main>

<?php $__env->stopSection(); ?>





 

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sample projects\blog\resources\views/posts/create.blade.php ENDPATH**/ ?>