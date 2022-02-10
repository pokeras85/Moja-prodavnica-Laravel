<?php $__env->startSection('title'); ?>
    Create
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Create products</h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(url('/saveproduct')); ?>" method="POST" class="form horizontal" enctype="multipart/form-data">

        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text"name="name" class="form-control" id="exampleFormControlInput1" placeholder="name" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input type="number"name="price" class="form-control" id="exampleFormControlInput1" placeholder="Price" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Add image</label>
            <input type="file" name="filename"  id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>

        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('izgled.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/pages/create.blade.php ENDPATH**/ ?>