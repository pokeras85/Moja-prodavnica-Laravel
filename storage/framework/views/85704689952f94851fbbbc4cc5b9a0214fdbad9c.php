<?php $__env->startSection('title'); ?>
    Services
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <h1>Welcome to the services page</h1>

    <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="well">
    <h1><a href="/E-commerce/MojaProdavnica/show/<?php echo e($product->id); ?>"> <?php echo e($product->name); ?> </a> </h1>
    <h3><?php echo e($product->price); ?></h3>
</div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($products->links()); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('izgled.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/pages/services.blade.php ENDPATH**/ ?>