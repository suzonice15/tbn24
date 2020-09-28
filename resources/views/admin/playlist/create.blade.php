<form id="containerForm" class="form app-lb-ajax-form bv-form" data-multipart="true" enctype="multipart/form-data"
      action="{{url('/')}}/admin/playlist/store" method="post" novalidate="novalidate">
    @csrf


    <div id="LightBoxBody" class="lightbox-body" style="padding:0 4px 2px;">


        <div class="clearfix form-horizontal">

            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="row">

                        <div class="form-group has-feedback">
                            <label class="control-label col-md-3" for="category_id">Category</label>
                            <div class="col-md-9">
                                <select   class="form-control select2" id="category_id" name="category_id">
                                    @if($categories)
                                        @foreach($categories as $category)
                                            <option value="{{$category->category_id}}">{{$category->category_title}}</option>
                                        @endforeach
                                    @endif


                                </select>
                                <p style="color:red"  id="category_id_error"></p>

                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="control-label col-md-3" for="name">Name</label>
                            <div class="col-md-9">
                                <input type="text" maxlength="150" value="" class="form-control" id="playlist_name" name="playlist_name"
                                       placeholder="Name"   class="form-control-feedback"
                                       >
                                <p style="color:red"  id="playlist_name_error"></p>

                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="control-label col-md-3" for="playlist_link">Playlist Link</label>
                            <div class="col-md-9">
                                <input type="text" maxlength="255" value="" class="form-control" id="playlist_link"
                                       name="playlist_link" placeholder="Playlist Link"  >
                                <p  style="color:red"  id="playlist_link_error"></p>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-sm-4" style="height: auto; !important;">
                    <div id="previous_image" class="panel panel-default" style="border: 0px solid transparent">
                        <input id="image-selector" type="file" name="program_img" style="display: none;">
                        <div id="select_image" class="panel panel-default">
                            <div id="imageUploaderContainer" class="panel-body p-5"
                                 style="overflow: hidden; position: relative; height: 143.117px;">
                                <span class="img-info"
                                      style="position: absolute; left: 0px; right: 0px; text-align: center; top: 50%; font-size: 25px; margin-top: -32px;">Upload Image</span>
                                <div class="img-container"
                                     style="position: absolute; overflow: hidden; left: 5px; right: 5px; top: 5px; bottom: 5px;">
                                    <img class="image-display " style="display:none;  height: 100%">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row btn-group-md popup-footer text-right">
            <button type="button" class="btn btn-success" id="save_program_data"><i class="fa fa-save"></i>Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>

        </div>
        <script type="text/javascript">
            function doSqureImageBox() {
                var width = $("#imageUploaderContainer").width();
                $("#imageUploaderContainer").css("height", width + 20);
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


<script type="text/javascript">

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




