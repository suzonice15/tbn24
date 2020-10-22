@extends('layouts.master')

@section('mainContent')
<div class="box-body">
    <div class="row">
        <div class="col-md-2 pull-right ">
            <button type="button" id="btn_delete" class="btn btn-danger">Multiple Delete</button>
        </div>
        <div class="col-md-4 pull-right ">
            <input type="text" id="serach" name="search" placeholder="Search Post Name" class="form-control" >
        </div>


    </div>
    <br/>
    <br/>
    <div class="table-responsive">

        <table  class="table table-bordered table-striped   ">
            <thead>
            <tr>

                <th>
                    Select All
                    <input id="checkAll" style="width: 50px" type="checkbox" >

                </th>
                <th>Sl</th>

                <th>Post Name</th>
                 <th>Name</th>
                 <th>Mail</th>
                <th>Comment</th>

                 <th>Created date</th>
                <th>Action </th>
            </tr>
            </thead>
            <tbody>

               @include('admin.replaycomment.pagination')
            </tbody>

        </table>

    </div>


    <div class="modal fade" id="edit-program">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-weight: bold">&times;</span></button>
                    <h4 class="modal-title" style="text-align:center">Edit Replay Comment </h4>
                </div>
                <div class="modal-body" id="append_edit_data">

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->

    </div>

    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

</div>

<script>
    $(document).ready(function(){

        $('#btn_delete').click(function(){

            if(confirm("Are you sure you want to delete this?"))
            {
                var comment_id = [];

                $(':checkbox:checked').each(function(i){
                    comment_id[i] = $(this).val();
                });

                if(comment_id.length === 0) //tell you if the array is empty
                {
                    alert("Please Select atleast one checkbox");
                }
                else
                {
                    $.ajax({
                        url:'{{url('/')}}/admin/replay/comment/delete',
                        method:'POST',
                        data:{sub_commets_id:comment_id,  "_token": "{{ csrf_token() }}",},
                        success:function()
                        {
                            for(var i=0; i<comment_id.length; i++)
                            {
                                $('tr#'+comment_id[i]+'').css('background-color', 'red');
                                $('tr#'+comment_id[i]+'').fadeOut('slow');
                            }
                        }

                    });
                }

            }
            else
            {
                return false;
            }
        });

    });
</script>

<script>
    $(document).ready(function(){

        $("#checkAll").click(function(){
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        function fetch_data(page, query)
        {
            $.ajax({
                type:"GET",
                url:"{{url('replay/comment/pagination/fetch_data')}}?page="+page+"&query="+query,
                success:function(data)
                {
                    $('tbody').html('');
                    $('tbody').html(data);
                }
            })
        }

        $(document).on('keyup', '#serach', function(){
            var query = $('#serach').val();
            var page = $('#hidden_page').val();
            if(query.length >0) {
                fetch_data(page, query);
            } else {
                fetch_data(1, '');
            }
        });


        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            $('#hidden_page').val(page);
            var query = $('#serach').val();
            fetch_data(page, query);
        });
    });
</script>


@endsection

