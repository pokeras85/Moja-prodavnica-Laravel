<?php $__env->startSection('title'); ?>
    Services
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <h1>Welcome to <?php echo e($products->name); ?></h1>


        <div class="well">
            <h1><?php echo e($products->name); ?> </h1>
            <h3><?php echo e($products->price); ?> dinara/kg </h3>
            <p> <?php echo e($products->description); ?></p>

            <a href="/E-commerce/MojaProdavnica/edit/<?php echo e($products->id); ?>" class="btn btn-primary"> Edit</a>
            <a onclick="return confirm('Are you sure?')" href="/E-commerce/MojaProdavnica/delete/<?php echo e($products->id); ?>" class="btn btn-danger"> Delete</a>
        </div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('izgled.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/pages/show.blade.php ENDPATH**/ ?>