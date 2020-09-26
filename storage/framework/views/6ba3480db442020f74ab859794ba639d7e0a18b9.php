<?php if(isset($schedules)): ?>
    
    <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

         
            <td><?php echo e($schedule->id); ?></td>
            <td><?php echo e($schedule->program_name); ?></td>
            <td><?php echo e($schedule->schedule_date); ?></td>
            <td><?php echo e($schedule->start_time); ?></td>
            <td><?php echo e($schedule->end_time); ?></td>


            <td>
                <?php if( $schedule->chat_status==1): ?>
                     <span class="label label-success">Yes</span>
                    <?php else: ?>
                    <span class="label label-danger">No</span>                     <?php endif; ?>


            </td>



            <td>


                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-id="<?php echo e($schedule->id); ?>"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>


                <a title="delete" href="<?php echo e(url('admin/schedules/delete')); ?>/<?php echo e($schedule->id); ?>" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="9" align="center">
            <?php echo $schedules->links(); ?>

        </td>
    </tr>
<?php endif; ?>

<script>



    $('.edit_modal').on('click',function () {

        let schedule_id=$(this).data("id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"<?php echo e(url('admin/schedules')); ?>/"+schedule_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>
<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/schedule/pagination.blade.php ENDPATH**/ ?>