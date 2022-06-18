
<?php $__env->startSection('title', 'Index-Page'); ?>
<?php $__env->startSection('content'); ?>
    <h3>Welcome to SaiLite MvcPHP Framework</h3>
    <form action="<?php echo e(url('/HomeController/create')); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="test">Test</label>
            <input type="text" name="test" class="form-control <?php if($errors && $errors->has('test')): ?> is-invalid <?php endif; ?>" value="<?php echo e($old?$old['test']:''); ?>">
            <?php if($errors && $errors->has('test')): ?>
                <div class="invalid-feedback"><?php echo e($errors->first('test')); ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group mb-3">
            <label for="file">File</label>
            <input type="file" name="file" class="form-control <?php if($errors && $errors->has('file')): ?> is-invalid <?php endif; ?>">
            <?php if($errors && $errors->has('file')): ?>
                <div class="invalid-feedback"><?php echo e($errors->first('file')); ?></div>
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Test validations</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sample projects\blog\resources\views/home/index.blade.php ENDPATH**/ ?>