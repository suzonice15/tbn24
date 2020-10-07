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

<form class="form"  id="containerForm" action="{{url('/')}}/admin/schedules/store"
      method="post">
    @csrf
    <div class="row ">
        <div class="col-md-11">

        <div class="clearfix form-horizontal">

            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="date">Date</label>
                <div class="col-md-9">
                    <input autocomplete="off" type="text"   value="" class="form-control datepicker" id="schedule_datee"
                           name="schedule_date"  placeholder="Date" >

                    <p style="color:red" id="schedule_date_error"></p>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label class="control-label col-md-6" for="start_time">Start Time</label>
                        <div class="col-md-6">
                            <select name="start_time" id="start_time" class="form-control select2">
                                <option value="00:00">00:00</option>
                                <option value="00:15">00:15</option>
                                <option value="00:30">00:30</option>
                                <option value="00:45">00:45</option>
                                <option value="01:00">01:00</option>
                                <option value="01:15">01:15</option>
                                <option value="01:30">01:30</option>
                                <option value="01:45">01:45</option>
                                <option value="02:00">02:00</option>
                                <option value="02:15">02:15</option>
                                <option value="02:30">02:30</option>
                                <option value="02:45">02:45</option>
                                <option value="03:00">03:00</option>

                            </select>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label class="control-label col-md-6" for="end_time">End Time</label>
                        <div class="col-md-6">
                            <select name="end_time" id="end_time" class="form-control select2">
                                <option value="00:00">00:00</option>
                                <option value="00:15">00:15</option>
                                <option value="00:30">00:30</option>
                                <option value="00:45">00:45</option>
                                <option value="01:00">01:00</option>
                                <option value="01:15">01:15</option>
                                <option value="01:30">01:30</option>
                                <option value="01:45">01:45</option>
                                <option value="02:00">02:00</option>


                            </select>
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
                    <input autocomplete="off" type="text" maxlength="255" value="" class="form-control" id="schedule_note" name="schedule_note"
                           placeholder="Note" >

                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3" for="is_chat_enabled">Chat Enable</label>
                <div class="col-md-9">

                    <label class="container">Yes
                        <input type="radio"  name="chat_status" value="1">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">No
                        <input type="radio" name="chat_status" value="0">
                        <span class="checkmark"></span>
                    </label>

                </div>
            </div>


        </div>

            <div class="form-group pull-right">
                <button type="button" class="btn btn-success" id="save_program_data"><i class="fa fa-save"></i>Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>
            </div>

        </div>

    </div>
</form>


<script defer>
    $(function () {

        $('.select2').select2();
        $(".datepicker").datepicker({ dateFormat: "dd-mm-yyyy", todayHighlight:'TRUE',
            autoclose: true,}).datepicker("setDate", new Date());


    });

    </script>

<script type="text/javascript" defer>
    $(document).ready(function() {
        $('#save_program_data').click(function () {
            let schedule_date=  $('#schedule_datee').val();
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

            $("#containerForm").submit(); // Submit the form



        })

    });
</script>


