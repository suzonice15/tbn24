<?php if(isset($contacts)): ?>
    <?php $i=$contacts->perPage() * ($contacts->currentPage()-1);?>

    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

<td><?php echo e(++$i); ?></td>

            <td><?php echo e($contact ->contact_name); ?></td>
            <td><?php echo e($contact ->contact_email); ?></td>
            <td><?php echo e($contact ->contact_subject); ?></td>
            <td><?php echo e($contact ->contact_message); ?></td>


            <td>
                <?php if( $contact ->status==1): ?>
                    <span class="label label-success">Seen</span>
                <?php else: ?>
                    <span class="label label-danger">Not Seen</span>
                <?php endif; ?>


            </td>


            <td><?php echo e($contact ->created_date); ?></td>

            <td>

                <?php if( $contact ->status==1): ?>

                <?php else: ?>
                    <a href="<?php echo e(url('/')); ?>/message/seen/<?php echo e($contact->contact_id); ?>" class="btn btn-success">View</a>
                <?php endif; ?>
            </td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="9" align="center">
            <?php echo $contacts->links(); ?>

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
<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/user/pagination_contact_us.blade.php ENDPATH**/ ?>