<?php $__env->startSection('title'); ?>
   Products
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data table</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Image</th>
                                        <th>Name product</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><img src="<?php echo e(asset('\public\storage\ProductImages/'.$product->image)); ?>" alt="No image"></td>
                                        <td><?php echo e($product->name); ?></td>
                                        <td><?php echo e($product->price); ?></td>
                                        <td><?php echo e($product->category); ?></td>
                                        <td>
                                            <?php if($product->status=='on'): ?>
                                            <label class="badge badge-success"><?php echo e($product->status); ?></label>
                                                <?php else: ?>
                                            <label class="badge badge-danger"><?php echo e($product->status); ?></label>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(url('/admin/product/edit/'.$product->id)); ?>" class="btn btn-outline-primary" id="delete">Edit</a>
                                            <a href="<?php echo e(url('/admin/product/destroy/'.$product->id)); ?>" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger"> Delete</a>
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

<?php echo $__env->make('admin.izgled.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/admin/ShowProducts.blade.php ENDPATH**/ ?>