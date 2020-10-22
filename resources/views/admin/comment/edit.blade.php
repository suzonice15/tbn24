
<form id="containerForm" class="form app-lb-ajax-form bv-form" data-multipart="true" enctype="multipart/form-data" action="{{ url('admin/comment/update') }}/{{ $comment->comment_id }}" method="post" novalidate="novalidate">
    @csrf

    <div id="LightBoxBody" class="lightbox-body" style="padding:0 4px 2px;">


        <div class="clearfix form-horizontal">

            <div class="row">


                <div class="form-group has-feedback">
                    <label class="control-label col-md-3" for="name">Comments</label>
                    <div class="col-md-8">
                       <textarea class="form-control" name="comments" rows="10" cols="10">{{$comment->comments}}</textarea>

                    </div>
                </div>



                <div class="form-group has-feedback">
                    <label class="control-label col-md-3" for="playlist_link">Published Status</label>
                    <div class="col-md-8">
                        <select class="form-control" name="status" id="status">
                            <option  value="1">Published</option>
                            <option   value="0">Unpublished</option>
                        </select>

                    </div>
                </div>

            </div>

        </div>
        <div class="row btn-group-md popup-footer text-right">
            <button type="button" class="btn btn-success" id="save_program_data"><i class="fa fa-save"></i>Update</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>

        </div>


    </div>



</form>


<script type="text/javascript">
    document.forms['containerForm'].elements['status'].value="<?php echo $comment->status;?>";

    $(document).ready(function () {
         $('#save_program_data').click(function () {
            let playlist_link = $('#playlist_link').val();
            let playlist_name = $('#playlist_name').val();

            if (playlist_link == '') {
                $('#playlist_link_error').text('This Field Must be fillup');
                return false;
            } else {
                $('#playlist_link_error').text('');
            }

            if (playlist_name == '') {
                $('#playlist_name_error').text('This Field Must be fillup');
                return false;
            } else {
                $('#playlist_name_error').text('');
            }




            $("#containerForm").submit(); // Submit the form


        });
    });

</script>






