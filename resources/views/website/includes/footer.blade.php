
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

<script>
    $(document).ready(function(){

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

