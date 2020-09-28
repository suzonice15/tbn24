
<form id="containerForm" class="form app-lb-ajax-form bv-form" data-multipart="true" enctype="multipart/form-data" action="<?php echo e(url('admin/category/update')); ?>/<?php echo e($category->category_id); ?>" method="post" novalidate="novalidate">
    <?php echo csrf_field(); ?>
    <div class="row ">
        <div class="col-md-10 col-sm-8">
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="pro_name">Name</label>
                <div class="col-md-9">
                    <input type="text" maxlength="150" value="<?php echo e($category->category_title); ?>" class="form-control" id="category_title" name="category_title" placeholder="Name"  >
                    <p style="color:red" id="category_title_error"></p>

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
                <br>
                <br>
                <button type="button" class="btn btn-success" id="save_program_data"><i class="fa fa-save"></i>Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>

            </div>
        </div>



    </div>



</form>

<script type="text/javascript">

    document.forms['containerForm'].elements['status'].value = "<?php echo e($category->status); ?>";


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

</script>


<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>