<?php if(isset($videos)): ?>
    <?php $i=$videos->perPage() * ($videos->currentPage()-1);?>

    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

         

            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($video->video_name); ?></td>
            <td><?php echo e($video->video_id); ?></td>
            <td><?php echo e($video->order_by); ?></td>
             <td><?php echo e(date('d-m-Y',strtotime($video->created_data))); ?></td>
            <td>
                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-id="<?php echo e($video->id); ?>"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>
                <a title="delete" href="<?php echo e(url('/admin/popular/video/delete/')); ?>/<?php echo e($video->id); ?>" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="9" align="center">
            <?php echo $videos->links(); ?>

        </td>
    </tr>
<?php endif; ?>

<script>



    $('.edit_modal').on('click',function () {

        let id=$(this).data("id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"<?php echo e(url('/admin/popular/video')); ?>/"+id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>
<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/popularvideo/pagination.blade.php ENDPATH**/ ?>