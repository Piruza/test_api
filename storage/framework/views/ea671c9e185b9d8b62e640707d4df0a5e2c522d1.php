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
                        <div class="payment-package-item">
                            <div class="payment-package-item-img">
                                <img src="/assets/images/payment-mobile.png" alt="">
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
                        <div class="payment-package-item">
                            <div class="payment-package-item-img">
                                <img src="/assets/images/payment-mobile.png" alt="">
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
                    <!-- <div class="payment-summary-inner">
                        <div class="payment-summary-inner-title">
                            <p>SUMMARY</p>
                        </div>
                        <div class="payment-summary-inner-content">
                            <div class="payment-summary-inner-package mt">
                                <p>Package 1</p>
                                <p>54.00GEL</p>
                            </div>
                            <div class="payment-summary-inner-package">
                                <p>Service fee </p>
                                <p>0.00GEL</p>
                            </div>
                            <div class="payment-summary-inner-total">
                                <p>Total</p>
                                <p>54.00GEL</p>
                            </div>
                        </div>
                        
                        <div class="payment-summary-inner-btn">
                                <a href="">Order</a>
                        </div>
                    </div> -->


                    
                     <div class="payment-summary-details">
                        <div class="payment-summary-inner-title">
                            <p>PAYMENT DETAILS</p>
                        </div>
                        <div class="payment-summary-cards">
                            <div class="payment-summary-cards-item">
                                <img src="/assets/images/payment1.png" alt="">
                            </div>
                            <div class="payment-summary-cards-item">
                                <img src="/assets/images/payment2.png" alt="">
                            </div>
                            <div class="payment-summary-cards-item">
                                <img src="/assets/images/payment3.png" alt="">
                            </div>
                            <div class="payment-summary-cards-item">
                                <img src="/assets/images/payment4.png" alt="">
                            </div>
                        </div>
                        <div class="payment-summary-details-inputs">
                            <div class="payment-summary-details-inputs-item">
                                <label for="cardname">Name on card</label>
                                <input type="text" id="cardname" placeholder="Giorgi Giorgadze">
                            </div>
                            <div class="payment-summary-details-inputs-item">
                                <label for="cardname">Card number</label>
                                <input type="number" id="cardname" placeholder="1111 2222 3333 4444">
                            </div>
                            <div class="payment-summary-details-inputs-cvv">
                                <div class="payment-summary-expire">
                                    <label for="cardname">Expire date</label>
                                    <input type="number" id="cardname" placeholder="04/06/2021">
                                </div>
                                <div class="payment-summary-expire">
                                    <label for="cardname">CVV</label>
                                    <input type="number" id="cardname" placeholder="123">
                                </div>
                            </div>
                            <div class="payment-summary-details-checkbox">
                                    <p>Save credit card for the next payments</p>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                            </div>
                        </div>
                        <div class="payment-summary-inner-copy">
                            
                            <div class="payment-summary-inner-package mt">
                                <p>Package 1</p>
                                <p>54.00GEL</p>
                            </div>
                            <div class="payment-summary-inner-package">
                                <p>Service fee </p>
                                <p>0.00GEL</p>
                            </div>
                            <div class="payment-summary-inner-total">
                                <p>Total</p>
                                <p>54.00GEL</p>
                            </div>
                            <div class="payment-summary-inner-btn">
                                    <a href="">Order</a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u345985833/domains/arttteo.com/public_html/demoweb/resources/views/pages/payment.blade.php ENDPATH**/ ?>