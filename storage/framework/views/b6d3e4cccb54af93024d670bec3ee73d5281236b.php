<?php if(isset($news)): ?>
    <?php $i=$news->perPage() * ($news->currentPage()-1);?>

    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

         

            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($new->news_title); ?></td>
            <td><?php echo e($new->news_body); ?></td>
            <td>
                <?php if( $new->status==1): ?>
                    <span class="label label-success">Active</span>
                <?php else: ?>
                    <span class="label label-danger">Inactive</span>                     <?php endif; ?>


            </td>
             <td><?php echo e(date('d-m-Y',strtotime($new->create_date))); ?></td>



            <td>


                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-news_id="<?php echo e($new->news_id); ?>"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>


                <a title="delete" href="<?php echo e(url('admin/news/delete')); ?>/<?php echo e($new->news_id); ?>" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="9" align="center">
            <?php echo $news->links(); ?>

        </td>
    </tr>
<?php endif; ?>

<script>



    $('.edit_modal').on('click',function () {

        let news_id=$(this).data("news_id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"<?php echo e(url('admin/news')); ?>/"+news_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>
<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/news/pagination.blade.php ENDPATH**/ ?>