@if(isset($videos))
    <?php $i=$videos->perPage() * ($videos->currentPage()-1);?>

    @foreach ($videos as $video)
        <tr>

         

            <td>{{ ++$i }}</td>
            <td>{{ $video->video_name }}</td>
            <td>{{ $video->video_id }}</td>
            <td>{{ $video->order_by }}</td>
             <td>{{date('d-m-Y',strtotime($video->created_data))}}</td>
            <td>
                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-id="{{$video->id}}"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>
                <a title="delete" href="{{ url('/admin/popular/video/delete/') }}/{{ $video->id }}" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    @endforeach

    <tr>
        <td colspan="9" align="center">
            {!! $videos->links() !!}
        </td>
    </tr>
@endif

<script>



    $('.edit_modal').on('click',function () {

        let id=$(this).data("id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"{{url('/admin/popular/video')}}/"+id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>
