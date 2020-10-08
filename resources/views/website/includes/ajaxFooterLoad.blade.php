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
                            <img src="{{url('/')}}/public/logo.png" class="img-responsive footer-logo-img" alt="LOGO">
                        </div>
  					</span>
  					<span class="col-xs-9">
  						<div class="">
                            <h4 class="bold bb-gray pb-10">Address</h4>
                        </div>

			  			<div class="">
                            {{get_ajax_footer_data()->contact_address}}
                        </div>

			  			<div class="">
                            <i class="icon-phone"></i> {{get_ajax_footer_data()->contact_phone}}
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
                                    <span><a href="{{get_ajax_footer_data()->facebook}}"><img class="img-social-icon" src="{{url('/')}}/public/facebook_circle.png" alt="Facebook"></a></span>
                                    <span><a href="{{get_ajax_footer_data()->linkedIn}}"><img class="img-social-icon" src="{{url('/')}}/public/linkedin_circle.png" alt="LinkedIn"></a></span>
                                    <span><a href="{{get_ajax_footer_data()->instagram_id}}"><img class="img-social-icon" src="{{url('/')}}/public/instagram_circle.png" alt="Instagram"></a></span>
                                    <span><a href="{{get_ajax_footer_data()->youtube_chanel}}"><img class="img-social-icon" src="{{url('/')}}/public/youtube_circle.png" alt="Youtube"></a></span>
                                    <span><a href="{{get_ajax_footer_data()->twitter}}"><img class="img-social-icon" src="{{url('/')}}/public/twitter.png" alt="Youtube"></a></span>
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
                                <a   style="float:left;" href="{{get_ajax_footer_data()->google_app_id}}" target="_blank"><img src="{{url('/')}}/public/play_store.jpg"></a>
                            </li>
                            <li class="app-store">
                                <a href="{{get_ajax_footer_data()->ios_app_link}}" target="_blank"><img src="{{url('/')}}/public/i-store.jpg"></a>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>