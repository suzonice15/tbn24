

<?php $__env->startSection('mainContent'); ?>

    <div class="box-body">


        <div class="col-sm-offset-0 col-md-12">
            <form  name="category" action="<?php echo e(url('admin/app-setting')); ?>" class="form-horizontal"
                   method="post"
                   enctype="multipart/form-data">
                <?php echo csrf_field(); ?>


                    <!-- /.box-header -->
                    <div class="box-body" style="padding: 28px;">
                        <div class="form-group ">
                            <label for="site_title">App Timezone</label>
                            <input type="text" class="form-control" name="app_time_zone" id="app_time_zone"
                                   value="<?php echo e($setting_row->app_time_zone); ?>">
                        </div>
                        <div class="form-group ">
                            <label for="phone">Facebook App ID</label>
                            <input type="text" class="form-control" name="facebook" id="facebook"
                                   value="<?php echo e($setting_row->facebook); ?>">
                        </div>
                        <div class="form-group ">
                            <label for="phone">Google App ID</label>
                            <input type="text" class="form-control" name="google_app_id" id="google_app_id"
                                   value="<?php echo e($setting_row->google_app_id); ?>">
                        </div>
                        <div class="form-group ">
                            <label for="phone">Instagram ID</label>
                            <input type="text" class="form-control" name="instagram_id" id="instagram_id"
                                   value="<?php echo e($setting_row->instagram_id); ?>">
                        </div>

                        <div class="form-group ">
                            <label for="phone">Live URL</label>
                            <input type="text" class="form-control" name="live_url" id="live_url"
                                   value="<?php echo e($setting_row->live_url); ?>">
                        </div>
                        <div class="form-group ">
                            <label for="phone">Live URL BD</label>
                            <input type="text" class="form-control" name="live_url_bd" id="live_url_bd"
                                   value="<?php echo e($setting_row->live_url_bd); ?>">
                        </div>
                        <div class="form-group ">
                            <label for="phone">Program Start Type</label>
                            <input type="text" class="form-control" name="program_start_type" id="program_start_type"
                                   value="<?php echo e($setting_row->program_start_type); ?>">
                        </div>
                        <div class="form-group ">
                            <label for="phone">      Youtube Channel ID</label>
                            <input type="text" class="form-control" name="youtube_chanel" id="youtube_chanel"
                                   value="<?php echo e($setting_row->youtube_chanel); ?>">
                        </div>

                        <div class="form-group ">
                            <label for="phone">Google Map</label>
                            <input type="text" class="form-control" name="google_map" id="google_map"
                                   value="<?php echo e($setting_row->google_map); ?>">
                        </div>


                        <div class="form-group ">
                            <label for="phone">Contact Address</label>
                            <input type="text" class="form-control" name="contact_address" id="google_map"
                                   value="<?php echo e($setting_row->contact_address); ?>">
                        </div>
                        <div class="form-group ">
                            <label for="phone">Contact Phone </label>
                            <input type="text" class="form-control" name="contact_phone" id="google_map"
                                   value="<?php echo e($setting_row->contact_phone); ?>">
                        </div>
                        <div class="form-group ">
                            <label for="phone">Contact Email</label>
                            <input type="text" class="form-control" name="contact_email" id="google_map"
                                   value="<?php echo e($setting_row->contact_email); ?>">
                        </div>










                    </div>




                <div class="box-footer">
                    <input type="submit" class="btn btn-success pull-left" value="Update">

                </div>
            </form>


            </form>
        </div>
    </div>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/setting/app_setting.blade.php ENDPATH**/ ?>