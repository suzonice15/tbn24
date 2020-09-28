
<form id="containerForm" class="form app-lb-ajax-form bv-form" data-multipart="true" enctype="multipart/form-data" action="<?php echo e(url('/')); ?>/admin/news/store" method="post" novalidate="novalidate">
    <?php echo csrf_field(); ?>
    <div class="row ">

        <div class="clearfix form-horizontal">

            <div class="row">
                <div class="col-md-10 col-sm-8">


                        <div class="form-group has-feedback">
                            <label class="control-label col-md-3" for="pro_name">Title</label>
                            <div class="col-md-9">
                                <input type="text" maxlength="150" value="" class="form-control" id="news_title" name="news_title" placeholder="Title"  >
                                <p style="color:red" id="news_title_error"></p>

                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="control-label col-md-3" for="pro_dtls">Full News</label>
                            <div class="col-md-9">
                                <textarea type="text" maxlength="255" class="form-control" id="news_body" name="news_body" placeholder="Full News" ></textarea>
                                <p style="color:red" id="news_body_error"></p>

                            </div>
                        </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="status">Status</label>
                        <div class="col-md-9">
                            <select class="form-control" id="status" name="status">

                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
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


        </div>
         <script type="text/javascript">



            $(document).ready(function() {
$('#save_program_data').click(function () {
  let news_title=  $('#news_title').val();
  let news_body=  $('#news_body').val();
     if(news_title ==''){

        $('#news_title_error').text('This Field Must be fillup');
         return false;
    } else {
        $('#news_title_error').text('');


    }

    if(news_body ==''){

        $('#news_body_error').text('This Field Must be fillup');
        return false;
    } else {
        $('#news_body_error').text('');


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

<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/news/create.blade.php ENDPATH**/ ?>