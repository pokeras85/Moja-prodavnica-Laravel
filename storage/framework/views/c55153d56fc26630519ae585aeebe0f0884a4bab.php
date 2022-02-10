
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>">Vegefoods</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="<?php echo e(URL::to('/')); ?>" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="<?php echo e(URL::to('/shop')); ?>" class="nav-link">shop</a></li>
                <li class="nav-item cta cta-colored"><a href="<?php echo e(URL::to('/cart')); ?>" class="nav-link"><span class="icon-shopping_cart"></span>[<?php echo e(Session::has('cart')?Session::get('cart')->totalQty:0); ?>]</a></li>
                <?php if(Session::has('client')): ?>
                <li class="nav-item active"><a href="<?php echo e(URL::to('/logout')); ?>" class="nav-link">logout</a></li>
                <?php else: ?>
                    <li class="nav-item active"><a href="/E-commerce/MojaProdavnica/login" class="nav-link">login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\wamp64\www\E-commerce\MojaProdavnica\resources\views/include/client/nav.blade.php ENDPATH**/ ?>