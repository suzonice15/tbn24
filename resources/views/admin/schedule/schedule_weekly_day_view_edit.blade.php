<style>
    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .container input:checked ~ .checkmark {
        background-color: #2196F3;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .container .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }
</style>

<form class="form"  id="containerForm" action="{{ url('admin/schedules/weekly_view_update') }}/{{ $schedule->id }}"
      method="post">
    @csrf
    <div class="row ">
        <div class="col-md-11">

            <div class="clearfix form-horizontal">

                <div class="form-group has-feedback">
                    <label class="control-label col-md-3" for="date">Date</label>
                    <div class="col-md-9">
                        <input type="text" maxlength="" value="{{ date('d-m-Y',strtotime($schedule->schedule_date))}}" class="form-control datepicker" id="schedule_date"
                               name="schedule_date" placeholder="Date" >

                        <p style="color:red" id="schedule_date_error"></p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label col-md-6" for="start_time">Start Time</label>
                            <div class="col-md-6">
                                <input autocomplete="off" type="text"   value="{{date('H:i',strtotime($schedule->start_time))}}" class="form-control" id="start_time"
                                       name="start_time"  placeholder="12:30" >

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label col-md-6" for="end_time">End Time</label>
                            <div class="col-md-6">


                                <input autocomplete="off" type="text"   value="{{date('H:i',strtotime($schedule->end_time))}}" class="form-control" id="end_time"
                                       name="end_time"  placeholder="12:45" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label class="control-label col-md-3" for="pro_id">Program</label>
                    <div class="col-md-9">
                        <select class="form-control select2" id="program_id" name="program_id">


                            @if($programs)
                                @foreach($programs as $program)


                                    <option value="{{$program->id}}">{{$program->program_name}}</option>

                                @endforeach
                            @endif

                        </select>
                        <p style="color:red" id="program_id_error"></p>

                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label class="control-label col-md-3" for="note">Note</label>
                    <div class="col-md-9">
                        <input type="text" maxlength="255" value="{{$schedule->schedule_note}}" class="form-control" id="schedule_note" name="schedule_note"
                               placeholder="Note" >

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="is_chat_enabled">Chat Enable</label>
                    <div class="col-md-9">

                        <label class="container">Yes
                            <input type="radio"  name="chat_status"  <?php  echo $checked=$schedule->chat_status==1 ? "checked" :""; ?> value="1">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">No
                            <input type="radio" <?php echo $checked=$schedule->chat_status==0 ? "checked" :""; ?> name="chat_status" value="0">
                            <span class="checkmark"></span>
                        </label>

                    </div>
                </div>


            </div>

            <div class="form-group pull-right">
                <button type="button" class="btn btn-success" id="save_program_data"><i class="fa fa-save"></i>Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>
            </div>

        </div>

    </div>
</form>


<script>
    $(function () {

        $('.select2').select2();
        $('.datepicker').datepicker(
                {
                    format: "dd-mm-yyyy",
                    autoclose: true,
                });

    });

    document.forms['containerForm'].elements['program_id'].value = "<?php echo $schedule->program_id; ?>";


</script>

<script type="text/javascript">
    $(document).ready(function() {

        $('#save_program_data').click(function () {
            let schedule_date=  $('#schedule_datee').val();
            let start_time=  $('#start_time').val();
            let end_time=  $('#end_time').val();
            let program_id=  $('#program_id').val();
            if(schedule_date ==''){
                $('#schedule_date_error').text('This Field Must be fillup');
                return false;
            } else {
                $('#schedule_date_error').text('');
            }

            if(program_id ==''){
                $('#program_id_error').text('This Field Must be fillup');
                return false;
            } else {
                $('#program_id_error').text('');
            }


            if (start_time.indexOf(':') > -1) {

            } else {
                alert('Please Enter Colon At Start Time');
                return false;

            }
            if (end_time.indexOf(':') > -1) {

            } else {
                alert('Please Enter Colon At End Time');
                return false;
            }

            var starting_time = start_time.substring(0, 2);
            var endign_time = end_time.substring(0, 2);
            starting_time= parseInt(starting_time);
            endign_time= parseInt(endign_time);

            if(endign_time < starting_time){
                alert('Please Enter Starting Time Greater than  Ending Time');
                return false;
            }
            $("#containerForm").submit(); // Submit the form
        });


    });
</script>


