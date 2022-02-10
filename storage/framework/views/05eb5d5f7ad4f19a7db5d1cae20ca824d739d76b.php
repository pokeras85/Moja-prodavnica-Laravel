<?php $__env->startSection('title'); ?>
    Edit products
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit products</h4>

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

                    <form class="cmxform" id="commentForm" enctype="multipart/form-data" method="POST" action="<?php echo e(route('UpdateProduct', $products->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <fieldset>
                            <div class="form-group">
                                <label for="cname">Product name</label>
                                <input id="cname" class="form-control" name="name" minlength="2" type="text" value="<?php echo e($products->name); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="cname">Price</label>
                                <input id="cname" class="form-control" name="price" minlength="2" type="number" value="<?php echo e($products->price); ?>" required>
                            </div>
                            <div class="form-group">
                                <label id= "sakri" for="cname">Old image: <?php echo e($products->image); ?> </label>
                                <br>
                                <label for="cname">Chose new images</label>
                                <input id="cname" onclick='document.getElementById("sakri").style.visibility = "hidden";' class="form-control"name="image"  type="file">
                            </div>
                            <div class="form-group">
                                <label for="cname">Choice category</label>
                                <select id="cname" class="form-control" name="category"  required>
                                    <option>Odaberi kategoriju</option>
                                    <?php echo e($categories = \App\Category::all()); ?>

                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if($category->name==$products->category): ?> selected <?php endif; ?>"><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cname">Status</label>
                                <input id="cname" class="form-control" name="status"  type="checkbox" <?php if($products->status == "on"): ?>  checked <?php endif; ?>>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="UPDATE">
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


<?php echo $__env->make('admin.izgled.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/admin/EditProduct.blade.php ENDPATH**/ ?>