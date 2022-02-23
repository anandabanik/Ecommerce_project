<!DOCTYPE html>
<html lang="en">

<!-- molla/index-13.html  22 Nov 2019 09:59:06 GMT -->
<head>

    <?php echo $__env->make('front.includes.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->make('front.includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>
<div class="page-wrapper">

    <?php echo $__env->make('front.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('body'); ?>


    <?php echo $__env->make('front.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('front.includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>


<!-- molla/index-13.html  22 Nov 2019 09:59:31 GMT -->
</html>
<?php /**PATH C:\xampp\htdocs\ecomfinal616\ecom\resources\views/front/master.blade.php ENDPATH**/ ?>