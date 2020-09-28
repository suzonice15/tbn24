
<form id="containerForm" class="form app-lb-ajax-form bv-form" data-multipart="true" enctype="multipart/form-data" action="<?php echo e(url('admin/faq/update')); ?>/<?php echo e($faq->faq_id); ?>" method="post" novalidate="novalidate">
    <?php echo csrf_field(); ?>
    <div class="row ">

        <div class="clearfix form-horizontal">

            <div class="row">
                <div class="col-md-10 col-sm-8">


                    <div class="form-group has-feedback">
                        <label class="control-label col-md-3" for="pro_name">Question</label>
                        <div class="col-md-9">
                            <input type="text" maxlength="150" value="<?php echo e($faq->questions); ?>" class="form-control" id="questions" name="questions" placeholder="Question"  >
                            <p style="color:red" id="questions_error"></p>

                        </div>
                    </div>

                    <div class="form-group has-feedback">
                        <label class="control-label col-md-3" for="pro_dtls">Answer</label>
                        <div class="col-md-9">
                            <textarea type="text" maxlength="255" class="form-control" id="answers" name="answers" placeholder="Answer" ><?php echo e($faq->answers); ?></textarea>
                            <p style="color:red" id="answers_error"></p>

                        </div>
                    </div>


                    <div class="form-group pull-right">
                        <button type="button" class="btn btn-success" id="save_program_data"><i class="fa fa-save"></i>Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>
                    </div>
                </div>




            </div>

        </div>

    </div>


    </div>
</form>

<script type="text/javascript">



    $(document).ready(function() {
        $('#save_program_data').click(function () {
            let questions=  $('#questions').val();
            let answers=  $('#answers').val();
            let image=  $('#image-selector').val();
            let youtube=  $('#youtube').val();
            if(questions ==''){

                $('#questions_error').text('This Field Must be fillup');
                return false;
            } else {
                $('#questions_error').text('');


            }

            if(answers ==''){

                $('#answers_error').text('This Field Must be fillup');
                return false;
            } else {
                $('#answers_error').text('');


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


<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/faq/edit.blade.php ENDPATH**/ ?>