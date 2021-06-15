@if(isset($departments))
    <?php $i=$departments->perPage() * ($departments->currentPage()-1);?>
    @foreach ($departments as $department)



        <tr>
            <td>{{ ++$i}} </td>
            <td>{{$department->department_name}} </td>
             <td>

                <a  href="{{ url('admin/departments') }}/{{ $department->department_id  }}">
                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                </a>

                <a title="delete" href="{{ url('admin/departments/delete') }}/{{ $department->department_id  }}" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    @endforeach

    <tr>
        <td colspan="6" align="center">
            {!! $departments->links() !!}
        </td>
    </tr>
@endif





