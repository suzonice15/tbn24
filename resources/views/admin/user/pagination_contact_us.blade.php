@if(isset($contacts))
    <?php $i=$contacts->perPage() * ($contacts->currentPage()-1);?>

    @foreach ($contacts as $contact)
        <tr>

<td>{{ ++$i }}</td>

            <td>{{ $contact ->contact_name }}</td>
            <td>{{ $contact ->contact_email }}</td>
            <td>{{ $contact ->contact_subject }}</td>
            <td>{{ $contact ->contact_message }}</td>


            <td>
                @if( $contact ->status==1)
                    <span class="label label-success">Seen</span>
                @else
                    <span class="label label-danger">Not Seen</span>
                @endif


            </td>


            <td>{{$contact ->created_date}}</td>

            <td>

                @if( $contact ->status==1)

                @else
                    <a href="{{url('/')}}/message/seen/{{$contact->contact_id}}" class="btn btn-success">View</a>
                @endif
            </td>
        </tr>

    @endforeach

    <tr>
        <td colspan="9" align="center">
            {!! $contacts->links() !!}
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
