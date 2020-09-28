<?php if(isset($playlists)): ?>
    <?php $i=0;?>
    <?php $__currentLoopData = $playlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $playlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



        <tr>
            <td> <img src="<?php echo e(url('/')); ?>/public/uploads/playlist/<?php echo e($playlist->playlist_picture); ?>" width="70"> </td>
            <td><?php echo e($playlist->playlist_name); ?> </td>
            <td><?php echo e($playlist->category_title); ?> </td>
            <td><?php echo e($playlist->playlist_link); ?> </td>             
            <td><?php echo e(date('d-m-Y',strtotime($playlist->created_date))); ?></td>
            <td>
                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-playlist_id="<?php echo e($playlist->playlist_id); ?>"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>



                <a title="delete" href="<?php echo e(url('admin/playlist/delete')); ?>/<?php echo e($playlist->playlist_id); ?>" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a></td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="6" align="center">
            <?php echo $playlists->links(); ?>

        </td>
    </tr>
<?php endif; ?>


<script>



    $('.edit_modal').on('click',function () {

        let playlist_id=$(this).data("playlist_id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"<?php echo e(url('admin/playlist')); ?>/"+playlist_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>



<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/playlist/pagination.blade.php ENDPATH**/ ?>