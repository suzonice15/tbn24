<?php
if($pulls){
$vote_percent=0;
foreach ($pulls as $pull){

$total_vote=DB::table('vote')->where('pull_id',$pull->pull_id)->count();

?>

<form class="poll-form" data-total-option="3" action="{{url('/')}}/vote/count?pull_id={{$pull->pull_id}}">

    @csrf
    <ul>
        <div class="question">{{$pull->pull_question}}</div>
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
            <input type="radio" name="option_id"  value="{{$option->pull_add_option_id}}">
            <label>{{$option->option_name}} ({{$vote_percent}}%)</label>

        </li>
        <?php } else { ?>

        <li>

            <label>{{$option->option_name}} ({{$vote_percent}}%)</label>

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




