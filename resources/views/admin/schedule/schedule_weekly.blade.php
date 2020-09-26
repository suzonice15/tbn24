@extends('layouts.master')

@section('mainContent')
    <div class="box-body">
        <div class="row">
            <div class="col-md-3">
                <button type="button" class="btn btn-success" data-toggle="modal" id="add_modal"
                        data-target="#add-schedule">
                    <i class="fa fa-plus"></i>Add New
                </button>
                <a onclick="Grid_tab1_1600763452_download()" class="btn   btn-success"><i class="fa fa-download"></i>
                    Download CSV</a>

            </div>
            <div class="col-md-3">
                <div class="col-md-3">
                    <label>Select Property</label>
                </div>
                <div class="col-md-8">
                    <select class="form-control" id="data_id">
                        <option value="">Select</option>
                        <option value="day">Day</option>
                        <option value="program">Program</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-md-3">
                    <label>Select Property</label>
                </div>
                <div class="col-md-7">


                    <select class="form-control " id="text_data" name="text_data">



                    </select>

                    <select class="form-control" id="program_id" name="program_id">

                        @if($programs)
                            @foreach($programs as $program)


                                <option value="{{$program->id}}">{{$program->program_name}}</option>

                            @endforeach
                        @endif

                    </select>
                    <select class="form-control" id="day_id" name="day_id">
                        <option value="">Select</option>
                        <option value="Sunday">Sunday</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>

                    </select>
                </div>
            </div>

            <div class="col-md-1">
                <button type="button" class="btn btn-info" id="search"
                        name="search" value="Search"><i class="fa fa-search"> </i>Search
                </button>
            </div>

        </div>
        <br/>
        <div class="table-responsive">

            <table class="table table-bordered table-striped   ">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Day</th>
                    <th>Program</th>

                    <th>Show Time</th>

                    <th>Chat Enabled</th>

                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @include('admin.schedule.pagination_schedule_weekly')
                </tbody>

            </table>

        </div>

        <div class="modal fade" id="add-schedule">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="font-weight: bold">&times;</span></button>
                        <h4 class="modal-title" style="text-align:center">New Daily Schedule
                        </h4>
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


        <input type="hidden" name="hidden_page" id="hidden_page" value="1"/>

        <script>
            $(document).ready(function () {

                function fetch_data(page) {
                    $.ajax({
                        type: "GET",
                        url: "{{url('schedules/pagination')}}?page=" + page,
                        success: function (data) {
                            $('tbody').html('');
                            $('tbody').html(data);
                        }
                    })
                }

                function fetch_data_by_program(program_id, schedule_date) {
                    $.ajax({
                        type: "GET",
                        url: "{{url('schedules/pagination_by_program_id')}}?program_id=" + program_id + "&schedule_date=" + schedule_date,
                        success: function (data) {
                            $('tbody').html('');
                            $('tbody').html(data);
                        }
                    })
                }


                $(document).on('click', '#search', function () {
                    var program_id = $('#program_id').val();
                    var day_id = $('#day_id').val();
                    if(program_id){
                        alert(program_id);
                    }

                    if(day_id){
                        alert(day_id);
                    }

                    var schedule_date = $('#schedule_date_using_ajax').val();
                    fetch_data_by_program(program_id, schedule_date);
                });


                $(document).on('click', '.pagination a', function (event) {
                    event.preventDefault();
                    var page = $(this).attr('href').split('page=')[1];
                    $('#hidden_page').val(page);
                    //   var program_id = $('#program_id_id').val();
                    fetch_data(page);
                });


                $('#add_modal').click(function () {
                    $.ajax({
                        type: "GET",
                        url: "{{url('admin/schedule-weekly/create')}}",
                        success: function (data) {
                            $('#append_data').html(data)
                        }
                    })
                });
                $('#day_id').hide();
                $('#program_id').hide();
                $('#data_id').change(function () {
                    let data_id = $('#data_id').val();
                    if (data_id == '') {
                        $('#text_data').show();
                        $('#program_id').hide();
                        $('#day_id').hide();
                    }
                    else if (data_id == 'day') {
                        $('#text_data').hide();
                        $('#program_id').hide();
                        $('#day_id').show();
                    } else {

                        $('#program_id').show();
                        $('#day_id').hide();
                        $('#text_data').hide();
                    }
                });


            });
        </script>





@endsection

