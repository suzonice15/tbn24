@if(isset($posts))
    <?php $i=$posts->perPage() * ($posts->currentPage()-1);?>
    @foreach ($posts as $post)



        <tr>
            <td>{{ ++$i}} </td>
            <td>{{$post->post_title}} </td>
            <td> <img width="50" src="{{url('/')}}/public/uploads/post/{{$post->post_picture}}" ></td>
            <td><?php if($post->post_status==1) {echo "Active" ;}else{ echo "Inactive";} ?> </td>
            <td>{{date('d-m-Y',strtotime($post->post_created_date))}}</td>
            <td>

                <a  href="{{ url('admin/post') }}/{{ $post->post_id }}">
                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                </a>

                <a title="delete" href="{{ url('admin/post/delete') }}/{{ $post->post_id }}" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    @endforeach

    <tr>
        <td colspan="6" align="center">
            {!! $posts->links() !!}
        </td>
    </tr>
@endif





