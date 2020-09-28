<?php if(isset($faqs)): ?>
    
    <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

         
            <td><?php echo e($faq->faq_id); ?></td>
            <td><?php echo e($faq->questions); ?></td>
            <td><?php echo e($faq->answers); ?></td>
             <td><?php echo e(date('d-m-Y',strtotime($faq->created_date))); ?></td>

            <td>


                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-faq_id="<?php echo e($faq->faq_id); ?>"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>


                <a title="delete" href="<?php echo e(url('admin/faq/delete')); ?>/<?php echo e($faq->faq_id); ?>" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="9" align="center">
            <?php echo $faqs->links(); ?>

        </td>
    </tr>
<?php endif; ?>

<script>



    $('.edit_modal').on('click',function () {

        let faq_id=$(this).data("faq_id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"<?php echo e(url('admin/faq')); ?>/"+faq_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>
<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/faq/pagination.blade.php ENDPATH**/ ?>