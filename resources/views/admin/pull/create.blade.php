<form id="containerForm" class="form app-lb-ajax-form bv-form" enctype="multipart/form-data"
      action="{{url('/')}}/admin/news/store" method="post" novalidate="novalidate">
    @csrf
    <div class="row ">

        <div class="clearfix form-horizontal">

            <div class="form-group">
                <label class="control-label col-md-3" for="pro_id">Program</label>
                <div class="col-md-6">
                    <select name="program_id" id="program_id" class="form-control select2">

                        <option value="AAAA">কুরআনের আলো</option>

                    </select>

                </div>
            </div>

            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="question">Question</label>
                <div class="col-md-6">
                    <input type="text" maxlength="200" value="" class="form-control" id="question" name="question"
                           placeholder="Question" >

                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="expire_time">Expire Time</label>
                <div class="col-md-6">
                    <input type="text"  value="" class="form-control datepicker" id="expire_time"
                           name="expire_time" placeholder="Expire Time">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3" for="status">Status</label>
                <div class="col-md-9">
                    <input type="hidden" name="status" value="I">
                    <input type="checkbox" checked="" value="A" class="form-control app-switch-btn hidden" id="status"
                           name="status">
                    <div is="0" class="btn-group" tabindex="0"><a is="0" class="btn btn-default">No</a><a is="1"
                                                                                                          class="btn active btn-success">Yes</a>
                    </div>
                </div>
            </div>


        </div>


    </div>
    <script type="text/javascript">


        $(document).ready(function () {
            $('#save_program_data').click(function () {
                let news_title = $('#news_title').val();
                let news_body = $('#news_body').val();
                if (news_title == '') {

                    $('#news_title_error').text('This Field Must be fillup');
                    return false;
                } else {
                    $('#news_title_error').text('');


                }

                if (news_body == '') {

                    $('#news_body_error').text('This Field Must be fillup');
                    return false;
                } else {
                    $('#news_body_error').text('');


                }

                $("#containerForm").submit(); // Submit the form


            })

        });


        function doSqureImageBox() {
            var width = $("#imageUploaderContainer").width();
            width = 100;
            $("#imageUploaderContainer").css("height", width);
        }
        $(function () {
            $('#select_image').on('click', function () {
                $('#image-selector').trigger('click');
            });
            doSqureImageBox();


            $('#image-selector').on("change", function (e) {
                var target = $(".image-display");
                var fr = new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                fr.onload = function (e) {
                    target.attr("src", this.result);
                    target.show();
                    $(".img-info").hide();
                    try {
                        $.colorbox.resize();
                    } catch (e) {
                    }
                    ;
                };
                fr.readAsDataURL(this.files[0]);
            });
        });

    </script>


    </div>
</form>

