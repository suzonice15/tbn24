
<?php $count=0;?>
@if(isset($schedules))

    @foreach ($schedules as $schedule)
        <tr>


            <td>{{ ++$count }}</td>
            <td>{{ $schedule->day }}</td>
            <td>{{ $schedule->program_name }}</td>

            <td>{{ date('H:i',strtotime($schedule->start_time)) }}-{{  date('H:i',strtotime($schedule->end_time)) }}</td>



            <td>
                @if( $schedule->chat_status==1)
                    <span class="label label-success">Yes</span>
                @else
                    <span class="label label-danger">No</span>                     @endif


            </td>



            <td>


                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>


                <a title="delete" href="{{ url('admin/schedule-weekly/delete') }}/{{ $schedule->id }}" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    @endforeach


@endif

<script>



    $('.edit_modal').on('click',function () {
        let schedule_id=$(this).data("id") // will return the number 123
        $.ajax({
            type:"GET",
            url:"{{url('admin/schedule-weekly')}}/"+schedule_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>
