@if(isset($users))
    <?php $i=0;?>
    @foreach ($users as $user)



        <tr>
             <td>{{$user->name}} </td>
            <td>{{$user->phone}} </td>
            <td>{{$user->email}} </td>
            <td>{{$user->address}} </td>
            <td>{{$user->city}} </td>
            <td>{{$user->region}} </td>
            <td>{{$user->country}} </td>
            <td>{{$user->continent_name}} </td>
            <td>{{date('d-m-Y',strtotime($user->created_at))}}</td>
            <td>
                {{--<button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-id="{{$user->id}}"   data-target="#edit-program">--}}
                    {{--<i class="fa fa-edit"></i>--}}
                {{--</button>--}}



                <a title="delete" href="{{ url('admin/website/user/delete') }}/{{ $user->id }}" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a></td>
        </tr>

    @endforeach

    <tr>
        <td colspan="6" align="center">
            {!! $users->links() !!}
        </td>
    </tr>
@endif


<script>



    $('.edit_modal').on('click',function () {

        let id=$(this).data("id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"{{url('admin/playlist')}}/"+id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>



