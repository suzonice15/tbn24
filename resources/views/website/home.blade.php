@extends('website.master')
@section('mainContent')


    <style>


        /* Embed google fonts for demo layout
        -----------------------------------------*/
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900');

        /* Main Page Layout
        -- NOTE: Just for the demo page, and not
        required for the video modal... Video Modal
        styles are down below --
        -----------------------------------------*/
        * {
            box-sizing: border-box;
        }

        html {
            background: #fcfcfc;
        }

        @media (min-width: 641px) {
            html {
                background: #4b4b4b;
            }
        }

        body {
            font-family: 'Source Sans Pro', sans-serif;
        }

        .noscroll {
            overflow: hidden;
        }





        @media (min-width: 641px) {
            main .column.left,
            main .column.right {
                display: inline-block;
                width: 50%;
                min-height: 100vh;
            }

            main .column.left {
                position: fixed;
            }

            main .column.right {
                margin-left: 50%;
            }
        }

        .video-banner {
            display: block;
        }

        @media (min-width: 641px) {
            .video-bannerr {
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                z-index: 0;
            }
        }

        .video-banner .video-banner-img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: 50% 50%;
        }

        .video-banner-headline {
            position: absolute;
            left: 1.5rem;
            bottom: 1.5rem;

            font-family: 'Source Sans Pro', sans-serif;
            font-size: 1.25em;
            font-weight: 900;
            line-height: 1.0em;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.045em;
        }

        @media (min-width: 641px) {
            .video-banner-headline {
                left: 2em;
                bottom: 2.75em;
                font-size: 1.5em;
                line-height: 1.5em;
            }
        }

        .video-banner-icon-play {
            position: absolute;
            left: 50%;
            top: 50%;

            display: block;
            width: 2.5em;
            height: 2.5em;

            -webkit-transform: translateX(-50%) translateY(-50%) scale(1.0);
            -moz-transform: translateX(-50%) translateY(-50%) scale(1.0);
            -ms-transform: translateX(-50%) translateY(-50%) scale(1.0);
            -o-transform: translateX(-50%) translateY(-50%) scale(1.0);
            transform: translateX(-50%) translateY(-50%) scale(1.0);

            -webkit-transition: all 0.2s ease-out 0.05s;
            transition: all 0.2s ease-out 0.05s;
        }

        @media (min-width: 641px) {
            .video-banner-icon-play {
                width: 4.5em;
                height: 4.5em;
            }
        }

        .video-banner-icon-play:hover {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(1.2);
            -moz-transform: translateX(-50%) translateY(-50%) scale(1.2);
            -ms-transform: translateX(-50%) translateY(-50%) scale(1.2);
            -o-transform: translateX(-50%) translateY(-50%) scale(1.2);
            transform: translateX(-50%) translateY(-50%) scale(1.2);

            backgound: #330099;
        }

        .content {
            display: block;
            min-height: 100vh;
            max-width: 40rem;
            margin: 2.5rem auto;
            padding: 1.5rem;
        }

        @media (min-width: 641px) {
            .content {
                margin: 5.75rem auto;
                padding: 2.5rem;
            }
        }

        .content h1,
        .content h2,
        .content p {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 1em;
            font-weight: 300;
            line-height: 1.5em;
            color: #0D013D;
        }

        .content h1 {
            font-size: 3.25em;
            font-weight: 200;
            line-height: 1.0em;

            margin: 0 0 0.5rem 0;
        }

        @media (min-width: 641px) {
            .content h1 {
                font-size: 4em;
            }
        }

        .content h2 {
            font-size: 1em;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.155em;

            margin-top: 3em;
        }

        /* buttons */
        .content .button-group {
            margin-top: 1em;
        }

        .content .button {
            display: inline-block;
            padding: 1em 2em;
            min-width: 8em;
            text-align: center;
            font-weight: 900;
            text-decoration: none;
            border-radius: 1.5em;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);

            /* button theme - secondary is default */
            background: #f0f0f0;
            color: #2B2B2B;

            -webkit-transition: all 0.2s ease-out 0.05s;
            transition: all 0.2s ease-out 0.05s;
        }

        .content .button ~ .button {
            margin-left: 0.5em;
        }

        .content .button:hover {
            background: #e5e5e5;
        }

        /* primary button overrides */
        .content .button.primary {
            background: #E50055;
            color: #fff;
        }

        .content .button.primary:hover {
            background: #9D00E5;
        }

        /* video thumbnail grid */
        .content .video-thumb-grid {
            position: relative;
            font-size: 0; /* collapse the white-space */
            width: calc(100% + 2rem);
            margin: 0 -1rem;
        }

        .content .video-thumb {
            display: inline-block;
            vertical-align: top;

            text-decoration: none;

            /* calculate the width, gutters, and aspect ratio */
            width: calc((100% - 4rem) / 2);
            height: 0;
            padding-top: calc(((100% - 4rem) / 2) * 0.5625); /* 16:9 calc */

            margin: 1rem 1rem; /* gutters */

            overflow: hidden; /* clipping */

            position: relative; /* enable positioning for inner content */

            font-size: 1rem; /* reset the font size */

            -webkit-transform: scale(1.0);
            transform: scale(1.0);
            box-shadow: 0 0 0 rgba(0, 0, 0, 0.0);

            -webkit-transition: all 0.2s ease-out 0.05s;
            transition: all 0.2s ease-out 0.05s;
        }

        .content .video-thumb:hover {
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
            box-shadow: 0 2px 4px rgba(13, 1, 61, 0.35);
        }

        .content .video-thumb img {
            display: block;
            width: 100%;
            height: 100%;

            /* position inside the 16:9 container */
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;

            /* clipping for source images that are letterboxed */
            object-fit: cover;
            object-position: 50% 50%;

            background: #2b2b2b;
        }

        /* Video Modal
        -----------------------------------------*/
        .video-modal,
        .video-modal .overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 3000;
        }

        .video-modal {
            overflow: hidden;
            position: fixed;
            opacity: 0.0;

            -webkit-transform: translate(500%, 0%);
            transform: translate(500%, 0%);

            -webkit-transition: -webkit-transform 0s linear 0s;
            transition: transform 0s linear 0s;

            /* using flexbox for vertical centering */

            /* Flexbox display */
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;

            /* Vertical alignment */
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;

            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .video-modal .overlay {
            z-index: 0;
            background: rgba(13, 1, 61, 0.82); /* overlay color */

            opacity: 0.0;

            -webkit-transition: opacity 0.2s ease-out 0.05s;
            transition: opacity 0.2s ease-out 0.05s;
        }

        .video-modal-content {
            position: relative;
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            z-index: 1;

            margin: 0 auto;

            overflow-y: visible;

            background: #000;

            width: calc(100% - 12em);
            height: 0;
            padding-top: calc((100% - 12em) * 0.5625); /* 16:9 calc */
        }

        /* Scaling to fit within the current Viewport size:
           When viewport aspect ratio is greater than 16:9
           work off the height instead of the width for calc */
        @media (min-aspect-ratio: 16/9) {
            .video-modal-content {
                width: 0;
                height: calc(100vh - 10em);
                padding-top: 0;
                padding-left: calc((100vh - 10em) * 1.7778); /* 16:9 calc */
            }
        }

        /* Mobile Layout Tweaks - side margins reduced */
        @media (max-width: 640px) {
            .video-modal-content {
                width: calc(100% - 1em);
                padding-top: calc((100% - 1em) * 0.5625); /* 16:9 calc */
            }
        }

        /* modal close button */
        .close-video-modal {
            display: block;
            position: absolute;
            left: 0;
            top: -40px;

            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            color: #fff;
        }

        /* set the iframe element to stretch to fit its parent element */
        iframe#youtube {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;

            background: #000;
            box-shadow: 0px 2px 16px rgba(0, 0, 0, 0.5);
        }

        /* show the modal:
           add class to the body to reveal */
        .show-video-modal .video-modal {
            opacity: 1.0;

            transform: translate(0%, 0%);
            -webkit-transform: translate(0%, 0%);
        }

        .show-video-modal .video-modal .overlay {
            opacity: 1.0;
        }

        .show-video-modal .video-modal-content {
            transform: translate(0%, 0%);
            -webkit-transform: translate(0%, 0%);
        }
    </style>


    <!--
        ==================================================
        Slider Section Start
        ================================================== -->
<style>
    @media only screen and (max-width: 600px) {
        .video-js .vjs-tech {
            height: 100%;
            width: 97%;
        }
    }
</style>
<?php
    if(dashboard_election()){
		
		?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              
			<br>  
			<br>  
			<br>  
			<br>  
			<br>  
    <?php
     
        echo dashboard_election();
    

    ?>

	   </div>
    </div>
    </div>
	
	<?php }?>
<section id="hero-area" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block wow fadeInUp">

                    <!-- Slider -->
                    <section class="cd-intro row">
                        <div class="col-md-8 col-sm-12">

                            <video     id='hls-example'  class="video-js vjs-default-skin"  height="400"  controls>
                                <source  type="application/x-mpegURL" src="{{$api}}">
                            </video>
                        </div>
                        <div class="col-md-4 col-sm-12 md-p-l-0"
                             class="wow fadeInUp animated cd-headline slide">
                            <div id="ifrm-player-list" style=""  class="panel panel-default playlist">

                                <div class="panel-body">

                                    <div class="row">
                                        <div class="">
                                            <h4>Upcomming Program</h4>

                                            <span class="today-schedule-data"></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- cd-intro -->

                    <div class="row">

                        <?php  $count=0;?>
                        @if(isset($videoLists))

                            @foreach($videoLists['results'] as $videoList)
                                @if($count <=5)
                                @if($videoList->snippet->thumbnails)
                                    @if(!empty($videoList->snippet->thumbnails->high->url))
                        <div class="col-sm-4  col-md-2 col-xs-6">
                            <figure class="wow fadeInLeft animated portfolio-item animated animated" style="visibility: visible; animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="{{$videoList->snippet->thumbnails->high->url}}" class="img-responsive" alt="{{$videoList->snippet->title}}" width="100%">
                                    <div class="overlay">
                                        <div class="buttonss">
                                            <a target="_blank" data-youtube-id="{{$videoList->snippet->resourceId->videoId}}" class="video-banner js-trigger-video-modal" href="http://www.youtube.com/watch?v={{$videoList->snippet->resourceId->videoId}}">Play
                                                Video</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                    <h4>
                                        <a data-youtube-id="{{$videoList->snippet->resourceId->videoId}}" class="video-banner js-trigger-video-modal" target="_blank" href="http://www.youtube.com/watch?v={{$videoList->snippet->resourceId->videoId}}"> {{$videoList->snippet->title}} </a>
                                    </h4>
                                </figcaption>
                            </figure>
                        </div>
                                @endif
                                @endif
                                @endif
                              <?php  $count++; ?>
@endforeach
@endif

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- video modal -->
<section class="video-modal">
    <!-- Modal Content Wrapper -->
    <div id="video-modal-content" class="video-modal-content">

        <!-- iframe -->
        <iframe
                id="youtube"
                width="100%"
                height="100%"
                frameborder="0"
                allow="autoplay"
                allowfullscreen
                src=
        ></iframe>

        <a
                href="#"
                class="close-video-modal"
        >
            <!-- X close video icon -->
            <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0"
                    y="0"
                    viewBox="0 0 32 32"
                    style="enable-background:new 0 0 32 32;"
                    xml:space="preserve"
                    width="24"
                    height="24"
            >

            <g id="icon-x-close">
                <path fill="#ffffff"
                      d="M30.3448276,31.4576271 C29.9059965,31.4572473 29.4852797,31.2855701 29.1751724,30.980339 L0.485517241,2.77694915 C-0.122171278,2.13584324 -0.104240278,1.13679247 0.52607603,0.517159487 C1.15639234,-0.102473494 2.17266813,-0.120100579 2.82482759,0.477288136 L31.5144828,28.680678 C31.9872448,29.1460053 32.1285698,29.8453523 31.8726333,30.4529866 C31.6166968,31.0606209 31.0138299,31.4570487 30.3448276,31.4576271 Z"
                      id="Shape"></path>
                <path fill="#ffffff"
                      d="M1.65517241,31.4576271 C0.986170142,31.4570487 0.383303157,31.0606209 0.127366673,30.4529866 C-0.12856981,29.8453523 0.0127551942,29.1460053 0.485517241,28.680678 L29.1751724,0.477288136 C29.8273319,-0.120100579 30.8436077,-0.102473494 31.473924,0.517159487 C32.1042403,1.13679247 32.1221713,2.13584324 31.5144828,2.77694915 L2.82482759,30.980339 C2.51472031,31.2855701 2.09400353,31.4572473 1.65517241,31.4576271 Z"
                      id="Shape"></path>
            </g>

          </svg>
        </a>

    </div><!-- end modal content wrapper -->


    <!-- clickable overlay element -->
    <div class="overlay"></div>


</section>
<!-- end video modal -->


<section id="about" style="padding: 22px 0;">
    <div class="container">
         </div>
</section>
<!--/#main-slider-->
<section id="about" style="padding: 22px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="block wow">
                    <h2>ABOUT US</h2>
                    <span class="about_us"></span>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#CB0000;color:white;font-weight:bold">Online Vote</div>
                    <div class="panel-body">
                    <span class="ajax_pull_data_get"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /#about -->
<!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
<span class="home_page_program"></span>

<!-- #works -->
<!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown">Be with our</h1>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow"
                     >
                    <div class="media-left">
                        <div class="icon">
                            <i class="icon-facetime-video"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Entertainment Program</h4>
                        <p>Movie, Music, Movie Analysis, There are many entertainment
                            program</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow" >
                    <div class="media-left">
                        <div class="icon">
                            <i class="icon-lightbulb"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">24 Hour News</h4>
                        <p>24 hours at first and faster</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow">
                    <div class="media-left">
                        <div class="icon">
                            <i class="icon-bar-chart"></i>

                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Business Program</h4>
                        <p>We broadcast many business shows</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow " >
                    <div class="media-left">
                        <div class="icon">
                            <i class="icon-user"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Talk Show</h4>
                        <p>We broadcast many talk shows</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow " >
                    <div class="media-left">
                        <div class="icon">
                            <i class="icon-circle-blank"></i>

                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Live Event</h4>
                        <p>There are many Islamic show, Islam O Jibon,Janan, Janun,Learn
                            Quran</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow" >
                    <div class="media-left">
                        <div class="icon">
                            <i class="icon-star"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Islamic Show</h4>
                        <p>There are many Islamic show, Islam O Jibon,Janan, Janun,Learn
                            Quran</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /#feature -->

<!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
<section id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="title wow "  >
                        You are always welcome to contact with us
                        </h2>
                        <a href="{{url('/')}}/contact"
                           class="btn btn-default btn-contact wow fadeInDown"
                           data-wow-delay=".7s" data-wow-duration="500ms">Contact Us</a>

                </div>
            </div>

        </div>
    </div>
</section>

<script>
    $(document).ready(function () {

        document.addEventListener('contextmenu', event => event.preventDefault());
        document.onkeydown = function(e) {
            if (e.ctrlKey &&
                    (e.keyCode === 67 ||
                    e.keyCode === 86 ||
                    e.keyCode === 85 ||
                    e.keyCode === 117)) {
                alert('not allowed');
                return false;
            } else {
                return true;
            }
        };

        /* Toggle Video Modal
         -----------------------------------------*/
        function toggle_video_modal() {

            // Click on video thumbnail or link
            $(".js-trigger-video-modal").on("click", function (e) {

                // prevent default behavior for a-tags, button tags, etc.
                e.preventDefault();

                // Grab the video ID from the element clicked
                var id = $(this).attr('data-youtube-id');

                // Autoplay when the modal appears
                // Note: this is intetnionally disabled on most mobile devices
                // If critical on mobile, then some alternate method is needed
                var autoplay = '?autoplay=1';

                // Don't show the 'Related Videos' view when the video ends
                var related_no = '&rel=0';

                // String the ID and param variables together
                var src = '//www.youtube.com/embed/' + id + autoplay + related_no;

                // Pass the YouTube video ID into the iframe template...
                // Set the source on the iframe to match the video ID
                $("#youtube").attr('src', src);

                // Add class to the body to visually reveal the modal
                $("body").addClass("show-video-modal noscroll");

            });

            // Close and Reset the Video Modal
            function close_video_modal() {

                event.preventDefault();

                // re-hide the video modal
                $("body").removeClass("show-video-modal noscroll");

                // reset the source attribute for the iframe template, kills the video
                $("#youtube").attr('src', '');

            }

            // if the 'close' button/element, or the overlay are clicked
            $('body').on('click', '.close-video-modal, .video-modal .overlay', function (event) {

                // call the close and reset function
                close_video_modal();

            });
            // if the ESC key is tapped
            $('body').keyup(function (e) {
                // ESC key maps to keycode `27`
                if (e.keyCode == 27) {

                    // call the close and reset function
                    close_video_modal();

                }
            });
        }

        toggle_video_modal();


    });
</script>

<script defer >
    $.get("{{url('/')}}/home_page_program", function(data, status){
       $('.home_page_program').html(data);
    });

    $.get("{{url('/')}}/about_us", function(data, status){
        $('.about_us').html(data);
    });
    $.get("{{url('/')}}/today-schedule-ajax-data", function(data, status){
        $('.today-schedule-data').html(data);
    });


function ajax_pull_data_get(){
    $.get("{{url('/')}}/ajax_pull_data_get", function(data, status){
        $('.ajax_pull_data_get').html(data);
    });
}
    ajax_pull_data_get();

        $("body").on("submit",".poll-form",function(e){
            e.preventDefault();
            var thisobj=$(this);

            $.ajax({
                url : thisobj.attr("action"),
                data : thisobj.serialize(),
                type : "POST",
                success: function(data){
                    ajax_pull_data_get();
                },

            });


        });


</script>



@endsection
