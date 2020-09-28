@if(isset($news))
    
    @foreach ($news as $new)
        <tr>

         

            <td>{{ $new->news_title }}</td>
            <td>{{ $new->news_body }}</td>
            <td>
                @if( $new->status==1)
                    <span class="label label-success">Active</span>
                @else
                    <span class="label label-danger">Inactive</span>                     @endif


            </td>
             <td>{{date('d-m-Y',strtotime($new->create_date))}}</td>



            <td>


                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-news_id="{{$new->news_id}}"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>


                <a title="delete" href="{{ url('admin/news/delete') }}/{{ $new->news_id }}" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    @endforeach

    <tr>
        <td colspan="9" align="center">
            {!! $news->links() !!}
        </td>
    </tr>
@endif

<script>



    $('.edit_modal').on('click',function () {

        let news_id=$(this).data("news_id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"{{url('admin/news')}}/"+news_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>
