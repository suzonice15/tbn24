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
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '370949040951334');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=370949040951334&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


    <script>
var base_url_main="{{url('/')}}";

    </script>

    <!-- Mobile Specific Metas
            ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">


    <script type="text/javascript">
        var base_url="https://www.tbn24.com/";
        var app_live_url="http://dog.dg21bd.com/TBN243/index.m3u8";
    </script>
    <!-- Template CSS Files
            ================================================== -->

    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/font_end/')}}/css/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/font_end/')}}/css/ionicons.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/font_end/')}}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('assets/font_end/')}}/css/blog.css">
    <link href="{{ asset('assets/font_end/')}}/css/video-js.css" rel="stylesheet">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="{{ asset('assets/font_end/')}}/css/slider.css">
    <!-- owl craousel css -->
    <link rel="stylesheet" href="{{ asset('assets/font_end/')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('assets/font_end/')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{ asset('assets/font_end/')}}/css/jquery.fancybox.css">
    <link rel="stylesheet" href="{{ asset('assets/font_end/')}}/magnific-popup.css">
    <!-- template main css file -->
    <link rel="stylesheet" href="{{ asset('assets/font_end/')}}/css/main.css?v=1.0.2">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/font_end/')}}/css/responsive.css?v=1.0.3">

    <!-- Template Javascript Files
            ================================================== -->
    <!-- modernizr js -->
    <script src="{{ asset('assets/font_end/')}}/js/modernizr-2.6.2.min.js"></script>
    <!-- jquery -->
    <script
            src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- owl carouserl js -->
    <script src="{{ asset('assets/font_end/')}}/js/owl.carousel.min.js"></script>
    <!-- bootstrap js -->

    <script src="{{ asset('assets/font_end/')}}/js/bootstrap.min.js"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/font_end/')}}/js/wow.min.js"></script>
    <!-- slider js -->
    <script src="{{ asset('assets/font_end/')}}/js/slider.js"></script>
    <script src="{{ asset('assets/font_end/')}}/js/jquery.fancybox.js"></script>
    <script src="{{ asset('assets/font_end/')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets/font_end/')}}/js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/font_end/')}}/js/swfobject.min.js"></script>
    <!-- template main js -->
    <script src="{{ asset('assets/font_end/')}}/js/main.js?v=1.0.2"></script>
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
                <a href="{{url('/')}}"> <img src="{{url('/')}}/public/logo.png" alt="">
                </a>
            </div>
            <!-- /logo -->
        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/')}}/all-program">Our Program</a></li>
                    <li><a href="{{url('/')}}/today-schedule">Program Schedule</a></li>
                    <li><a href="{{url('/')}}/program-video">Video </a></li>
                    <li><a href="{{url('/')}}/blog">Blog</a></li>
                    <li><a href="{{url('/')}}/about-us">About Us</a></li>
                    <li><a href="{{url('/')}}/contact">Contact</a></li>
                    <li><a href="{{url('/')}}/documents">Documents</a></li>
                    <li><a href="{{url('/')}}/election">Election</a></li>

                    <?php
                        //check session
                    $user_id=Session::get('user_id');
                        if($user_id){
                    ?>
                    <li><a href="{{url('/')}}/myaccount">My Account</a></li>

                    <?php } else { ?>
                    <li><a href="{{url('/')}}/customer/login">Login</a></li>

                <?php }

?>                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
