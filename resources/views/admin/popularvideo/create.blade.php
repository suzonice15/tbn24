
<form id="containerForm" class="form app-lb-ajax-form bv-form" data-multipart="true" enctype="multipart/form-data" action="{{url('/')}}/admin/popular/video/store" method="post" novalidate="novalidate">
    @csrf
    <div class="row ">

        <div class="clearfix form-horizontal">

            <div class="row">
                <div class="col-md-10 col-sm-8">
                        <div class="form-group has-feedback">
                            <label class="control-label col-md-3" for="pro_name">Video Name</label>
                            <div class="col-md-9">
                                <input required type="text" maxlength="150" value="" class="form-control" id="video_name" name="video_name" placeholder="Title"  >
                                <p style="color:red" id="video_name_error"></p>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="control-label col-md-3" for="pro_dtls">Youtube Video Id</label>
                            <div class="col-md-9">
                                <input required type="text" maxlength="255" class="form-control" id="video_id" name="video_id" placeholder="Youtube Video Id" >
                                <p style="color:red" id="video_id_error"></p>

                            </div>
                        </div>

                    <div class="form-group has-feedback">
                        <label class="control-label col-md-3" for="pro_dtls">Order By</label>
                        <div class="col-md-9">
                            <input required type="number" maxlength="255" class="form-control" id="order_by" name="order_by" placeholder="order by" >
                            <p style="color:red" id="order_by_error"></p>
                        </div>
                    </div>

                    <div class="form-group pull-right">
                        <button type="button" class="btn btn-success" id="save_program_data"><i class="fa fa-save"></i>Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>
                    </div>


                </div>




                    </div>

                </div>

            </div>



         <script type="text/javascript">



            $(document).ready(function() {
$('#save_program_data').click(function () {
  let video_name= $('#video_name').val();
  let video_id= $('#video_id').val();
     if(video_name ==''){

        $('#video_name_error').text('This Field Must be fillup');
         return false;
    } else {
        $('#video_name_error').text('');


    }

    if(video_id ==''){

        $('#video_id_error').text('This Field Must be fillup');
        return false;
    } else {
        $('#video_id_error').text('');


    }

    $("#containerForm").submit(); // Submit the form



});

            });


        </script>



</form>

