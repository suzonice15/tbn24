
<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="biz_inbox"
        page_id="465086916960118">
      </div>

<?php header("Access-Control-Allow-Origin: *"); ?>
<div class="chat">


    <div class="container" >
        <div class="row">
            <div class="activeChat"  style="display: none">
                <div class="panel panel-primary" style="border:1px solid red" >
                    <div class="panel-heading" style="background-color:red;color:white">
                        {{--<span class="glyphicon glyphicon-comment"></span>--}}
                        Live Chat

                        <button type="button" style="font-size:30px;margin-top:-5px;color:white" class="close buttonClose" data-dismiss="modal" aria-label="Close">
                           &times;
                        </button>
                    </div>
                    <div class="panel-body" style="height:350px">
                        <ul class="chat">
<span  id="chat_show_content"></span>

                        </ul>
                    </div>
                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="chatInputData" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-danger btn-sm" id="btn-chat">
                                Send</button>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <button type="button" class="btn btn-danger chatShow" style="position: fixed;bottom: 0px;right: 0px;width: 200px;" >Live Chat</button>
    </div>


</div>
<style>

    .activeChat{
        position: fixed;right: 7px;width:500px;top: 150px;z-index: 99999999;background: #f1f1f1;
        height: 90%;box-shadow: 0 0 15px 0 rgba(0,0,0,.3);
        display:block
    }
    .chat
    {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .chat li
    {
        margin-bottom: 10px;
        padding-bottom: 5px;

    }

    .chat li.left .chat-body
    {
        margin-left: 0px;
        background-color: red;
        padding: 7px;
        color: white;
        width: 412px;
        float: left
    }

    .chat li.right .chat-body
    {
        margin-right: 3px;
        background-color: #ddd;
        padding: 7px;
        color: black;
        width: 374px;
        float: right;
    }


    .chat li.right .chat-body p
    {
        margin: 0;
        color: black;
    }
    .chat li.left .chat-body p
    {
        margin: 0;
        color: white;
    }

    .panel .slidedown .glyphicon, .chat .glyphicon
    {

        margin-right: 5px;
    }

    .panel-body
    {
        overflow-y: scroll;
        height: 100%;
    }

    ::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar
    {
        width: 12px;
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar-thumb
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #555;
    }
</style>

<script>

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function delete_cookie(name) {
          document.getElementById('cookie_delete_section').style.display = 'none';

    setCookie("cookie_active","active",30);
 // document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

   setTimeout(function(){ 
       
     
var cookie_active=getCookie("cookie_active");
if(cookie_active=="active"){
      document.getElementById('cookie_delete_section').style.display = 'none';
}  
   }, 1);


</script>



<hr>
<span class="ajax-footer-load"></span>
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

<div class="xs-copyright copyright-yellow " id="cookie_delete_section" style="background-color: #460f0f;
position: fixed;
bottom: 0px;
width: 100%;">
    <div class="container container-fullwidth">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12">
                <div class="xs-copyright-text"  style="color:#ffffff;text-align: center;padding: 11px;" >
                   By using this site, you agree to our
  <a target="_blank "  style="color:#ffffff;text-decoration:underline" href="{{url('/')}}/privacy-policy"> Privacy Policy</a> <button class="btn btn-success btn-sm" onClick="return delete_cookie('cookie_active')">OK</button>
                </div>
                <!-- .xs-copyright-text END -->
            </div>
        </div>
    </div>
</div>


<!-- five mitinte check modal -->
<?php

if(isset($five_minite_acctive)) { ?>

    <!-- Modal -->
    <div class="modal fade" id="five_minite_check_modal" role="dialog" >
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 style="text-align:center;" class="modal-title"><img height="50" src="{{url('/')}}/public/logo.png"></h4>
                </div>
                <div class="modal-body">
                    <p style="text-align:center;"  >{{get_footer_data()->five_minite_modal_note}}
                    </p>


                    <form class="form-horizontal">

                        <div class="form-group row">
                            <label class="control-label col-md-3" for="question">Email</label>
                            <div class="col-md-5">
                                <input required type="email" maxlength="200" value="" class="form-control" id="five_email"  name="five_email"
                                       placeholder="Email" >
                                <p id="five_email_error" style="color:red;font-size: 14px"></p>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3" for="question">Password</label>
                            <div class="col-md-5">
                                <input required type="password" maxlength="200" value="" class="form-control"  id="five_password"  name="five_password"
                                       placeholder="Password">
                                <p class="five_password_error" style="color:red;font-size: 14px"></p>

                            </div>
                        </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3" for="question"></label>

                                    <div class="col-md-5">
                                        <button id="five_modal_submit" type="button" class="form-control btn btn-success "
                                               >Login</button>
                                        <br/>
                                    </div>

                                </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3" for="question"></label>


                            <div class="col-md-5">
                                <p>Don't have an acount? <a href="{{url('/')}}/customer/form"> Signup</a></p>

                            </div>
                        </div>





                    </form>



                </div>



            </div>
        </div>
    </div>


<?php } ?>

<?php

if(isset($one_hour_check_modal)) { ?>

    <!-- Modal -->
    <div class="modal fade" id="one_hour_check_modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 style="text-align:center;" class="modal-title"><img height="50" src="{{url('/')}}/public/logo.png"></h4>
                </div>
                <div class="modal-body">
                    <p style="text-align:center;" >{{get_footer_data()->one_hour_modal_note}}
                    </p>
                    <form class="form-horizontal">

                        <div class="form-group row">
                            <label class="control-label col-md-3" for="question">Email</label>
                            <div class="col-md-5">
                                <input required type="email" maxlength="200" value="" class="form-control"   id="one_email" name="one_email"
                                       placeholder="Email" >
                                <p id="one_email_error" style="color:red;font-size: 14px"></p>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3" for="question">Password</label>
                            <div class="col-md-5">
                                <input required type="password" maxlength="200" value="" class="form-control"  id="one_password" name="one_password"
                                       placeholder="Password">
                                <p id="one_password_error" style="color:red;font-size: 14px"></p>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-2" for="question"></label>

                            <div class="col-md-3">
                                <button id="one_modal_submit" type="button" class="form-control btn btn-success "
                                >Login</button>
                                <br/>
                            </div>

                        </div>



                    </form>


                </div>

            </div>
        </div>
    </div>
<?php } ?>



        <!-- five mitinte check modal -->
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

<script>

   var user_id="{{ Session::get('user_id')}}";
    $(document).ready(function(){
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('ba7b245668d848c45d5a', {
            cluster: 'mt1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            if (user_id == data.from) {
                scrollToBottomFunc();
                getChat(user_id);
            } else if (user_id == data.to) {
                scrollToBottomFunc();
                getChat(user_id);
            }

        });

 $(document).on('click', '#btn-chat', function (e) {
                var message= $('#chatInputData').val();
                // check if enter key is pressed and message is not null also receiver is selected
                if (message != '' ) {
                 
                 
          
                $.ajax({
                    type:"GET",
                    url:"{{url('chatStore')}}/"+message,
                    success:function(data)
                    {

                        $('#chatInputData').val('');
                        getChat(user_id);

                    }
                })
            

                }
            });
 
		$('.chatShow').click(function(){

            if(user_id) {
                $(this).hide();
                $('.activeChat').show();
                getChat(user_id);
            } else {
                alert("Please Login First")
            }


		});
        $('.buttonClose').click(function(){


            $('.activeChat').hide();
            $('.chatShow').show();


        });

        function getChat(user_id) {
            $.ajax({
                type:"GET",
                url:"{{url('chat')}}/"+user_id,
                success:function(data)
                {

                    $('#chat_show_content').html(data);

                },
                complete: function () {
                    scrollToBottomFunc();
                }
            })
        }


        function scrollToBottomFunc() {

            $('.chat .panel-body').animate({scrollTop:20000000}, '300');

        }

        function five_minite_check_modal(){
            $.ajax({
                type:"GET",
                url:"{{url('customer/five_minite_check')}}",
                success:function(data)
                {

                    if(data=='') {
                        $("#five_minite_check_modal").modal({
                                backdrop: 'static',
                                keyboard: false
                        }
                        );
                    }
                }
            })


        }
        var five =(<?php echo get_footer_data()->before_login_alert; ?>) * 60000;
        window.setInterval(five_minite_check_modal, five);


    });



    /*      five modal   data submit    */

    $('#five_modal_submit').on('click',function () {

      let email=  $('#five_email').val();
      let password=  $('#five_password').val();

        if(email=='' || password=='') {
            if(email==''){
                $('#five_email_error').text("This Field is required");
            } else {
                $('#five_email_error').text("");
            }

            if(password==''){
                $('#five_password_error').text("This Field is required");
            } else {
                $('#five_password_error').text("");
            }
        } else {

            $.post("{{url('/')}}/modal/login",
                    {
                        email: email,
                        password: password,
                        "_token": "{{ csrf_token() }}"
                    },
                    function(data, status){
                        if(data.error){
                            alert(data.error)
                        } else {
                            $('#five_minite_check_modal').modal('hide');

                        }
                    });

        }
    });


    /*     one hour  modal    data submit     */

    $('#one_modal_submit').on('click',function () {

        let email1=  $('#one_email').val();
        let password1=  $('#one_password').val();


        if(email1=='' || password1=='') {
            if(email1==''){
                $('#one_email_error').text("This Field is required");
            } else {
                $('#one_email_error').text("");
            }

            if(password1==''){
                $('#one_password_error').text("This Field is required");
            } else {
                $('#one_password_error').text("");
            }
        } else {

            $.post("{{url('/')}}/modal/login",
                    {
                        email: email1,
                        password: password1,
                        "_token": "{{ csrf_token() }}"
                    },
                    function(data, status){
                        if(data.error){
                            alert(data.error)
                        } else {
                            $('#one_hour_check_modal').modal('hide');

                        }
                    });

        }
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
            });
        }

        var one_hour =(<?php echo get_footer_data()->after_login_alert; ?>) * 60000;

        window.setInterval(one_hour_check_modal, one_hour);
    });
</script>

<script defer >
    $.get("{{url('/')}}/ajax-footer-load", function(data, status){
        $('.ajax-footer-load').html(data);
    });

    function clear_cach(){
        $.ajax({
            type:"GET",
            url:"{{url('/clear-cache')}}",
            success:function(data)
            {

            }
        })
    }
    window.setInterval(clear_cach, 369000);

    function hitcounter() {

        $.ajax({
            url: "{{url('/')}}/track_website_user",
            success: function (data) {
console.log(data)
            }
        });
    }
    hitcounter();



</script>


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
     <!-- modernizr js -->
     <script src="{{ asset('assets/font_end/')}}/js/modernizr-2.6.2.min.js"></script>
    <!-- jquery -->

<!-- JS code -->
<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script  src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
<script   src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.14.1/videojs-contrib-hls.js"></script>
<script  src="https://vjs.zencdn.net/7.2.3/video.js"></script>

<script>
var player = videojs('hls-example', {autoplay: 'any'});
</script>
</body>
</html>

