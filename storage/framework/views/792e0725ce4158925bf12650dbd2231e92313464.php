<?php $__env->startSection('mainContent'); ?>

<div class="row">
    <div class="col-lg-3 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo e($total_programs); ?></h3>

                <p>Total Program</p>
            </div>
            <div class="icon">
                <i class="fa fa-tv"></i>
            </div>
            <a href="<?php echo e(url('')); ?>/admin/programs" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?php echo e($total_users); ?></h3>

                <p>Total Users</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo e(url('/')); ?>/admin/website/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?php echo e($today_schedule); ?></h3>

                <p>Today Schedule</p>
            </div>
            <div class="icon">
                <i class="fa fa-tv"></i>
            </div>
            <a href="<?php echo e(url('/')); ?>/admin/schedules" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?php echo e($message); ?></h3>

                <p>Unseen Message</p>
            </div>
            <div class="icon">
                <i class="fa fa-tv"></i>
            </div>
            <a href="<?php echo e(url('/')); ?>/admin/contact-us" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <!-- ./col -->
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tbn24\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>