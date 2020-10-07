
<?php $__env->startSection('mainContent'); ?>
    <section id="works" class="works" style="margin-top: 92px; margin-bottom: 10px;">
        <div class="container">
            <br>
            <div class="section-heading" style="margin-bottom: 10px;">
                <h1 class="title wow fadeInDown animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">Today's Schedule</h1>
            </div>
            <div class="row">


                <?php if($today_programs): ?>
                    <?php $__currentLoopData = $today_programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 all-program-item">
                    <div class="program v ">
                        <div class="col-xs-4 img-container" style="background: url(<?php echo e(url('/')); ?>/public/uploads/program/<?php echo e($program->program_image); ?>); ">
                        </div>
                        <div class="col-xs-5">
                            <div class="program-title "><?php echo e($program->program_name); ?></div>
                            <div class="program-details"><?php echo e(date('d M , Y ',strtotime($program->schedule_date))); ?></div>
                            <div class="program-date"><a href="<?php echo e(url('/')); ?>/program-details/<?php echo e($program->program_id); ?>" class="btn  btn-xs btn-default">View Detail</a></div>
                        </div>
                        <div class="col-xs-3">
                            <div class="program-time-circle list-item"><?php echo date('H:i',strtotime($program->start_time)) ?></div>
                        </div>
                    </div>
                </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tbn24\resources\views/website/today_schedule.blade.php ENDPATH**/ ?>