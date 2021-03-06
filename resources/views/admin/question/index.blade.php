@extends('layouts.master')

@section('mainContent')
<div class="box-body">
    <div class="row">
        <div class="col-md-6"> 
             <a href="{{url('/admin/question/create')}}" class="btn btn-success btn-sm">Add New Question</a>
        </div>
        <div class="col-md-4  pull-right">
            <input type="text" id="serach" name="search" placeholder="Enter Question Name" class="form-control" >
        </div>
    </div>
    <br/>
    <div class="table-responsive">

        <table  class="table table-bordered table-striped   ">
            <thead>
            <tr>
                <th>Sl</th>
                <th>Qustion Name</th> 
                <th>Created Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

               @include('admin.question.pagination')
            </tbody>

        </table>

    </div>
 
</div>
 

    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

<script>
    $(document).ready(function(){

        function fetch_data(page, query)
        {
          $.ajax({
                type:"GET",
                url:"{{url('admin/question_pagination')}}?page="+page+"&query="+query,
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
    });
</script>





@endsection

