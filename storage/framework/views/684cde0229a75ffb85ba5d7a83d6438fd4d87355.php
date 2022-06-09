<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent("title"); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="<?php echo e(asset('assets')); ?>/img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="<?php echo e(asset('assets')); ?>/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('assets')); ?>/css/style.min.css" rel="stylesheet">
    <?php echo $__env->yieldContent("head"); ?>
</head>

<body>
<?php echo $__env->make("home.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('slider'); ?>
<?php echo $__env->yieldSection(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make("home.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('foot'); ?>
</body>
</html>
<?php /**PATH /Users/ademclk/PhpstormProjects/testapp/resources/views/layouts/frontbase.blade.php ENDPATH**/ ?>