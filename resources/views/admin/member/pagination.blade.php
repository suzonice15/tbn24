@if(isset($members))
    <?php $i=$members->perPage() * ($members->currentPage()-1);?>
    @foreach ($members as $member)



        <tr>
            <td>{{ ++$i}} </td>
            <td> <img width="50" src="{{url('/')}}/public/uploads/member/{{$member->member_picture}}" ></td>

            <td>{{$member->member_name}} </td>
            <td>{{$member->member_status }} </td>
            <td>{{$member->department_name }} </td>
             <td>{{date('d-m-Y',strtotime($member->create_at))}}</td>
            <td>

                <a  href="{{ url('admin/members') }}/{{ $member->member_id  }}">
                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                </a>

                <a title="delete" href="{{ url('admin/members/delete') }}/{{ $member->member_id  }}" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    @endforeach

    <tr>
        <td colspan="6" align="center">
            {!! $members->links() !!}
        </td>
    </tr>
@endif





