<?php $__env->startSection('title'); ?>
Add products
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create products</h4>

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

                    <form class="cmxform" id="commentForm" enctype="multipart/form-data" method="POST" action="<?php echo e(url('/admin/product/store')); ?>">
                        <?php echo csrf_field(); ?>
                        <fieldset>
                            <div class="form-group">
                                <label for="cname">Product name</label>
                                <input id="cname" class="form-control" name="name" minlength="2" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="cname">Price</label>
                                <input id="cname" class="form-control" name="price" minlength="2" type="number" required>
                            </div>
                            <div class="form-group">
                                <label for="cname">Product image</label>
                                <input id="cname"  name="image" minlength="2" type="file">
                            </div>
                            <div class="form-group">
                                <label for="cname">Choice category</label>
                                <select id="cname" class="form-control" name="category"  required>
                                    <option>Odaberi kategoriju</option>
                                    <?php echo e($categories = \App\Category::all()); ?>

                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cname">Status</label>
                                <input id="cname" class="form-control" name="status"  type="checkbox">
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="ADD">
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

<?php echo $__env->make('admin.izgled.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/admin/AddProducts.blade.php ENDPATH**/ ?>