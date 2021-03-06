<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $__env->yieldContent("title"); ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('assets')); ?>/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('assets')); ?>/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <?php echo $__env->yieldContent("head"); ?>
</head>

<body id="page-top">

<?php echo $__env->make("admin.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldSection(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('foot'); ?>

</body>
</html>
<?php /**PATH /Users/ademclk/PhpstormProjects/testapp/resources/views/layouts/adminbase.blade.php ENDPATH**/ ?>