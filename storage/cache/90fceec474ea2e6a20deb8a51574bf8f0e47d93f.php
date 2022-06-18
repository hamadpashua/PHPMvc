<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/all.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/carousel.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="icon" href="<?php echo e(asset('favicon/policelogo-1-150x150.jpg')); ?>">
    <meta name="description" content="">
    <meta name="author" content="Hamad Pashua, Sailor Entertainment, Company">
    <meta name="generator" content="Sailor Framework 0.00.1">
    <meta name="theme-color" content="#7952b3">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    
    <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container my-5">
        <?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <div class="container mt-5">
        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>


    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sample projects\blog\resources\views/base.blade.php ENDPATH**/ ?>