<?php if(isset($pulls)): ?>
    <?php $i=$pulls->perPage() * ($pulls->currentPage()-1);?>

    <?php $__currentLoopData = $pulls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pull): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php

        ?>
        <tr>



            <td><?php echo e(++$i); ?></td>

            <td><?php echo e($pull->pull_question); ?></td>
            <td>
                <?php
                $options=DB::table('pull_add_option')->where('pull_id',$pull->pull_id)->get();
                $total_vote=DB::table('vote')->where('pull_id',$pull->pull_id)->count();
                    if($total_vote >0){
                    if($options){
                        foreach ($options as $option){

               $total_single_option_vote= DB::table('vote')->where('option_id',$option->pull_add_option_id)->count();


                    $vote_percent=($total_single_option_vote*100)/$total_vote;

                    ?>
               <?php echo e($vote_percent); ?> %   (<?php echo e($total_single_option_vote); ?> votes)
                        -
                    <span class="label label-success">

                <?php

                            echo $option->option_name;
                            ?>
                        </span>
                        <br/>



                    <?php  }
                        }

                    }
                ?>



            </td>
            <td><?php echo e($total_vote); ?></td>
            <td><?php echo e(date('d-m-Y',strtotime($pull->pull_created_date))); ?></td>
            <td><?php echo e(date('d-m-Y',strtotime($pull->pull_expire_time))); ?></td>



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
            url:"<?php echo e(url('admin/pulls')); ?>/"+pull_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>
<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/pull/pull_result_pagination.blade.php ENDPATH**/ ?>