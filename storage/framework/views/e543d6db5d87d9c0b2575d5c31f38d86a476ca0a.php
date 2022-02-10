<?php $__env->startSection('title'); ?>
    Add category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('status'); ?>

<?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create category</h4>
                <form class="cmxform" id="commentForm" method="POST" enctype="multipart/form-data" action="<?php echo e(url('/admin/category/store')); ?>" >
                    <?php echo csrf_field(); ?>
                    <fieldset>
                        <div class="form-group">
                            <label for="cname">Product category</label>
                            <input id="cname" class="form-control" name="name" minlength="2" type="text" required>
                            <br>
                            <input type="submit" class="btn btn-primary" name="submit" value="ADD">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('public/Backend/js/bt-maxLength.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.izgled.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/admin/AddCategory.blade.php ENDPATH**/ ?>