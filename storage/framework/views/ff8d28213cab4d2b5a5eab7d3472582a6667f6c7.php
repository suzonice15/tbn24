<?php if(isset($users)): ?>
    <?php $i=0;?>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



        <tr>
             <td><?php echo e($user->name); ?> </td>
            <td><?php echo e($user->phone); ?> </td>
            <td><?php echo e($user->email); ?> </td>
            <td><?php echo e($user->address); ?> </td>
            <td><?php echo e($user->city); ?> </td>
            <td><?php echo e($user->region); ?> </td>
            <td><?php echo e($user->country); ?> </td>
            <td><?php echo e($user->continent_name); ?> </td>
            <td><?php echo e(date('d-m-Y',strtotime($user->created_at))); ?></td>
            <td>
                
                    
                



                <a title="delete" href="<?php echo e(url('admin/website/user/delete')); ?>/<?php echo e($user->id); ?>" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a></td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="6" align="center">
            <?php echo $users->links(); ?>

        </td>
    </tr>
<?php endif; ?>


<script>



    $('.edit_modal').on('click',function () {

        let id=$(this).data("id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"<?php echo e(url('admin/playlist')); ?>/"+id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>



<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/user/websiteUserPagination.blade.php ENDPATH**/ ?>