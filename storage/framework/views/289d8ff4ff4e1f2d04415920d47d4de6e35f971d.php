<?php if(isset($categories)): ?>
    <?php $i=$categories->perPage() * ($categories->currentPage()-1);?>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



        <tr>
            <td><?php echo e(++$i); ?> </td>
            <td><?php echo e($category->category_title); ?> </td>



            <td><?php if($category->status==1) {echo "Active" ;}else{ echo "Inactive";} ?> </td>
            <td><?php echo e(date('d-m-Y',strtotime($category->created_date))); ?></td>
            <td>
                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-category_id="<?php echo e($category->category_id); ?>"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>



                <a title="delete" href="<?php echo e(url('admin/category/delete')); ?>/<?php echo e($category->category_id); ?>" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a></td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="6" align="center">
            <?php echo $categories->links(); ?>

        </td>
    </tr>
<?php endif; ?>


<script>



    $('.edit_modal').on('click',function () {

        let category_id=$(this).data("category_id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"<?php echo e(url('admin/category')); ?>/"+category_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>



<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/category/pagination.blade.php ENDPATH**/ ?>