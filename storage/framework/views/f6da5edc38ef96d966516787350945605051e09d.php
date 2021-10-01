
<?php $__env->startSection('content'); ?>
<div class="auth" data-aos="fade-in" data-aos-duration="2000" >
        <div class="left">
            <div class="left-content">
                <div class="left-top">
                    <img src="/assets/images/humanaClub/logo.png" alt="">
                    <div class="text">
                        <h2>მოგესალმებათ</h2>
                        <h1>ჰუმანა ქლაბი</h1>
                    </div>
                </div>
                <div class="left-middle">
                    <p>
                        დარეგისტრირდი და მიიღე წვდომა 
                        ყველა სერვისზე ერთი ანგარიშით
                    </p>
                </div>

                <div class="left-bottom">
                    <div class="register-btn">
                        <a href="<?php echo e(route('register_page')); ?>" class="register" id="register">
                            რეგისტრაცია
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="right login-field" data-aos="fade-up" data-aos-duration="2000">
            <div class="login-wrapper">
                <div class="login-container">
                    <div class="login-title">
                        <h1>ავტორიზაცია</h1>
                    </div>
                    <form action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="input-wrapper">
                            <img src="/assets/images/humanaClub/auth/email.png" alt="">
                            <input type="email" name="email" placeholder="ელ.ფოსტა">
                        </div>
                        <div class="input-wrapper">
                            <img src="/assets/images/humanaClub/auth/password.png" alt="">
                            <input type="password" name="password" placeholder="პაროლი">
                            <div class="custom-checkbox">
                                <label for="passwordVisible">
                                    <input type="checkbox" id="passwordVisible">
                                    <img src="/assets/images/humanaClub/auth/show.png" alt="">
                                </label>
                            </div>
                        </div>
                        <div class="forgot-password">
                            <a class="" href="">დაგავიწყდა პაროლი?</a>
                        </div>
                        <input type="submit" value="შესვლა">
                    </form>
                    <div class="border">
                        <span>ან</span>
                    </div>

                    <div class="loginWith">
                        <a href="">
                            <div class="wrap">
                                <img src="/assets/images/humanaClub/auth/facebook.png" alt="">
                                <span>გააგრძელე FACEBOOK-ით</span>
                            </div>
                            <img src="/assets/images/humanaClub/auth/arrow_right.png" alt="">
                        </a>

                        <a href="">
                            <div class="wrap">
                                <img src="/assets/images/humanaClub/auth/google.png" alt="">
                                <span>გააგრძელე GOOGLE-ით</span>
                            </div>
                            <img src="/assets/images/humanaClub/auth/arrow_right.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('script'); ?>
        <script src="/assets/scripts/humanaClub/auth/auth.js"></script>

    <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.humana_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\shalva\Desktop\3d_face\resources\views/club/login.blade.php ENDPATH**/ ?>