<!------ Include the above in your HEAD tag ---------->


<?php $__env->startSection('title'); ?>
    login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="login">
    <h3 class="text-center text-white pt-5">Welcome</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">

                    <form id="login-form" class="form" action="<?php echo e(URL::to('/loginAccount')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <h3 class="text-center text-info">Login</h3>
                        <?php if(Session::has('status')): ?>
                            <div class="alert-danger">   <?php echo e(Session::get('status')); ?> </div>
                        <?php endif; ?>
                        <?php if(count($errors)>0): ?>
                            <div class="alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                </ul>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="email" class="text-info">Email:</label><br>
                            <input type="text" name="email" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="<?php echo e(URL::to('/register')); ?>" class="text-info">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('izgled.apl', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/client/login.blade.php ENDPATH**/ ?>