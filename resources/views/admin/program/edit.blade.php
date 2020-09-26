
<form id="containerForm" class="form app-lb-ajax-form bv-form" data-multipart="true" enctype="multipart/form-data" action="{{ url('admin/programs/update') }}/{{ $program->id }}" method="post" novalidate="novalidate">
    @csrf
    <div class="row ">

        <div class="clearfix form-horizontal">

            <div class="row">
                <div class="col-md-10 col-sm-8">


                    <div class="form-group has-feedback">
                        <label class="control-label col-md-3" for="pro_name">Name</label>
                        <div class="col-md-9">
                            <input type="text" maxlength="150" value="{{$program->program_name}}" class="form-control" id="program_name" name="program_name" placeholder="Name"  >
                            <p style="color:red" id="program_name_error"></p>

                        </div>
                    </div>

                    <div class="form-group has-feedback">
                        <label class="control-label col-md-3" for="pro_dtls">Details</label>
                        <div class="col-md-9">
                            <textarea type="text" maxlength="255" class="form-control" id="program_details" name="program_details" placeholder="Details" >{{$program->program_details}}</textarea>
                            <p style="color:red" id="program_details_error"></p>

                        </div>
                    </div>

                    <div class="form-group has-feedback">
                        <label class="control-label col-md-3" for="pro_name">Playlist ID</label>
                        <div class="col-md-9">
                            <input type="text" maxlength="150" value="{{$program->youtube}}" class="form-control" id="youtube" name="youtube" placeholder="Youtube Playlist ID" >
                            <p style="color:red" id="youtube_error"></p>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="status">Status</label>
                        <div class="col-md-9">
                            <select class="form-control" id="status" name="status">

                                <option <?php if($program->status==1) { echo "selected"; } else { echo "";} ?> value="1">Yes</option>
                                <option <?php if($program->status==0) { echo "selected"; } else { echo "";} ?> value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-9 pull-right">
                        <div class="form-group">
                            <div id="previous_image" class="panel panel-default" style="border: 0px solid transparent">
                                <input id="image-selector" type="file" name="program_img" style="display: none;">
                                <div id="select_image" class="panel panel-default">
                                    <div id="imageUploaderContainer" class="panel-body p-5" style="overflow: hidden; position: relative; height: 30.117px;">
                                        <span class="img-info" style="position: absolute; left: 0px; right: 0px; text-align: center; top: 50%; font-size: 25px; margin-top: -32px;">Upload Image</span>
                                        <div class="img-container" style="position: absolute; overflow: hidden; left: 5px; right: 5px; top: 5px; bottom: 5px;">
                                            <img class="image-display" src="{{url('/')}}/public/uploads/program/{{$program->program_image}}" style="height: 50%">
                                        </div>

                                    </div>
                                </div>

                                <p style="color:red" id="image-selector_error"></p>




                            </div>
                        </div>

                        <div class="form-group pull-right">
                            <button type="button" class="btn btn-success" id="save_program_data"><i class="fa fa-pencil"></i>Update</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>
                        </div>


                    </div>

                </div>

            </div>


        </div>
        <script type="text/javascript">



            $(document).ready(function() {
                $('#save_program_data').click(function () {
                    let program_name=  $('#program_name').val();
                    let program_details=  $('#program_details').val();
                    let image=  $('#image-selector').val();
                    let youtube=  $('#youtube').val();
                    if(program_name ==''){

                        $('#program_name_error').text('This Field Must be fillup');
                        return false;
                    } else {
                        $('#program_name_error').text('');


                    }

                    if(program_details ==''){

                        $('#program_details_error').text('This Field Must be fillup');
                        return false;
                    } else {
                        $('#program_details_error').text('');


                    }

                    if(youtube ==''){

                        $('#youtube_error').text('This Field Must be fillup');
                        return false;
                    } else {
                        $('#youtube_error').text('');


                    }


                    $("#containerForm").submit(); // Submit the form



                })

            });






            function doSqureImageBox(){
                var width=$("#imageUploaderContainer").width();
                width=100;
                $("#imageUploaderContainer").css("height",width);
            }
            $(function(){
                $('#select_image').on('click', function() {
                    $('#image-selector').trigger('click');
                });
                doSqureImageBox();


                $('#image-selector').on("change",function(e){
                    var target=$(".image-display");
                    var fr=new FileReader();
                    // when image is loaded, set the src of the image where you want to display it
                    fr.onload = function(e) {
                        target.attr("src",this.result); target.show(); $(".img-info").hide();
                        try{
                            $.colorbox.resize();
                        }catch(e){};
                    };
                    fr.readAsDataURL(this.files[0]);
                });
            });

        </script>


    </div>
</form>

