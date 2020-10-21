@extends('layouts.master')

@section('mainContent')

    <style>

        .clock {

            color: black;
            font-size: 30px;
            font-family: Orbitron;
            letter-spacing: 7px;
            text-align: center;


        }
    </style>
    <div class="box-body">
<div class="row">


    <div class="col-md-5">
        <h3 style="text-align: center;">Today  Date: <?php
            echo date('l d-m-Y')?> </h3>
        <div id="MyClockDisplay" class="clock" onload="showTime()"></div>

        <script>
//            var usaTime = new Date().toLocaleString("en-US", {timeZone: "America/New_York"});
//            console.log('USA time: '+ (new Date(usaTime)).toISOString())
            function showTime(){
                var date = new Date().toLocaleString("en-US", {timeZone: "America/New_York"});
                var date = new Date(date);
                var h = date.getHours(); // 0 - 23
                var m = date.getMinutes(); // 0 - 59
                var s = date.getSeconds(); // 0 - 59
                var session = "AM";

                if(h == 0){
                    h = 12;
                }

                if(h > 12){
                    h = h - 12;
                    session = "PM";
                }

                h = (h < 10) ? "0" + h : h;
                m = (m < 10) ? "0" + m : m;
                s = (s < 10) ? "0" + s : s;

                var time = h + ":" + m + ":" + s + " " + session;
                document.getElementById("MyClockDisplay").innerText = time;
                document.getElementById("MyClockDisplay").textContent = time;

                setTimeout(showTime, 1000);

            }

            showTime();


        </script>
        <?php if($current_program) { ?>
        <div class="col-md-12" style="background-color: #ddd;padding: 9px;padding-bottom: 32px;">
        <h3 style="text-align:center">Current Program</h3>

        <div class="col-md-7">
            <img src="{{url('/')}}/public/uploads/program/{{$current_program->program_image}}">

        </div>
        <div class="col-md-5">
            <h5>{{$current_program->program_name}}</h5>

            <h5>{{date('H:i',strtotime($current_program->start_time))}} -{{date('H:i',strtotime($current_program->end_time))}}</h5>

        </div>
        </div>
        <?php } ?>

    </div>


    <div class="col-md-7">
        <div class="col-lg-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$total_programs}}</h3>

                    <p>Total Program</p>
                </div>
                <div class="icon">
                    <i class="fa fa-tv"></i>
                </div>
                <a href="{{url('')}}/admin/programs" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$total_users}}</h3>

                    <p>Total Users</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{url('/')}}/admin/website/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{$today_schedule}}</h3>

                    <p>Today Schedule</p>
                </div>
                <div class="icon">
                    <i class="fa fa-tv"></i>
                </div>
                <a href="{{url('/')}}/admin/schedules" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$message}}</h3>

                    <p>Unseen Message</p>
                </div>
                <div class="icon">
                    <i class="fa fa-tv"></i>
                </div>
                <a href="{{url('/')}}/admin/contact-us" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>

</div>
</div>

@endsection

