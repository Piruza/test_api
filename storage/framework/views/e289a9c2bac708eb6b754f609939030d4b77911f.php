<?php $__env->startSection('content'); ?>

<section class="gallery">
    <div class="page-links" data-aos="fade-down">
        <a href="<?php echo e(route('home')); ?>">Main page</a>
        <a class="page-links-active" href="#">Gallery</a>
    </div>
    <div class="gallery-main">
        <div class="gallery-main-container">
            <div class="gallery-main-big" data-aos="fade-left" data-aos-delay="900">
                <div class="gallery-main-big-img">
                    <img src="/assets/images/gallery-big.png" alt="">
                </div>
                <div class="gallery-main-big-content">
                    <div class="gallery-main-big-title">
                        <p>Model Photo</p>
                    </div>
                    <div class="gallery-main-big-date">
                        <p>10/06/2021</p>
                    </div>
                </div>
                <div class="gallery-main-big-zoom">
                    <img src="/assets/images/gallery-zoom.png" alt="">
                </div>
            </div>
            <div class="gallery-main-pics" data-aos="fade-up" data-aos-delay="1200">
                <div class="gallery-main-pic-item">
                    <img src="/assets/images/gallery-1.png" alt="">
                </div>
                <div class="gallery-main-pic-item">
                    <img src="/assets/images/gallery-2.png" alt="">
                </div>
                <div class="gallery-main-pic-item">
                    <img src="/assets/images/gallery-3.png" alt="">
                </div>
                <div class="gallery-main-pic-item">
                    <img src="/assets/images/gallery-4.png" alt="">
                </div>
            </div>
        </div>
        <!-- <div class="gallery-load-more" >
                    <button type="button">Load More</button>
                    <img src="/assets/images/arrow-down.png" alt="">
                </div> -->
    </div>


</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u345985833/domains/arttteo.com/public_html/demoweb/resources/views/pages/gallery.blade.php ENDPATH**/ ?>