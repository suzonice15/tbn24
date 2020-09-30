@if(isset($programs))
    <?php $i=$programs->perPage() * ($programs->currentPage()-1);?>

    @foreach ($programs as $program)
        <tr>

         
            <td>{{ ++$i }}</td>
            <td>{{ $program->program_name }}</td>
            <td>
                <img width="50" src="{{ url('/public/uploads') }}/{{ $program->folder }}/program/{{ $program->program_image }}">
            </td>

            <td>
                @if( $program->status==1)
                     <span class="label label-success">Yes</span>
                    @else
                    <span class="label label-danger">No</span>                     @endif


            </td>


            <td>{{date('d-m-Y',strtotime($program->created_at))}}</td>

            <td>


                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-id="{{$program->id}}"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>


                <a title="delete" href="{{ url('admin/programs/delete') }}/{{ $program->id }}" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    @endforeach

    <tr>
        <td colspan="9" align="center">
            {!! $programs->links() !!}
        </td>
    </tr>
@endif

<script>



    $('.edit_modal').on('click',function () {

        let program_id=$(this).data("id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"{{url('admin/programs')}}/"+program_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>
