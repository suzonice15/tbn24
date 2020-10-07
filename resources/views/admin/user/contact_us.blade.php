@extends('layouts.master')

@section('mainContent')
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">

                <a style="display: none" onclick="Grid_tab1_1600763452_download()" class="btn btn-xs btn-success"><i class="fa fa-download"></i> Download CSV</a>

            </div>

        </div>
        <br/>
        <div class="table-responsive">

            <table  class="table table-bordered table-striped   ">
                <thead>
                <tr>

                    <th>Sl</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Contact Time</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @include('admin.user.pagination_contact_us')
                </tbody>

            </table>

        </div>





        <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

        <script>
            $(document).ready(function(){

                function fetch_data(page, query)
                {
                    $.ajax({
                        type:"GET",
                        url:"{{url('admin/pagination_contact_us')}}?page="+page+"&query="+query,
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

