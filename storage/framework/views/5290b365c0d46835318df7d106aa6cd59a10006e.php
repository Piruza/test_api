

<?php $__env->startSection('content'); ?>
    <section class="reg payment_section">
            <div class="page-links" data-aos="fade-down">
                <a href="<?php echo e(route('home')); ?>">Main page</a>
                <a class="page-links-active" href="#">Order</a>
            </div>
            <div class="registration-steps payment-steps" data-aos="fade-up" data-aos-delay="800">
                <div class="registration-step-item">
                    <div class="registration-step-item-subtitle">
                        <p>Step 1</p>
                    </div>
                    <div class="registration-step-item-title active-step-title">
                        <p>ORDER</p>
                    </div>
                </div>
                <div class="registration-step-item">
                    <div class="registration-step-item-subtitle">
                        <p>Step 2</p>
                    </div>
                    <div class="registration-step-item-title">
                        <p>PAYMENT</p>
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
            <div class="payment">
                <div class="payment-packages">
                    <div class="payment-packages-details" data-aos="fade-down" data-aos-delay="900">
                        <div class="payment-packages-details-item">
                            <p>Packages</p>
                        </div>
                        <div class="payment-packages-details-item">
                            <p>Name & Description</p>
                        </div>
                        <div class="payment-packages-details-item">
                            <p>Prices</p>
                        </div>
                    </div>
                    <div class="payment-package-container" data-aos="fade-right" data-aos-delay="1300">
                        <div class="payment-package-item active" >
                            <div class="payment-package-item-img">
                                <img src="./assets/images/payment-mobile.png" alt="">
                            </div>
                            <div class="payment-package-item-content">
                                <div class="payment-package-item-content-title">
                                    <p>Package 1</p>
                                </div>
                                <div class="payment-package-item-content-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and 
                                        typesetting industry. Lorem Ipsum has been the industry's standard
                                         dummy text ever since the 1500s, when an unknown printer took a galley
                                          of type and scrambled it to make a type specimen book. It has survived 
                                          not only five centuries, but also the leap into 
                                        electronic typesetting, remaining essentially unchanged
                                    </p>
                                </div>
                            </div>
                            <div class="payment-package-item-price">
                               <p>149.99</p>
                               <span>GEL</span>
                            </div>
                        </div>
                        <div class="payment-package-item" >
                            <div class="payment-package-item-img">
                                <img src="./assets/images/payment-mobile.png" alt="">
                            </div>
                            <div class="payment-package-item-content">
                                <div class="payment-package-item-content-title">
                                    <p>Package 1</p>
                                </div>
                                <div class="payment-package-item-content-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and 
                                        typesetting industry. Lorem Ipsum has been the industry's standard
                                         dummy text ever since the 1500s, when an unknown printer took a galley
                                          of type and scrambled it to make a type specimen book. It has survived 
                                          not only five centuries, but also the leap into 
                                        electronic typesetting, remaining essentially unchanged
                                    </p>
                                </div>
                            </div>
                            <div class="payment-package-item-price">
                               <p>149.99</p>
                               <span>GEL</span>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="payment-summary" data-aos="fade-up" data-aos-delay="1450">
                    <div class="payment-summary-inner">
                        <div class="payment-summary-inner-title">
                            <p>SUMMARY</p>
                        </div>
                        <div class="payment-summary-inner-package mt">
                            <p>Package 1</p>
                            <p>54.00GEL</p>
                        </div>
                        <div class="payment-summary-inner-package">
                            <p>Service fee </p>
                            <p>0.00GEL</p>
                        </div>
                        <div class="payment-summary-inner-btn">
                                <a href="">Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\shalva\Desktop\3d_face\resources\views/pages/order.blade.php ENDPATH**/ ?>