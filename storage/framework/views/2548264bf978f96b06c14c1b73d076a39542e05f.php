<?php if(isset($pulls)): ?>
    <?php $i=$pulls->perPage() * ($pulls->currentPage()-1);?>

    <?php $__currentLoopData = $pulls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pull): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

         

            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($pull->program_name); ?></td>
            <td><?php echo e($pull->pull_question); ?></td>
            <td>
                <?php if( $pull->pull_status==1): ?>
                    <span class="label label-success">Active</span>
                <?php else: ?>
                    <span class="label label-danger">Inactive</span>                     <?php endif; ?>


            </td>
             <td><?php echo e(date('d-m-Y',strtotime($pull->pull_created_date))); ?></td>



            <td>


                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-pull_id="<?php echo e($pull->pull_id); ?>"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>


                <a title="delete" href="<?php echo e(url('admin/pulls/delete')); ?>/<?php echo e($pull->pull_id); ?>" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="9" align="center">
            <?php echo $pulls->links(); ?>

        </td>
    </tr>
<?php endif; ?>

<script>



    $('.edit_modal').on('click',function () {

        let pull_id=$(this).data("pull_id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"<?php echo e(url('admin/news')); ?>/"+pull_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>
<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/pull/pagination.blade.php ENDPATH**/ ?>