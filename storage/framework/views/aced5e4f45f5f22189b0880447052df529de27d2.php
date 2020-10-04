<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title" >Our Programs</h1>
        </div>
        <div class="row">

            <?php if($programs): ?>
                <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-4 col-xs-12">
                        <figure class=" portfolio-item"
                        >
                            <div class="img-wrapper">
                                <img width="100%" src="<?php echo e(url('/')); ?>/public/uploads/program/<?php echo e($program->program_image); ?>"
                                     class="img-responsive" alt="<?php echo e($program->program_name); ?>">
                                <div class="overlay">
                                    <div class="buttons">
                                        <a target="_blank" rel="noopener"
                                           href="<?php echo e(url('/')); ?>/program-details/<?php echo e($program->id); ?>">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="<?php echo e(url('/')); ?>/program-details/<?php echo e($program->id); ?>"> <?php echo e($program->program_name); ?> </a>
                                </h4>
                            </figcaption>
                        </figure>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <div class="text-center">
                <a href="<?php echo e(url('/')); ?>/all-program" class="btn btn-default">View All Program</a>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\tbn24\resources\views/website/ajax_home_page_program.blade.php ENDPATH**/ ?>