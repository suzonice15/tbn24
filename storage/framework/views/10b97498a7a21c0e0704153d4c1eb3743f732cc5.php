
<form id="containerForm" class="form app-lb-ajax-form bv-form" data-multipart="true" enctype="multipart/form-data" action="<?php echo e(url('admin/pulls/update')); ?>/<?php echo e($pull->pull_id); ?>" method="post" novalidate="novalidate">
    <?php echo csrf_field(); ?>
    <div class="row ">

        <div class="clearfix form-horizontal">



            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="question">Question</label>
                <div class="col-md-6">
                    <input required type="text" maxlength="200" value="<?php echo e($pull->pull_question); ?>" class="form-control" id="pull_question" name="pull_question"
                           placeholder="Question" autocomplete="off">

                    <p id="pull_question_error" style="color:red"></p>

                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="expire_time">Expire Time</label>
                <div class="col-md-6">
                    <input type="text"  required  value="<?php echo e(date('d-m-Y',strtotime($pull->pull_expire_time))); ?>" class="form-control datepicker" id="pull_expire_time"
                           name="pull_expire_time" placeholder="Expire Time" autocomplete="off">
                </div>
            </div>

            <div class="form-group has-feedback">
                <form name="add_name" id="add_name">
                    <label class="control-label col-md-3" for="status"></label>
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field">

                                <?php
                                if(isset($options)) {

                                    $count=0;
                                    foreach ($options as $option){
                                ++$count;
                                ?>
                                <tr  id="row<?=$option->pull_add_option_id?>">
                                    <td><input type="text" name="name[]" value="<?=$option->option_name?>" placeholder="Enter your Name" class="form-control name_list" /></td>
                                    <?php
                                    if($count==1) {
                                    ?>
                                    <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button></td>
                                    <?php }  else { ?>
                                    <td><button type="button" name="remove" id="<?=$option->pull_add_option_id?>" class="btn btn-danger btn_remove">X</button></td>

                                <?php } ?>
                                </tr>

                                <?php
                                    }


                                    }  if($count==0) {


                                    ?>
                                    <tr>
                                        <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>
                                        <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button></td>
                                    </tr>
                                <?php  } ?>

                            </table>
                        </div>
                    </div>
                </form>
            </div>


            <div class="form-group">
                <label class="control-label col-md-3" for="status">Status</label>
                <div class="col-md-9">
                    <input type="radio" name="pull_status" value="1" <?php if($pull->pull_status==1) { echo 'checked';} else { echo '';} ?>  id="pull_status">
                    Active
                    <input type="radio"  value="0" <?php if($pull->pull_status==0) { echo 'checked';} else { echo '';} ?> id="pull_status"
                           name="pull_status">
                    Inactive

                </div>
            </div>


            <div class="form-group ">
                <label class="control-label col-md-3" for="status"></label>
                <div class="col-md-4">
                    <button type="button" class="btn btn-success" id="save_program_data"><i class="fa fa-save"></i>Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>
                </div>
            </div>


        </div>


    </div>

</form>


<script>
    $(document).ready(function(){
        var i=1;
        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });

    });
</script>


<script type="text/javascript">

    $(".datepicker").datepicker({ dateFormat: "dd-mm-yyyy", todayHighlight:'TRUE',
        autoclose: true,}).datepicker("setDate", new Date());


    $(document).ready(function() {
        $('#save_program_data').click(function () {
            let pull_question = $('#pull_question').val();
            if (pull_question =='') {
                $('#pull_question_error').text('This Field Must be fillup');
                return false;
            } else {
                $('#pull_question_error').text('');
            }
            $("#containerForm").submit(); // Submit the form
        });

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


<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/pull/edit.blade.php ENDPATH**/ ?>