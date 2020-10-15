@if(isset($documents))
    <?php $i=$documents->perPage() * ($documents->currentPage()-1);?>
    @foreach ($documents as $document)
        <tr>
            <td>{{ ++$i}} </td>
            <td>{{$document->document_title}} </td>
            <td>@php echo $document->document_description @endphp </td>
            <td>{{$document->document_download}} </td>

            <td><?php if($document->document_status==1) {echo "Active" ;}else{ echo "Inactive";} ?> </td>
            <td>{{date('d-m-Y',strtotime($document->create_date))}}</td>
            <td>

                <a  href="{{ url('admin/document') }}/{{ $document->document_id  }}">
                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                </a>

                <a title="delete" href="{{ url('admin/document/delete') }}/{{ $document->document_id  }}" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    @endforeach

    <tr>
        <td colspan="6" align="center">
            {!! $documents->links() !!}
        </td>
    </tr>
@endif





