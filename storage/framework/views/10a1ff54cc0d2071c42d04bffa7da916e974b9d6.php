<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(asset('public/Backend/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/Backend/css/vendor.bundle.base.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/Backend/css/vendor.bundle.addons.css')); ?>">
    <!-- endinject -->
    <!-- plugin css for this page -->

    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo e(asset('public/Backend/css/style.css')); ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo e(asset('public/Backend/images/logo_2H_tech.png')); ?>" >
</head>
<body>
<div class="container-scroller">
<!-- nav bar -->
<?php echo $__env->make('admin.include.NavAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid page-body-wrapper">
    <!--Sidebar-->
    <?php echo $__env->make('admin.include.NavbarAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--main part which is change -->
    <div class="main-panel">
        <div class="content-wrapper">
        <?php echo $__env->yieldContent('status'); ?>
<?php echo $__env->yieldContent('content'); ?>

<!--footer -->
    <?php echo $__env->make('admin.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>


</div>
</div>
<!-- plugins:js -->
<script src="<?php echo e(asset('public/Backend/js/vendor.bundle.base.js')); ?>"></script>
<script src="<?php echo e(asset('public/Backend/js/vendor.bundle.addons.js')); ?>"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?php echo e(asset('public/Backend/js/off-canvas.js')); ?>"></script>
<script src="<?php echo e(asset('public/Backend/js/hoverable-collapse.js')); ?>"></script>
<script src="<?php echo e(asset('public/Backend/js/template.js')); ?>"></script>
<script src="<?php echo e(asset('public/Backend/js/settings.js')); ?>"></script>
<script src="<?php echo e(asset('public/Backend/js/todolist.js')); ?>"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo e(asset('public/Backend/js/dashboard.js')); ?>"></script>
<!-- End custom js for this page-->
<?php echo $__env->yieldContent('script'); ?>

</body>

</html>
<?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/admin/izgled/app.blade.php ENDPATH**/ ?>