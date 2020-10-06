<?php
if($pulls){
$vote_percent=0;
foreach ($pulls as $pull){

$total_vote=DB::table('vote')->where('pull_id',$pull->pull_id)->count();

?>

<form class="poll-form" data-total-option="3" action="<?php echo e(url('/')); ?>/vote/count?pull_id=<?php echo e($pull->pull_id); ?>">

    <?php echo csrf_field(); ?>
    <ul>
        <div class="question"><?php echo e($pull->pull_question); ?></div>
        <?php
        $options=DB::table('pull_add_option')->where('pull_id',$pull->pull_id)->get();


        if($options){
        foreach ($options as $option){
        if($total_vote >0){
            $total_single_option_vote= DB::table('vote')->where('option_id',$option->pull_add_option_id)->count();


            $vote_percent=($total_single_option_vote*100)/$total_vote;
        }



        $already_given_vote= DB::table('vote')->where('ip',$ip)->where('pull_id',$pull->pull_id)->count();
        if($already_given_vote==0){

        ?>


        <li>
            <input type="radio" name="option_id"  value="<?php echo e($option->pull_add_option_id); ?>">
            <label><?php echo e($option->option_name); ?> (<?php echo e($vote_percent); ?>%)</label>

        </li>
        <?php } else { ?>

        <li>

            <label><?php echo e($option->option_name); ?> (<?php echo e($vote_percent); ?>%)</label>

        </li>

        <?php } } }?>



    </ul>
    <?php    if($already_given_vote==0){ ?>
    <button type="submit" class="btn btn-success" >Vote</button>
    <?php } else { ?>
    <p>You Already Given Vote</p>

    <?php }?>

</form>

<?php } }?>




<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/website/ajax_poll.blade.php ENDPATH**/ ?>