<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php echo $__env->make('include.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">

<?php echo $__env->yieldContent('content'); ?>

</div>
</body>
</html>
<?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/izgled/app.blade.php ENDPATH**/ ?>