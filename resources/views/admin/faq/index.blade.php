@extends('layouts.master')

@section('mainContent')
<div class="box-body">
    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-success" data-toggle="modal" id="add_modal" data-target="#add-program">
                <i class="fa fa-plus"></i>Add New
            </button>
            <a  style="display: none" onclick="Grid_tab1_1600763452_download()" class="btn btn-xs btn-success"><i class="fa fa-download"></i> Download CSV</a>

        </div>
        <div class="col-md-4  pull-right">
            <input type="text" id="serach" name="search" placeholder="Enter Faq " class="form-control" >
        </div>
    </div>
    <br/>
    <div class="table-responsive">

        <table  class="table table-bordered table-striped   ">
            <thead>
            <tr>
                <th>Sl</th>
                <th width="20%">Questions</th>
                <th width="50%">Anwsers</th>
                <th>Created Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

               @include('admin.faq.pagination')
            </tbody>

        </table>

    </div>

    <div class="modal fade" id="add-program">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-weight: bold">&times;</span></button>
                    <h4 class="modal-title" style="text-align:center">Add New FAQ</h4>
                </div>
                <div class="modal-body" id="append_data">

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>


    <div class="modal fade" id="edit-program">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-weight: bold">&times;</span></button>
                    <h4 class="modal-title" style="text-align:center">Edit Program</h4>
                </div>
                <div class="modal-body" id="append_edit_data">

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->

    </div>


    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

<script>
    $(document).ready(function(){

        function fetch_data(page, query)
        {
          $.ajax({
                type:"GET",
                url:"{{url('faq/pagination')}}?page="+page+"&query="+query,
                success:function(data)
                {
                    $('tbody').html('');
                    $('tbody').html(data);
                }
            })
        }

        $(document).on('keyup input', '#serach', function(){
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


$('#add_modal').click(function () {
    $.ajax({
        type:"GET",
        url:"{{url('admin/faq/create')}}",
        success:function(data)
        {
             $('#append_data').html(data)
        }
    })
});





    });
</script>





@endsection

