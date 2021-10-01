

<?php $__env->startSection('content'); ?>

<section class="reg">
    <div class="page-links" data-aos="fade-down">
        <a href="./index.html">Main page</a>
        <a class="page-links-active" href="#">Registration</a>
    </div>
    <div class="registration-steps" data-aos="fade-up" data-aos-delay="700">
        <div class="registration-step-item">
            <div class="registration-step-item-subtitle">
                <p>Step 1</p>
            </div>
            <div class="registration-step-item-title active-step-title">
                <p>REGISTRATION</p>
            </div>
        </div>
        <div class="registration-step-item">
            <div class="registration-step-item-subtitle">
                <p>Step 2</p>
            </div>
            <div class="registration-step-item-title">
                <p>VERIFICATION</p>
            </div>
        </div>
        <div class="registration-step-item">
            <div class="registration-step-item-subtitle">
                <p>Step 1</p>
            </div>
            <div class="registration-step-item-title">
                <p>FINISH</p>
            </div>
        </div>
    </div>
    <div class="registration-main-section">
        <div class="registration-main-section-images">
            <div class="registration-main-section-images-person" data-aos="fade-up" data-aos-delay="900">
                <img src="./assets/images/register-img.png" alt="" class="main_img rotate">
                <img src="./assets/images/reg-img.png" alt="" class="secondary_img">
            </div>
            <div class="registration-main-section-images-blurry">
                <img class="reg-blurr-img1" src="./assets/images/Gradient Shadow.png" alt="">
                <img class="reg-blurr-img2" src="./assets/images/Gradient Shadow.png" alt="">
                <img class="reg-blurr-img3" src="./assets/images/Gradient Shadow.png" alt="">
            </div>
        </div>
        <!-- REGISTRATION -->


        <div class="registration-main-section-content">
            <div class="registration-main-section-title" data-aos="fade-right" data-aos-delay="1100">
                <p>For registration enter the information below correctly</p>
            </div>
            <form action="<?php echo e(route('register')); ?>" method="POST" class="reg-main-section" data-aos="fade-left" data-aos-delay="1400">
                <?php echo csrf_field(); ?>
                <div class="reg-name-input-container">
                    <input type="text" name="name" id="" placeholder="First name">
                    <input type="text" name="lastname" id="" placeholder="Last name">
                </div>
                <div class="reg-main-section-input">
                    <input type="email" name="email" id="" placeholder="Enter E-Mail">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="reg-main-section-input">
                    <input type="number" name="phone" id="" placeholder="Phone">
                </div>
                <div class="reg-name-input-container">
                    <input type="password" autocomplete="off" name="password" id="" placeholder="Password">
                    <input type="password" autocomplete="off" name="re_password" id="" placeholder="Repeat Password">
                </div>
                <div class="reg-main-section-submit">
                    <div class="reg-main-section-submit-back">
                    <button type="button" onclick="window.location.href = '/'" >Go Back</button>
                    </div>
                    <div class="reg-main-section-submit-item">
                        <button type="submit">Register</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- //REGISTRATION -->

        <!-- VERIFICATION -->

        <!-- <div class="registration-main-section-verification" data-aos="fade-right" data-aos-delay="1100">
                    <div class="registration-verification-title">
                        <p>Please check your e-mail and enter the received
                            verification code
                        </p>
                    </div>
                    <form action="">
                        <div class="registration-verification-sms-code">
                            <div class="registration-verification-sms-code">
                                <input type="text" name="" id="" maxlength="1" ">
                            </div>
                            <div class="registration-verification-sms-code">
                                <input type="text" name="" id="" maxlength="1">
                            </div>
                            <div class="registration-verification-sms-code">
                                <input type="text" name="" id="" maxlength="1" >
                            </div>
                            <div class="registration-verification-sms-code">
                                <input type="text" name="" id=""  maxlength="1" >
                            </div>
                        </div>
                        <div class="registration-verification-timeout">
                            <span>1:34</span>
                            <p>Send again</p>
                        </div>
                        <div class="registration-verification-submit" data-aos="fade-left"  data-aos-delay="1400">
                            <input type="submit" value="Confrim">
                        </div>
                    </form>
                </div> -->

        <!-- //VERIFICATION -->

        <!-- FINISH -->

        <!-- <div class="registration-main-section-finish" data-aos="fade-right" data-aos-delay="1100">
                    <div class="registration-finish-img">
                        <img src="./assets/images/Success.png" alt="">
                    </div>
                    <div class="registration-finish-text">
                        <p>Registration has been 
                            successfully finished!
                        </p>
                    </div>
                    <div class="registration-verification-submit" data-aos="fade-left"  data-aos-delay="1400">
                        <input type="submit" value="Finish">
                    </div>
                </div> -->

        <!-- //FINISH -->
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\shalva\Desktop\3d_face\resources\views/pages/register.blade.php ENDPATH**/ ?>