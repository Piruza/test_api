<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/styles/fullpage.css">
    <link rel="stylesheet" href="/assets/styles/aos.css">
    <link rel="stylesheet" href="/assets/styles/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="/assets/styles/style.css?v=1.0">
    <link rel="stylesheet" href="/assets/styles/media.css?v=1.0">
    
    <link rel="icon" href="/assets/images/3DLogo.png">
    <title>3D Face | Home</title>
</head>


<body class="<?php echo $__env->yieldContent('title'); ?>">

    <!-- SIDEBAR -->
    <?php echo $__env->make('components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- MAIN CONTENT -->
    <section class="main">
        <!-- HEADER -->
        <?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

    </section>


<script src="/assets/scripts/libraries/jquery-3.6.0.min.js"></script>
<script src="/assets/scripts/fullpage.js"></script>
<script src="/assets/scripts/scrolloverflow.min.js"></script>
<script src="/assets/scripts/aos.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="/assets/scripts/swiper.js"></script>
<script src="/assets/scripts/main.js?v=1.0"></script>


<?php echo $__env->yieldPushContent('script'); ?>

</body>
</html>



<?php /**PATH /home/u345985833/domains/arttteo.com/public_html/demoweb/resources/views/layouts/master.blade.php ENDPATH**/ ?>