@extends('layouts.master')

@section('mainContent')
    <div class="box-body">
        <div class="row">
            <div class="col-md-4">

                <a onclick="Grid_tab1_1600763452_download()" class="btn btn-xs btn-success"><i class="fa fa-download"></i> Download CSV</a>

            </div>
            {{--<div class="col-md-4 pull-right ">--}}
                {{--<input type="text" id="serach" name="search" placeholder="Search category" class="form-control" >--}}
            {{--</div>--}}

        </div>
        <br/>
        <br/>
        <div class="table-responsive">

            <table  class="table table-bordered table-striped   ">
                <thead>
                <tr>


                    <th>Sl</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Region</th>
                    <th>Country</th>
                    <th>Continent</th>
                    <th>Created date</th>
                    <th>Action </th>
                </tr>
                </thead>
                <tbody>

                @include('admin.user.websiteUserPagination')
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
                    url:"{{url('website/user/pagination/fetch_data')}}?page="+page+"&query="+query,
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

