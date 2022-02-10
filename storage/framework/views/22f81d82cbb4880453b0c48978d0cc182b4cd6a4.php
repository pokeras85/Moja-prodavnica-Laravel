<?php $__env->startSection('title'); ?>
    Categories
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Categories</h4>
            <?php $__env->startSection('status'); ?>
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
            <?php $__env->stopSection(); ?>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th >Order #</th>
                                <th class="col-6">Category name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($category->name); ?></td>
                                <td>
                                    <a href="<?php echo e(route('EditCategory',$category->id)); ?>" class="btn btn-outline-primary">edit</a>
                                    &nbsp
                                    <a onclick="return confirm('Are you sure?')" href="<?php echo e(route('DeleteCategory',$category->id)); ?>" class="btn btn-outline-danger">delete</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('public/Backend/js/data-table.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.izgled.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/admin/ShowCategory.blade.php ENDPATH**/ ?>