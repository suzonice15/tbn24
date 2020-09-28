@if(isset($categories))
    <?php $i=0;?>
    @foreach ($categories as $category)



        <tr>
            <td>{{$category->category_title}} </td>



            <td><?php if($category->status==1) {echo "Active" ;}else{ echo "Inactive";} ?> </td>
            <td>{{date('d-m-Y',strtotime($category->created_date))}}</td>
            <td>
                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-category_id="{{$category->category_id}}"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>



                <a title="delete" href="{{ url('admin/category/delete') }}/{{ $category->category_id }}" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a></td>
        </tr>

    @endforeach

    <tr>
        <td colspan="6" align="center">
            {!! $categories->links() !!}
        </td>
    </tr>
@endif


<script>



    $('.edit_modal').on('click',function () {

        let category_id=$(this).data("category_id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"{{url('admin/category')}}/"+category_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>



