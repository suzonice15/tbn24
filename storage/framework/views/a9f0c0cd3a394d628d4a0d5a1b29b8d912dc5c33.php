
<?php $__env->startSection('customerContent'); ?>

    <div class="row">
        <div class="col-sm-8">
            <div class="page-header"><h1>Picture Updated</h1></div>
        </div>
    </div>
    <div class="innerbox editbox">
        <form method="post" action="<?php echo e(url('/')); ?>/customer/photo/changed" id="useredit" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-sm-8">
                    <div class="box">
                        <div class="txtinfo">


                            <div class="form-group">

                                <?php if(Session::has('success')): ?>

                                    <div class="alert alert-success">

                                        <?php echo e(Session::get('success')); ?>


                                        <?php

                                        Session::forget('success');

                                        ?>

                                    </div>

                                <?php endif; ?>

                            </div>

                            <div class="form-group">

                                <?php if(Session::has('error')): ?>

                                    <div class="alert alert-danger">

                                        <?php echo e(Session::get('error')); ?>


                                        <?php

                                        Session::forget('error');

                                        ?>

                                    </div>

                                <?php endif; ?>

                            </div>
                            <div class="form-group">
                                <label for="user_name">Old Password</label>
                                <input
                                        type="file" name="user_picture" id="user_picture" class="form-control"
                                       >
                            </div>



                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.customer.my_account_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tbn24\resources\views/website/customer/photo_changed.blade.php ENDPATH**/ ?>