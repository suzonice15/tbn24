@if(isset($playlists))
    <?php $i=$playlists->perPage() * ($playlists->currentPage()-1);?>

    @foreach ($playlists as $playlist)



        <tr>        <td>{{ ++$i}} </td>

            <td>{{$playlist->playlist_name}} </td>
            <td>{{$playlist->playlist_link}} </td>
            <td>{{$playlist->order_by}} </td>
            <td>{{$playlist->playlist_status==1? 'Published':'Unpublished'}} </td>


            <td>{{date('d-m-Y',strtotime($playlist->created_date))}}</td>
            <td>
                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-playlist_id="{{$playlist->playlist_id}}"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>



                <a title="delete" href="{{ url('admin/playlist/delete') }}/{{ $playlist->playlist_id }}" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a></td>
        </tr>

    @endforeach

    <tr>
        <td colspan="6" align="center">
            {!! $playlists->links() !!}
        </td>
    </tr>
@endif


<script>



    $('.edit_modal').on('click',function () {

        let playlist_id=$(this).data("playlist_id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"{{url('admin/playlist')}}/"+playlist_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>



