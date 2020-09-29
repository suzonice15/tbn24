
<!--
            ==================================================
            Footer Section Start
            ================================================== -->

<!-- /#footer -->

<style>


</style>

<footer  class="container-fluid" style="padding-top: 24px;padding-bottom: 11px;" >
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

<div class="xs-copyright copyright-yellow " style="background-color: green;">
    <div class="container container-fullwidth">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12">
                <div class="xs-copyright-text"  style="color:#ffffff;text-align: center;padding: 11px;" >
                    ©  <?=date('Y')?> All Rights Reserved by tbn24.com Developed by <a target="_blank " style="color:#ffffff" href="https://www.isolutionsbd.com/">isolutions</a>
                </div>
                <!-- .xs-copyright-text END -->
            </div>

        </div>

    </div>
</div>

<!-- five mitinte check modal -->
<?php
$five_minite_acctive=1;

if(isset($five_minite_acctive)) { ?>

    <!-- Modal -->
    <div class="modal fade" id="five_minite_check_modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Notification From tbn24.com</h4>
                </div>
                <div class="modal-body">
                    <h2>You are not registered customer please registion first then login to your account then continously show our program</h2>
                </div>
                <div class="modal-footer">
                    <a href="{{url('/')}}/customer/login" class="btn btn-success">Login</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



<?php } ?>

<?php
$one_hour_check_modal=1;

if(isset($one_hour_check_modal)) { ?>

    <!-- Modal -->
    <div class="modal fade" id="one_hour_check_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Notification From tbn24.com</h4>
                </div>
                <div class="modal-body">
                    <h2>To continously show our video   login  again</h2>
                    <a href="{{url('/')}}/customer/login" class="btn btn-success">Login</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



<?php } ?>



        <!-- five mitinte check modal -->

<script>
    $(document).ready(function(){

        function five_minite_check_modal(){
            $.ajax({
                type:"GET",
                url:"{{url('customer/five_minite_check')}}",
                success:function(data)
                {

                    if(data=='') {
                        $("#five_minite_check_modal").modal();
                    }
                }
            })


        }
        var five="{{get_footer_data()->before_login_alert}}*60000";


        window.setInterval( five_minite_check_modal, five);
    });
</script>

<!-- 1 hour  check modal -->

<script>
    $(document).ready(function(){

        function one_hour_check_modal(){
            $.ajax({
                type:"GET",
                url:"{{url('customer/one_hour_check')}}",
                success:function(data)
                {

                    if(data=='') {
                        $("#one_hour_check_modal").modal();
                    }
                }
            })


        }

        var one_hour="{{get_footer_data()->after_login_alert}}*60000";

        window.setInterval( one_hour_check_modal, one_hour);
    });
</script>



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

