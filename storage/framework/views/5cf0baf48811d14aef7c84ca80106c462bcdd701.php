
<?php $__env->startSection('customerContent'); ?>

    <div class="row">
        <div class="col-sm-8">
            <div class="page-header"><h1>My Profile</h1></div>
        </div>
    </div>
    <div class="innerbox editbox">
        <form method="post" action="<?php echo e(url('/')); ?>/myprofile_save" id="useredit" enctype="multipart/form-data">
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
                                <label for="user_name">Name</label>
                                <input
                                        type="text" name="name" id="name" class="form-control"
                                        value="<?php echo e($user->name); ?>">
                            </div>
                            <div class="form-group"><label for="user_phone">Phone</label> <input
                                        type="text" name="phone" id="phone"
                                        class="form-control" readonly value="<?php echo e($user->phone); ?>"></div>
                            <div class="form-group"><label for="user_email">Email</label> <input
                                        type="text" name="email" id="email"
                                        class="form-control" readonly value="<?php echo e($user->email); ?>"></div>
                            <div class="form-group"><label for="user_address">Address</label>

                                <textarea name="address" id="address" class="form-control" ><?php echo e($user->address); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="user_city">City</label>
                                <input
                                        type="text" name="city" id="city" class="form-control"
                                        value="<?php echo e($user->city); ?>">
                            </div>
                            <div class="form-group">
                                <label for="user_city">Division</label>
                                <input
                                        type="text" name="region" id="region" class="form-control"
                                        value="<?php echo e($user->region); ?>">
                            </div>
                            <div class="form-group">
                                <label for="County">Country</label>
                                <input
                                        type="text" name="country" id="country" class="form-control"
                                        value="<?php echo e($user->country); ?>">
                            </div>
                            <div class="form-group">
                                <label for="County">Continent</label>
                                <input
                                        type="text" name="continent_name" id="continent_name" class="form-control"
                                        value="<?php echo e($user->continent_name); ?>">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.customer.my_account_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tbn24\resources\views/website/customer/my_profile.blade.php ENDPATH**/ ?>