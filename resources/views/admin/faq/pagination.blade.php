@if(isset($faqs))
    <?php $i=$faqs->perPage() * ($faqs->currentPage()-1);?>

    @foreach ($faqs as $faq)
        <tr>

         
            <td>{{ ++$i}}</td>
            <td>{{ $faq->questions }}</td>
            <td>{{ $faq->answers }}</td>
             <td>{{date('d-m-Y',strtotime($faq->created_date))}}</td>

            <td>


                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-faq_id="{{$faq->faq_id}}"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>


                <a title="delete" href="{{ url('admin/faq/delete') }}/{{ $faq->faq_id }}" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    @endforeach

    <tr>
        <td colspan="9" align="center">
            {!! $faqs->links() !!}
        </td>
    </tr>
@endif

<script>



    $('.edit_modal').on('click',function () {

        let faq_id=$(this).data("faq_id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"{{url('admin/faq')}}/"+faq_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>
