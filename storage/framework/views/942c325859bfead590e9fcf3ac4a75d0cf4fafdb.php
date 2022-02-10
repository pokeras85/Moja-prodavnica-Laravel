<?php $__env->startSection('title'); ?>
    Create
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Edit products</h1>


    <form action="<?php echo e(route('update', $products->id)); ?>" method="POST" class="form horizontal">

        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text"name="name" class="form-control" id="exampleFormControlInput1" value="<?php echo e($products->name); ?>" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input type="number"name="price" class="form-control" id="exampleFormControlInput1" value="<?php echo e($products->price); ?>" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required><?php echo e($products->description); ?></textarea>
        </div>

        <input type="submit" class="btn btn-primary" name="submit" value="Update">
    </form>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('izgled.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/pages/edit.blade.php ENDPATH**/ ?>