<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Basic Page Needs
            ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>TBN24</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <meta name="theme-color" content="#720000">
    <meta name="msapplication-navbutton-color" content="#720000">

    <script>
var base_url_main="<?php echo e(url('/')); ?>";

    </script>

    <!-- Mobile Specific Metas
            ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script type="text/javascript">
        var base_url="https://www.tbn24.com/";
        var app_live_url="http://dog.dg21bd.com/TBN243/index.m3u8";
    </script>
    <!-- Template CSS Files
            ================================================== -->

    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/ionicons.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/animate.css">
    <link href="<?php echo e(asset('assets/font_end/')); ?>/css/video-js.css" rel="stylesheet">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/slider.css">
    <!-- owl craousel css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/magnific-popup.css">
    <!-- template main css file -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/main.css?v=1.0.2">
    <!-- responsive css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/responsive.css?v=1.0.3">

    <!-- Template Javascript Files
            ================================================== -->
    <!-- modernizr js -->
    <script src="<?php echo e(asset('assets/font_end/')); ?>/js/modernizr-2.6.2.min.js"></script>
    <!-- jquery -->
    <script
            src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- owl carouserl js -->
    <script src="<?php echo e(asset('assets/font_end/')); ?>/js/owl.carousel.min.js"></script>
    <!-- bootstrap js -->

    <script src="<?php echo e(asset('assets/font_end/')); ?>/js/bootstrap.min.js"></script>
    <!-- wow js -->
    <script src="<?php echo e(asset('assets/font_end/')); ?>/js/wow.min.js"></script>
    <!-- slider js -->
    <script src="<?php echo e(asset('assets/font_end/')); ?>/js/slider.js"></script>
    <script src="<?php echo e(asset('assets/font_end/')); ?>/js/jquery.fancybox.js"></script>
    <script src="<?php echo e(asset('assets/font_end/')); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo e(asset('assets/font_end/')); ?>/js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/font_end/')); ?>/js/swfobject.min.js"></script>
    <!-- template main js -->
    <script src="<?php echo e(asset('assets/font_end/')); ?>/js/main.js?v=1.0.2"></script>
    <script async src="//"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9484012974069353",
            enable_page_level_ads: true
        });
    </script>
</head>
<body>
<!--
    ==================================================
    Header Section Start
    ================================================== -->
<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <div class="navbar-brand">
                <a href="<?php echo e(url('/')); ?>"> <img src="http://tbn24.com/images/logo.png" alt="">
                </a>
            </div>
            <!-- /logo -->
        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo e(url('/')); ?>/all-program">Our Program</a></li>
                    <li><a href="<?php echo e(url('/')); ?>/today-schedule">Program Schedule</a></li>
                    <li><a href="<?php echo e(url('/')); ?>/program-video">Program Video </a></li>
                    <li><a href="<?php echo e(url('/')); ?>/about-us">About Us</a></li>
                    <li><a href="<?php echo e(url('/')); ?>/contact">Contact</a></li>
                    <li><a href="<?php echo e(url('/')); ?>/documents">Documents</a></li>

                    <?php
                        //check session
                    $user_id=Session::get('user_id');
                        if($user_id){
                    ?>
                    <li><a href="<?php echo e(url('/')); ?>/myaccount">My Account</a></li>

                    <?php } else { ?>
                    <li><a href="<?php echo e(url('/')); ?>/customer/login">Login</a></li>

                <?php }

?>                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/website/includes/header.blade.php ENDPATH**/ ?>