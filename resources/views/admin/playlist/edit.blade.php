
<form id="containerForm" class="form app-lb-ajax-form bv-form" data-multipart="true" enctype="multipart/form-data" action="{{ url('admin/playlist/update') }}/{{ $playlist->playlist_id }}" method="post" novalidate="novalidate">
    @csrf

    <div id="LightBoxBody" class="lightbox-body" style="padding:0 4px 2px;">


        <div class="clearfix form-horizontal">

            <div class="row">


                <div class="form-group has-feedback">
                    <label class="control-label col-md-4" for="name">Play list Name</label>
                    <div class="col-md-7">
                        <input type="text" maxlength="150" value="{{ $playlist->playlist_name }}" class="form-control" id="playlist_name" name="playlist_name"
                               placeholder="Name"   class="form-control-feedback"
                        >
                        <p style="color:red"  id="playlist_name_error"></p>

                    </div>
                </div>

                <div class="form-group has-feedback">
                    <label class="control-label col-md-4" for="playlist_link">Playlist Link</label>
                    <div class="col-md-7">
                        <input type="text" maxlength="255" value="{{ $playlist->playlist_link }}" class="form-control" id="playlist_link"
                               name="playlist_link" placeholder="Playlist Link"  >
                        <p  style="color:red"  id="playlist_link_error"></p>

                    </div>
                </div>

                <div class="form-group has-feedback">
                    <label class="control-label col-md-4" for="playlist_link">Playlist Serial</label>
                    <div class="col-md-7">
                        <input required type="number" maxlength="255" value="{{ $playlist->order_by }}" class="form-control" id="order_by"
                               name="order_by" placeholder="Playlist Serial"  >
                        <p  style="color:red"  id="order_by_error"></p>

                    </div>
                </div>

                <div class="form-group has-feedback">
                    <label class="control-label col-md-4" for="playlist_link">Playlist Status</label>
                    <div class="col-md-7">
                        <select class="form-control" name="playlist_status" id="playlist_status">

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

    $(document).ready(function () {
        document.forms['containerForm'].elements['playlist_status'].value="<?php echo $playlist->playlist_status;?>";
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






