<?php $__env->startSection('title'); ?>
    Sliders
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Sliders</h4>

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
                                <th>Number</th>
                                <th>Description one</th>
                                <th>Description two</th>
                                <th>Slider image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($slider->description1); ?></td>
                                <td><?php echo e($slider->description2); ?></td>
                                <td><?php echo e($slider->Slider_image); ?></td>
                                <td>
                                    <?php if($slider->status==1): ?>
                                        <label class="badge badge-success">Active</label>
                                    <?php else: ?>
                                        <label class="badge badge-danger">Unactive</label>
                                        <?php endif; ?>
                                </td>

                                <td>
                                    <button class="btn btn-outline-primary" onclick="window.location='<?php echo e(url('/admin/slider/edit/'.$slider->id)); ?>'">Edit</button>

                                    <button class="btn btn-outline-danger"  onclick="return confirm('Delete this?') , window.location='<?php echo e(url('/admin/slider/destroy/'.$slider->id)); ?>'">Delete</button>

                                    <?php if($slider->status==0): ?>
                                        <button class="btn btn-outline-success" onclick="window.location='<?php echo e(url('/admin/slider/activate/'.$slider->id)); ?>'">Activate</button>
                                    <?php else: ?>
                                        <button class="btn btn-outline-danger" onclick="window.location='<?php echo e(url('/admin/slider/unactivate/'.$slider->id)); ?>'">Unactivate</button>
                                    <?php endif; ?>
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



<?php echo $__env->make('admin.izgled.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/admin/ShowSlider.blade.php ENDPATH**/ ?>