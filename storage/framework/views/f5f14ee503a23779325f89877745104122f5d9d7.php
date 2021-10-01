<?php $__env->startSection('content'); ?>

<section class="profile">
    <div class="page-links" data-aos="fade-down">
        <a href="<?php echo e(route('home')); ?>">Main page</a>
        <a class="page-links-active" href="#">Profile Page</a>
    </div>
    <div class="profile-container">
        <div class="profile-container-inner">
            <div class="profile-user-content" data-aos="fade-down" data-aos-delay="900">
                <div class="profile-user-img">
                    <img src="/assets/images/profile-img.png" alt="">
                </div>
                <div class="profile-user-text">
                    <div class="profile-user-welcome">
                        <p>WELCOME</p>
                    </div>
                    <div class="profile-user-name">
                        <?php if(auth()->guard()->check()): ?>
                            <p><?php echo e(auth()->user()->name . ' ' . auth()->user()->lastname); ?></p>
                        <?php else: ?>
                            <p>Mariam Kartvelishvili</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="profile-user-options">
                <div class="profile-user-option-item" data-aos-delay="1100" data-aos="flip-right">
                    <div class="profile-user-option-item-img">
                        <img src="/assets/images/profile-icon1.png" alt="">
                    </div>
                    <div class="profile-user-option-title">
                        <a href="#">
                            Edit Profile
                            Photo
                        </a>
                    </div>
                </div>
                <div class="profile-user-option-item" data-aos-delay="1200" data-aos="flip-left">
                    <div class="profile-user-option-item-img">
                        <img src="/assets/images/profile-icon2.png" alt="">
                    </div>
                    <div class="profile-user-option-title">
                        <a href="#">
                            Edit Main
                            Information
                        </a>
                    </div>
                </div>
                <div class="profile-user-option-item" data-aos-delay="1300" data-aos="flip-right">
                    <div class="profile-user-option-item-img">
                        <img src="/assets/images/profile-icon3.png" alt="">
                    </div>
                    <div class="profile-user-option-title">
                        <a href="#">
                            Edit E-Mail
                        </a>
                    </div>
                </div>
                <div class="profile-user-option-item " data-aos-delay="1400" data-aos="flip-left">
                    <div class="profile-user-option-item-img">
                        <img src="/assets/images/profile-icon4.png" alt="">
                    </div>
                    <div class="profile-user-option-title">
                        <a href="#">
                            Payment
                            History
                        </a>
                    </div>
                </div>

            </div>
            <div class="log-out-container" data-aos="fade-up" data-aos-delay="1500">
                <div class="log-out-btn">
                    <button onclick="window.location.href = '/logout'" type="submit">
                        Log out
                    </button>
                    <img src="/assets/images/Icon feather-log-out.png" alt="">
                </div>
            </div>

        </div>
    </div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u345985833/domains/arttteo.com/public_html/demoweb/resources/views/pages/profile.blade.php ENDPATH**/ ?>