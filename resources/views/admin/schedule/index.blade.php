@extends('layouts.master')

@section('mainContent')
    <div class="box-body">
        <div class="row">
            <div class="col-md-3">
                <button type="button" class="btn btn-success" data-toggle="modal" id="add_modal"
                        data-target="#add-schedule">
                    <i class="fa fa-plus"></i>Add New
                </button>
                <a style="display:none" onclick="Grid_tab1_1600763452_download()" class="btn   btn-success"><i
                            class="fa fa-download"></i> Download CSV</a>

            </div>
            <div class="col-md-3">
                <div class="col-md-4">

                    <label>Program</label>
                </div>
                <div class="col-md-8">
                    <select class="form-control select2" id="program_id_id" name="program_id_id">
                        <option value="1">All</option>
                        @if($programs)
                            @foreach($programs as $program)
                                <option value="{{$program->id}}">{{$program->program_name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="col-md-3">
                    <label>Date</label>
                </div>
                <div class="col-md-9">
                    <input autocomplete="off" type="text" maxlength="" value="" class="form-control datepicker_index"
                           id="schedule_date_using_ajax"
                           name="schedule_date" placeholder="Date">
                </div>


            </div>

            <div class="col-md-3">


                <button type="button" class="btn   btn-info" id="search"
                        name="search" value="Search"><i class="fa fa-search"> </i>Search
                </button>
                <button type="button" class="btn   btn-info" id="insert_data"
                        name="insert_data" value="insert_data"><i class="fa fa-plus"> </i>Load Data
                </button>

            </div>

        </div>
        <br/>
        <div class="table-responsive">

            <table class="table table-bordered table-striped   ">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Program</th>
                    <th>Date</th>
                    <th>Day</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Chat Enabled</th>

                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @include('admin.schedule.pagination')
                </tbody>

            </table>

        </div>

        <div class="modal fade" id="add-schedule">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="font-weight: bold">&times;</span></button>
                        <h4 class="modal-title" style="text-align:center">Add New Schedule
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
                        <h4 class="modal-title" style="text-align:center">Edit Schedule
                        </h4>
                    </div>
                    <div class="modal-body" id="append_edit_data">

                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->

        </div>


        <input type="hidden" name="hidden_page" id="hidden_page" value="1"/>

        <script defer>
            $(document).ready(function () {

                function fetch_data(page) {
                    $.ajax({
                        type: "GET",
                        url: "{{url('schedules/pagination')}}?page=" + page,
                        success: function (data) {
                            $('tbody').empty();
                            $('tbody').html(data);
                        }
                    })
                }

                function fetch_data_by_program(program_id, schedule_date) {
                    $.ajax({
                        type: "GET",
                        url: "{{url('schedules/pagination_by_program_id')}}?program_id=" + program_id + "&schedule_date=" + schedule_date,
                        success: function (data) {
                            console.log(data);
                            $('tbody').empty();
                            $('tbody').html(data);
                        }
                    })
                }

                function fetch_data_or_insert_data(schedule_date) {
                    $.ajax({
                        type: "GET",
                        url: "{{url('schedules/schedule_fetch_data_or_insert_data')}}?schedule_date=" + schedule_date,
                        success: function (data) {
                            console.log(data)
                            $('tbody').empty();
                            $('tbody').html(data);
                        }
                    })
                }

                /*    report */
                $(document).on('click', '#search', function () {
                    var program_id = $('#program_id_id').val();
                    var schedule_date = $('#schedule_date_using_ajax').val();

                    fetch_data_by_program(program_id, schedule_date);
                });

                /*    insert data  */

                $(document).on('click', '#insert_data', function () {
                    var schedule_date = $('#schedule_date_using_ajax').val();
                    if (schedule_date) {
                        fetch_data_or_insert_data(schedule_date);
                    } else {
                        alert('Please Enter Date');
                    }
                });


                $(document).on('click', '.pagination a', function (event) {
                    event.preventDefault();
                    var page = $(this).attr('href').split('page=')[1];
                    $('#hidden_page').val(page);
                    fetch_data(page);
                });
                $('#add_modal').click(function () {
                    $.ajax({
                        type: "GET",
                        url: "{{url('admin/schedules/create')}}",
                        success: function (data) {
                            $('#append_data').html(data)
                        }
                    })
                });


                var today = new Date();
                var dd = today.getDate()+11;
                var mm = today.getMonth()+1; //January is 0!

                var yyyy = today.getFullYear(); // change according to year 0 for current
                var today1 = mm + '/' + dd + '/' + yyyy;
                $("#birthday").datepicker({
                    endDate:today1,
                });
                $(".datepicker_index").datepicker({
                    dateFormat: "dd-mm-yyyy",
                    todayHighlight: 'TRUE',
                    autoclose: true,
                    endDate:today1,

                });


            });
        </script>
@endsection

