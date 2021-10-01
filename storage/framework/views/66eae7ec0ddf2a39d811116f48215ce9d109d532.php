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
                <a href="<?php echo e(route('functions')); ?>">Functions</a>
            </div>
            <div class="top-nav-item">
                <a href="#">Products</a>
            </div>
            <div class="top-nav-item">
                <a href="<?php echo e(route('gallery')); ?>">Gallery</a>
            </div>
        </div>
        <div class="top-fixed-icons">
            <div class="top-icon-item">
                <?php if(auth()->guard()->check()): ?>
                    <div class="user-profile">
                        <a href="<?php echo e(route('profile')); ?>">
                            <img src="/assets/images/user-sm.png" alt="">
                        </a>
                    </div>
                <?php else: ?>
                    <a href="<?php echo e(route('login_page')); ?>">
                        <img src="/assets/images/Icon feather-user.png" alt="">
                    </a>
                <?php endif; ?>
            </div>
            <!-- <div class="top-icon-item">
                <a href="">
                    <img src="/assets/images/search.png" alt="">
                </a>
            </div> -->
        </div>
    </div>
</div><?php /**PATH /home/u345985833/domains/arttteo.com/public_html/demoweb/resources/views/components/header.blade.php ENDPATH**/ ?>