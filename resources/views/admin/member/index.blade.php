@extends('layouts.master')
@section('pageTitle')
    All Categoreis  List
@endsection
@section('mainContent')
<div class="box-body">
    <div class="row">
        <div class="col-md-4">
            <a   class="btn  btn-success" href="{{url('/')}}/admin/members/create">
                <i class="fa fa-plus"></i>Add New
            </a>

        </div>
        <div class="col-md-4 pull-right ">
            <input type="text" id="serach" name="search" placeholder="Enter Member Title" class="form-control" >
        </div>

    </div>
    <br/>
    <br/>
    <div class="table-responsive">

        <table  class="table table-bordered table-striped   ">
            <thead>
            <tr>
                <th>Sl</th>
                <th>Picture</th>
                <th>Member Name</th>
                <th>Member Status</th>
                <th>Departman</th>
                <th>Created date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
               @include('admin.member.pagination')
            </tbody>

        </table>

    </div>


    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

</div>

<script>
    $(document).ready(function(){


        function fetch_data(page, query)
        {
            $.ajax({
                type:"GET",
                url:"{{url('admin/member_pagination')}}?page="+page+"&query="+query,
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

