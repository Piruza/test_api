<div class="top-fixed-navigation">
    <div class="top-fixed-navigation-inner">
        <div class="top-fixed-nav">
            <div class="top-nav-item">
                <a href="<?php echo e(route('home')); ?>">Home</a>
            </div>
            <div class="top-nav-item">
                <a href="#">Demo Version</a>
            </div>
            <div class="top-nav-item">
                <a href="#">Functions</a>
            </div>
            <div class="top-nav-item">
                <a href="#">Products</a>
            </div>
            <div class="top-nav-item">
                <a href="#">Gallery</a>
            </div>
        </div>
        <div class="top-fixed-icons">
            <div class="top-icon-item">
                <?php if(auth()->guard()->check()): ?>
                    <p>
                        Welcome, <?php echo e(ucfirst(auth()->user()->name)); ?>

                    </p>
                    <a href="<?php echo e(route('logout')); ?>">Log Out</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login_page')); ?>">
                        <img src="/assets/images/Icon feather-user.png" alt="">
                    </a>
                <?php endif; ?>
            </div>
            <div class="top-icon-item">
                <a href="">
                    <img src="/assets/images/search.png" alt="">
                </a>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\shalva\Desktop\3d_face\resources\views/components/header.blade.php ENDPATH**/ ?>