<?php $__env->startSection('pageTitle'); ?>
    Update Home Page Website Information
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <style>
        .has-error {
            border-color: red;
        }
    </style>
    <div class="box-body">


        <form action="<?php echo e(url('admin/homepage/setting')); ?>" class="form-horizontal" method="post"
              enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="box" style="border: 2px solid #ddd;">
                <div class="box-header with-border" style="background-color: #ddd;color:black;">
                    <h3 class="box-title">Website Home Page   Information</h3>
                </div>
                <div class="box-body" style="padding: 22px;">
                     
                            <div class="form-group">
                                <label for="home_seo_title">Title</label>
                                <input type="text" class="form-control" name="home_seo_title" id="home_seo_title" value="<?=get_option('home_seo_title')?>">
                            </div>


                            <div class="form-group <?=get_option('home_seo_content') ? 'has-error' : ''?>">
                                <label for="home_seo_content">Meta Descripiton</label>
                                <textarea class="form-control" rows="5" name="home_seo_content"><?=get_option('home_seo_content')?></textarea>
                            </div>

                            <div class="form-group <?=get_option('home_seo_keywords') ? 'has-error' : ''?>">
                                <label for="home_seo_keywords">Meta Keywords</label>
                                <input type="text" class="form-control" name="home_seo_keywords" id="home_seo_keywords" value="<?=get_option('home_seo_keywords')?>">
                            </div>

                            <div  hidden class="form-group <?=get_option('home_about_title') ? 'has-error' : ''?>">
                                <label for="home_about_title">Home Page About Title</label>
                                <input type="text" class="form-control" name="home_about_title" id="home_about_title" value="<?=get_option('home_about_title')?>">
                            </div>

                            <div class="form-group <?=get_option('home_about_content') ? 'has-error' : ''?>">
                                <label for="home_about_content"> Content</label>
                                <textarea class="form-control" rows="5" name="home_about_content"><?=get_option('home_about_content')?></textarea>
                            </div>
                        </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-right">Update</button>
                </div>

            </div>







        </form>

    </div>


    <script>
        $(document).ready(function () {
            $("#category_title").on('input click', function () {
                var text = $("#category_title").val();
                var _token = $("input[name='_token']").val();

                var word = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                $("#category_name").val(word);
                $.ajax({
                    data: {url: word, _token: _token},
                    type: "POST",
                    url: "<?php echo e(url('category-urlcheck')); ?>",
                    success: function (result) {

                        // $('#categoryError').html(result);
                        var str2 = "es";
                        var word = $("#category_name").val(word);
                        if (result) {
                            var text = $("#category_title").val();
                            var word = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                            var word = word.concat(str2);
                            $("#category_name").val(word);

                        } else {
                            var text = $("#category_title").val();
                            var word = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                            $("#category_name").val(word);
                        }
                    }
                });
            });


        });
    </script>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/setting/home_page_setting.blade.php ENDPATH**/ ?>