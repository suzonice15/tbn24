@if(isset($comments))
    <?php $i=$comments->perPage() * ($comments->currentPage()-1);?>

    @foreach ($comments as $comment)



        <tr id="{{$comment->sub_commets_id}}">
            <td><input type="checkbox" value="{{$comment->sub_commets_id}}" ></td>
            <td>{{ ++$i}} </td>

            <td>{{$comment->post_title}} </td>
            <td>{{$comment->name}} </td>
            <td>{{$comment->email}} </td>
            <td>{{$comment->comments}} </td>

            <td>{{date('d-m-Y',strtotime($comment->created_date))}}</td>
            <td>
                <button type="button" class="btn   btn-success edit_modal" data-toggle="modal" data-sub_commets_id="{{$comment->sub_commets_id}}"   data-target="#edit-program">
                    <i class="fa fa-edit"></i>
                </button>
            </td>
        </tr>

    @endforeach

    <tr>
        <td colspan="6" align="center">
            {!! $comments->links() !!}
        </td>
    </tr>
@endif


<script>



    $('.edit_modal').on('click',function () {

        let sub_commets_id=$(this).data("sub_commets_id") // will return the number 123


        $.ajax({
            type:"GET",
            url:"{{url('/admin/replay/comment')}}/"+sub_commets_id,
            success:function(data)
            {
                $('#append_edit_data').html(data)
            }
        })
    });
</script>



