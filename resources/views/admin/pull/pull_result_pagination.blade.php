@if(isset($pulls))
    <?php $i=$pulls->perPage() * ($pulls->currentPage()-1);?>

    @foreach ($pulls as $pull)

        <?php

        ?>
        <tr>



            <td>{{ ++$i }}</td>

            <td>{{ $pull->pull_question }}</td>
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
               {{round($vote_percent)}} %   ({{$total_single_option_vote}} votes)
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
            <td>{{$total_vote}}</td>
            <td>{{date('d-m-Y',strtotime($pull->pull_created_date))}}</td>
            <td>{{date('d-m-Y',strtotime($pull->pull_expire_time))}}</td>



        </tr>

    @endforeach

    <tr>
        <td colspan="9" align="center">
            {!! $pulls->links() !!}
        </td>
    </tr>
@endif

<script>



    $('.edit_modal').on('click',function () {

        let pull_id=$(this).data("pull_id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"{{url('admin/pulls')}}/"+pull_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>
