
<?php $__env->startSection('mainContent'); ?>



<section id="about" style="padding-bottom: 10px;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-8">
				<div class="block   " style="visibility: visible;">
					<h2><?php echo e($program->program_name); ?></h2>
					<p class="text-justify" style="min-height: 500px;">

					 <?php echo e($program->program_details); ?>


					</p>
					

				</div>

			</div>
			<div class="col-md-4 col-sm-4">
								<img width="100%" src="<?php echo e(url('/')); ?>/public/uploads/program/<?php echo e($program->program_image); ?>" alt="<?php echo e($program->program_name); ?>" class="img-thumbnail img-responsive">
							</div>

		</div>
	</div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tbn24\resources\views/website/single_program.blade.php ENDPATH**/ ?>