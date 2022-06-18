<?php if(has('success')): ?>
<div class="container mx-4 my-2">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(flash('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php endif; ?>

<?php if(has('fail')): ?>
<div class="container mx-4 my-2">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(flash('fail')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php endif; ?>

<?php if(has('auth')): ?>
<div class="container mx-4 my-2">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(flash('auth')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\sample projects\blog\resources\views/includes/messages.blade.php ENDPATH**/ ?>