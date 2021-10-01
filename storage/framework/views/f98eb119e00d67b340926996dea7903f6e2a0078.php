

<?php $__env->startSection('content'); ?>

    <section class="reg">
            <div class="page-links" data-aos="fade-down">
                <a href="./index.html">Main page</a>
                <a class="page-links-active" href="#">Authorization</a>
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
                    <div class="registration-main-section-title"  data-aos="fade-right" data-aos-delay="1100">
                        <p>For Authorization enter the information below correctly</p>
                    </div>
                    <form action="<?php echo e(route('login')); ?>" method="POST" class="reg-main-section" data-aos="fade-left"  data-aos-delay="1400" >
                        <?php echo csrf_field(); ?>
                        <div class="reg-main-section-input ">
                            <input type="email" name="email" id="" placeholder="Enter E-Mail" class="login-input">
                        </div>
                        <div class="reg-main-section-input ">
                            <input type="password" name="password" id="" placeholder="Enter password"  class="login-input">
                        </div>
                        
                        <div class="reg-main-section-submit" >                     
                            <div class="reg-main-section-submit-item">
                                <button type="button" onclick="window.location.href = '/register'" >Register</button>
                            </div>
                            <div class="reg-main-section-submit-back">
                                <button type="submit">Log in</button>
                            </div>
                        </div>
                    </form>
                </div>
               
            </div>
        </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u345985833/domains/arttteo.com/public_html/demoweb/resources/views/pages/login.blade.php ENDPATH**/ ?>