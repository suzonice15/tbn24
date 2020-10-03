@if(isset($pulls))
    <?php $i=$pulls->perPage() * ($pulls->currentPage()-1);?>

    @foreach ($pulls as $pull)
        <tr>

         

            <td>{{ ++$i }}</td>
            <td>{{ $pull->program_name }}</td>
            <td>{{ $pull->pull_question }}</td>
            <td>
                @if( $pull->pull_status==1)
                    <span class="label label-success">Active</span>
                @else
                    <span class="label label-danger">Inactive</span>                     @endif


            </td>
             <td>{{date('d-m-Y',strtotime($pull->pull_created_date))}}</td>



            <td>


                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-pull_id="{{$pull->pull_id}}"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>


                <a title="delete" href="{{ url('admin/pulls/delete') }}/{{ $pull->pull_id }}" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
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
            url:"{{url('admin/news')}}/"+pull_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>
