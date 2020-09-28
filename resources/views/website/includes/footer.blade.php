
<!--
            ==================================================
            Footer Section Start
            ================================================== -->

<!-- /#footer -->

<style>


</style>

<footer  class="container-fluid">
    <div class="row mt30 pt30">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-left">
                    <address class="row">
  					<span class="col-xs-3">
  						<div class="row">
                            <br>
                            <br>
                            <img src="http://tbn24.com/images/logo.png" class="img-responsive footer-logo-img" alt="LOGO">
                        </div>
  					</span>
  					<span class="col-xs-9">
  						<div class="">
                            <h4 class="bold bb-gray pb-10">Address</h4>
                        </div>

			  			<div class="">
                            {{get_footer_data()->contact_address}}
                        </div>

			  			<div class="">
                            <i class="icon-phone"></i> {{get_footer_data()->contact_phone}}
                        </div>
  					</span>
                    </address>
                </div>
                <div class="col-sm-4">
                    <div class="row">

                        <div class="col-sm-8">
                            <h4 class="bold bb-gray pb-10 font-light" style="text-align: left;">Follow Us</h4>
                            <div class="follow-us-box text-left font-md">


                                <div class="hidden-xs">
                                     <span><a href="{{get_footer_data()->facebook}}"><img class="img-social-icon" src="{{url('/')}}/public/facebook_circle.png" alt="Facebook"></a></span>
                                    <span><a href="{{get_footer_data()->linkedIn}}"><img class="img-social-icon" src="{{url('/')}}/public/linkedin_circle.png" alt="LinkedIn"></a></span>
                                    <span><a href="{{get_footer_data()->instagram_id}}"><img class="img-social-icon" src="{{url('/')}}/public/instagram_circle.png" alt="Instagram"></a></span>
                                    <span><a href="{{get_footer_data()->youtube_chanel}}"><img class="img-social-icon" src="{{url('/')}}/public/youtube_circle.png" alt="Youtube"></a></span>
                                    <span><a href="{{get_footer_data()->twitter}}"><img class="img-social-icon" src="{{url('/')}}/public/twitter.png" alt="Youtube"></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="row">



                        <h4 class="bold bb-gray pb-10 font-light" style="text-align: left;">Download our app</h4>

                            <ul class="download-mobile-app">
                                <li class="google-paly-store">
                                    <a   style="float:left;" href="{{get_footer_data()->google_app_id}}" target="_blank"><img src="{{url('/')}}/public/play_store.jpg"></a>
                                </li>
                                <li class="app-store">
                                    <a href="{{get_footer_data()->ios_app_link}}" target="_blank"><img src="{{url('/')}}/public/i-store.jpg"></a>
                                </li>
                            </ul>

                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>



<!-- JS code -->
<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.14.1/videojs-contrib-hls.js"></script>
<script src="https://vjs.zencdn.net/7.2.3/video.js"></script><script>
    var player = videojs('hls-example');
    player.play();
</script>
</body>
</html>

