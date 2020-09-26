<?php if(isset($programs)): ?>
    
    <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

         
            <td><?php echo e($program->id); ?></td>
            <td><?php echo e($program->program_name); ?></td>
            <td>
                <img width="50" src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($program->folder); ?>/program/<?php echo e($program->program_image); ?>">
            </td>

            <td>
                <?php if( $program->status==1): ?>
                     <span class="label label-success">Yes</span>
                    <?php else: ?>
                    <span class="label label-danger">No</span>                     <?php endif; ?>


            </td>


            <td><?php echo e(date('d-m-Y',strtotime($program->created_at))); ?></td>

            <td>


                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-id="<?php echo e($program->id); ?>"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>


                <a title="delete" href="<?php echo e(url('admin/programs/delete')); ?>/<?php echo e($program->id); ?>" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="9" align="center">
            <?php echo $programs->links(); ?>

        </td>
    </tr>
<?php endif; ?>

<script>



    $('.edit_modal').on('click',function () {

        let program_id=$(this).data("id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"<?php echo e(url('admin/programs')); ?>/"+program_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>
<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/program/pagination.blade.php ENDPATH**/ ?>