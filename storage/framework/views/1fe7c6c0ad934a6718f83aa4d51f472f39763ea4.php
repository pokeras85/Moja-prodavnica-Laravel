<?php $__env->startSection('title'); ?>
Orders
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <?php if(Session::has('error')): ?>
<div class="alert alert-danger"><?php echo e(Session::get('error')); ?></div>
    <?php endif; ?>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Orders</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>Order #</th>
                                <th>Client name</th>
                                <th>Address</th>
                                <th>Products</th>
                                <th>Payment_id</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($order->name); ?></td>
                                <td><?php echo e($order->address); ?></td>
                                <td>
                                    <?php $__currentLoopData = $order->cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($item['product_name'].','); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td><?php echo e($order->payment_id); ?></td>
                                <td>
                                    <button class="btn btn-outline-primary" onclick="window.location='<?php echo e(url('/view_pdf/'.$order->id)); ?>'">View</button>
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


<?php echo $__env->make('admin.izgled.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/admin/orders.blade.php ENDPATH**/ ?>