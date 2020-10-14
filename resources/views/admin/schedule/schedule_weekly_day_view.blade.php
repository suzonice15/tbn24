@extends('layouts.master')

@section('mainContent')
<style>
    table thead th{color:white}

   .tr-stricy-class {
        position: fixed;
        top: 50px;
        background-color: green;
        width: 79.5%;
        left: 254px;
       z-index: 11;

    }
    .static-trclass{
        position: fixed;
        top: 102px;
        background-color: green;
        width: 79.5%;
        left: 254px;

    }
    .first-item{
        margin: -7px;
        padding: 4px;
        color:white;
        text-align: center;
        height: auto;
        margin-bottom: 8px;
        float:left;
        background-color: #00A6BB;
      }
    .second-item{
        margin: -6px;
        padding: 4px;
        text-align: center;
        height: auto;

        background-color:green;
        color:white;
        float:left
    }
    .only-first-item{

    }

</style>


    <div class="box-body" id="table-container">

        <table   class="table   table-responsive">
            <thead>
            <tr   class="trclass static-trclass">
                <th width="1%" class="text-center">Time</th>
                <th  width="14%" id="w-sun" style="text-align: right;" class="text-center text-white">Sunday</th>
                <th  width="14%" id="w-mon" style="text-align: right;" class="text-center">Monday</th>
                <th  width="14%" id="w-tue" style="text-align: right;" class="text-center" >Tuesday</th>
                <th  width="14%"  id="w-wed" style="text-align: right;" class="text-center">Wednesday</th>
                <th  width="14%" id="w-thu" style="text-align: right;" class="text-center">Thursday</th>
                <th  width="14%" id="w-fri"  class="text-center">Friday</th>
                <th  width="14%"  id="w-sat" class="text-center">Saturday</th>
            </tr>
            </thead>
            <tbody class="x2">
            <tr>
                <th class="" width="1%">00:00-1.00</th>
                <td width="13%"  >

                    <!--- sun day -->

                    <?php

                    $start_time = strtotime("00:00");
                    $end_time = strtotime("01.00");
                        $count=0;
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){
                     ++$count;

                    ?>

	               <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                       -{{ date("H:i",strtotime($schedule->end_time)) }}
                       <div class="btn-group">
                           <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                               <i class="fa fa-edit"></i>
                           </button>


                           <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                              onclick="return confirm('Are you want to delete this Schedule')"
                              class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                       </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php

                    $start_time = strtotime("00:00");
                    $end_time = strtotime("01.00");
                        $count=0;
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php

                    $start_time = strtotime("00:00");
                    $end_time = strtotime("01.00");
                        $count=0;
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>

                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php

                    $start_time = strtotime("00:00");
                    $end_time = strtotime("01.00");
                        $count=0;
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>

                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php

                    $start_time = strtotime("00:00");
                    $end_time = strtotime("01.00");
                        $count=0;
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php

                    $start_time = strtotime("00:00");
                    $end_time = strtotime("01.00");
                        $count=0;
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php

                    $start_time = strtotime("00:00");
                    $end_time = strtotime("01.00");
                        $count=0;
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
            </tr>
            <tr>
                <th class="" width="9%">01:00-02.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
$count=0;
                    $start_time = strtotime("01:00");
                    $end_time = strtotime("02.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>

                <td width="13%">

                    <!--- sun day -->

                    <?php
                        $count=0;

                    $start_time = strtotime("01:00");
                    $end_time = strtotime("02.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>

                <td width="13%">

                    <!--- sun day -->

                    <?php
$count=0;
                    $start_time = strtotime("01:00");
                    $end_time = strtotime("02.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>

                <td width="13%">

                    <!--- sun day -->

                    <?php
$count=0;
                    $start_time = strtotime("01:00");
                    $end_time = strtotime("02.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>

                <td width="13%">

                    <!--- sun day -->

                    <?php
$count=0;
                    $start_time = strtotime("01:00");
                    $end_time = strtotime("02.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>

                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("01:00");
                    $end_time = strtotime("02.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>

                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("01:00");
                    $end_time = strtotime("02.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>


            </tr>
            <tr>
                <th class="" width="9%">02:00 -03.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php

                    $start_time = strtotime("02:00");
                    $end_time = strtotime("03.00");
                    if($sundays) {
                     $count=0;
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){
                    ++$count;
                    ?>
                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("02:00");
                    $end_time = strtotime("03.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("02:00");
                    $end_time = strtotime("03.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("02:00");
                    $end_time = strtotime("03.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("02:00");
                    $end_time = strtotime("03.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("02:00");
                    $end_time = strtotime("03.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("02:00");
                    $end_time = strtotime("03.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>

            </tr>
            <tr>
                <th class="" width="9%">03:00-04.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("03:00");
                    $end_time = strtotime("04.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("03:00");
                    $end_time = strtotime("04.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("03:00");
                    $end_time = strtotime("04.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("03:00");
                    $end_time = strtotime("04.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("03:00");
                    $end_time = strtotime("04.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("03:00");
                    $end_time = strtotime("04.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("03:00");
                    $end_time = strtotime("04.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>

            </tr>
            <tr>
                <th class="" width="9%">04:00 -05.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("04:00");
                    $end_time = strtotime("05.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("04:00");
                    $end_time = strtotime("05.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("04:00");
                    $end_time = strtotime("05.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("04:00");
                    $end_time = strtotime("05.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){
                    ++$count;
                    ?>
                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("04:00");
                    $end_time = strtotime("05.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("04:00");
                    $end_time = strtotime("05.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>
                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>

                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("04:00");
                    $end_time = strtotime("05.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>

            </tr>
            <tr>
                <th class="" width="9%">05:00-06.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("05:00");
                    $end_time = strtotime("06.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("05:00");
                    $end_time = strtotime("06.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("05:00");
                    $end_time = strtotime("06.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("05:00");
                    $end_time = strtotime("06.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("05:00");
                    $end_time = strtotime("06.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("05:00");
                    $end_time = strtotime("06.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("05:00");
                    $end_time = strtotime("06.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>


            </tr>
            <tr>
                <th class="" width="9%">06:00-07.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("06:00");
                    $end_time = strtotime("07.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("06:00");
                    $end_time = strtotime("07.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("06:00");
                    $end_time = strtotime("07.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){
                    ++$count;
                    ?>
                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("06:00");
                    $end_time = strtotime("07.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("06:00");
                    $end_time = strtotime("07.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("06:00");
                    $end_time = strtotime("07.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("06:00");
                    $end_time = strtotime("07.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>

            </tr>
            <tr>
                <th class="" width="9%">07:00-08.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("07:00");
                    $end_time = strtotime("08.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("07:00");
                    $end_time = strtotime("08.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("07:00");
                    $end_time = strtotime("08.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("07:00");
                    $end_time = strtotime("08.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("07:00");
                    $end_time = strtotime("08.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("07:00");
                    $end_time = strtotime("08.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("07:00");
                    $end_time = strtotime("08.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>


            </tr>
            <tr>
                <th class="" width="9%">08:00-09.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("08:00");
                    $end_time = strtotime("09.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("08:00");
                    $end_time = strtotime("09.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("08:00");
                    $end_time = strtotime("09.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("08:00");
                    $end_time = strtotime("09.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("08:00");
                    $end_time = strtotime("09.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("08:00");
                    $end_time = strtotime("09.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("08:00");
                    $end_time = strtotime("09.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>

            </tr>
            <tr>
                <th class="" width="9%">09:00-10.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("09:00");
                    $end_time = strtotime("10.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%" >

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("09:00");
                    $end_time = strtotime("10.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("09:00");
                    $end_time = strtotime("10.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("09:00");
                    $end_time = strtotime("10.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("09:00");
                    $end_time = strtotime("10.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("09:00");
                    $end_time = strtotime("10.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("09:00");
                    $end_time = strtotime("10.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>

            </tr>
            <tr>
                <th class="" width="9%">10:00-11.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("10:00");
                    $end_time = strtotime("11.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("10:00");
                    $end_time = strtotime("11.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("10:00");
                    $end_time = strtotime("11.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("10:00");
                    $end_time = strtotime("11.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("10:00");
                    $end_time = strtotime("11.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("10:00");
                    $end_time = strtotime("11.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("10:00");
                    $end_time = strtotime("11.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if( ($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
            </tr>
            <tr>
                <th class="" width="9%">11:00-12.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("11:00");
                    $end_time = strtotime("12.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("11:00");
                    $end_time = strtotime("12.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("11:00");
                    $end_time = strtotime("12.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("11:00");
                    $end_time = strtotime("12.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("11:00");
                    $end_time = strtotime("12.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("11:00");
                    $end_time = strtotime("12.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>


            </tr>
            <tr>
                <th class="" width="9%">12:00-13.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("12:00");
                    $end_time = strtotime("13.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("12:00");
                    $end_time = strtotime("13.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("12:00");
                    $end_time = strtotime("13.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("12:00");
                    $end_time = strtotime("13.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("12:00");
                    $end_time = strtotime("13.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("12:00");
                    $end_time = strtotime("13.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("12:00");
                    $end_time = strtotime("13.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>

            </tr>
            <tr>
                <th class="" width="9%">13:00-14.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("13:00");
                    $end_time = strtotime("14.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("13:00");
                    $end_time = strtotime("14.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("13:00");
                    $end_time = strtotime("14.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("13:00");
                    $end_time = strtotime("14.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("13:00");
                    $end_time = strtotime("14.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("13:00");
                    $end_time = strtotime("14.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("13:00");
                    $end_time = strtotime("14.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>

            </tr>
            <tr>
                <th class="" width="9%">14:00-15.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("14:00");
                    $end_time = strtotime("15.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("14:00");
                    $end_time = strtotime("15.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("14:00");
                    $end_time = strtotime("15.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("14:00");
                    $end_time = strtotime("15.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("14:00");
                    $end_time = strtotime("15.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("14:00");
                    $end_time = strtotime("15.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("14:00");
                    $end_time = strtotime("15.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>

            </tr>
            <tr>
                <th class="" width="9%">15:00-16.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("15:00");
                    $end_time = strtotime("16.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?>


                    <span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>


                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>

                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>

                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("15:00");
                    $end_time = strtotime("16.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("15:00");
                    $end_time = strtotime("16.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("15:00");
                    $end_time = strtotime("16.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("15:00");
                    $end_time = strtotime("16.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("15:00");
                    $end_time = strtotime("16.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("15:00");
                    $end_time = strtotime("16.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>

            </tr>
            <tr>
                <th class="" width="9%">16:00-17.00</th>
                <td width="13%" >

                    <!--- sun day -->

                    <?php
                    $count=0;
                    $start_time = strtotime("16:00");
                    $end_time = strtotime("17.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                    $count=0;
                    $start_time = strtotime("16:00");
                    $end_time = strtotime("17.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                    $count=0;
                    $start_time = strtotime("16:00");
                    $end_time = strtotime("17.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("16:00");
                    $end_time = strtotime("17.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("16:00");
                    $end_time = strtotime("17.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("16:00");
                    $end_time = strtotime("17.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("16:00");
                    $end_time = strtotime("17.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>

            </tr>
            <tr>
                <th class="" width="9%">17:00-18.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">
                       <?php
                     $count=0;
                    $start_time = strtotime("17:00");
                    $end_time = strtotime("18.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>
                </td>

                <td width="13%">
                    <?php
                     $count=0;
                    $start_time = strtotime("17:00");
                    $end_time = strtotime("18.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>
                </td>
                <td width="13%">
                    <?php
                     $count=0;
                    $start_time = strtotime("17:00");
                    $end_time = strtotime("18.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>
                </td>
                <td width="13%">
                    <?php
                     $count=0;
                    $start_time = strtotime("17:00");
                    $end_time = strtotime("18.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>
                </td>
                <td width="13%">
                    <?php
                     $count=0;
                    $start_time = strtotime("17:00");
                    $end_time = strtotime("18.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>
                </td>
                <td width="13%">
                    <?php

                     $count=0;
                    $start_time = strtotime("17:00");
                    $end_time = strtotime("18.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>
                </td>
                <td width="13%">
                    <?php

                     $count=0;
                    $start_time = strtotime("17:00");
                    $end_time = strtotime("18.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>
                </td>

            </tr>
            <tr>
                <th class="" width="9%">18:00-19.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("18:00");
                    $end_time = strtotime("19.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("18:00");
                    $end_time = strtotime("19.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("18:00");
                    $end_time = strtotime("19.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("18:00");
                    $end_time = strtotime("19.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("18:00");
                    $end_time = strtotime("19.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("18:00");
                    $end_time = strtotime("19.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("18:00");
                    $end_time = strtotime("19.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>

            </tr>
            <tr>
                <th class="" width="9%">19:00-20.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("19:00");
                    $end_time = strtotime("20.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("19:00");
                    $end_time = strtotime("20.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("19:00");
                    $end_time = strtotime("20.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("19:00");
                    $end_time = strtotime("20.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("19:00");
                    $end_time = strtotime("20.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("19:00");
                    $end_time = strtotime("20.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("19:00");
                    $end_time = strtotime("20.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>

            </tr>
            <tr>
                <th class="" width="9%">20:00-21.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("20:00");
                    $end_time = strtotime("21.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("20:00");
                    $end_time = strtotime("21.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("20:00");
                    $end_time = strtotime("21.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("20:00");
                    $end_time = strtotime("21.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("20:00");
                    $end_time = strtotime("21.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("20:00");
                    $end_time = strtotime("21.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("20:00");
                    $end_time = strtotime("21.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>

            </tr>
            <tr>
                <th class="" width="9%">21:00-22.00</th>
                <td width="13%"  class="p-3 mb-2  text-white">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("21:00");
                    $end_time = strtotime("22.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("21:00");
                    $end_time = strtotime("22.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("21:00");
                    $end_time = strtotime("22.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){
                    ++$count;
                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("21:00");
                    $end_time = strtotime("22.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("21:00");
                    $end_time = strtotime("22.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("21:00");
                    $end_time = strtotime("22.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("21:00");
                    $end_time = strtotime("22.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>


            </tr>
            <tr>
                <th class="" width="9%">22:00-23.00</th>
                <td width="13%" >

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("22:00");
                    $end_time = strtotime("23.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("22:00");
                    $end_time = strtotime("23.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("22:00");
                    $end_time = strtotime("23.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                    $count=0;
                    $start_time = strtotime("22:00");
                    $end_time = strtotime("23.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("22:00");
                    $end_time = strtotime("23.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("22:00");
                    $end_time = strtotime("23.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Friday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("22:00");
                    $end_time = strtotime("23.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Saturday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>


                </td>


            </tr>
            <tr>
                <th class="" width="9%">23:00-24.00</th>
                <td width="13%">
                    <!--- sun day -->
                    <?php
                     $count=0;
                    $start_time = strtotime("23:00");
                    $end_time = strtotime("23.59");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Sunday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("23:00");
                    $end_time = strtotime("24.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Monday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("23:00");
                    $end_time = strtotime("24.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Tuesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>

                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("23:00");
                    $end_time = strtotime("24.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Wednesday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time = strtotime("23:00");
                    $end_time = strtotime("24.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day == 'Thursday') && (strtotime($schedule->start_time) >= $start_time) && (strtotime($schedule->end_time) <= $end_time)){

                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>


                </td>
                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time= strtotime("23:00");
                    $end_time= strtotime("24.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day=='Friday') && ( strtotime($schedule->start_time) >= $start_time) && ( strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>
                    <?php }
                    }
                    }?>




                </td>

                <td width="13%">

                    <!--- sun day -->

                    <?php
                     $count=0;
                    $start_time= strtotime("23:00");
                    $end_time= strtotime("24.00");
                    if($sundays) {
                    foreach ($sundays as $schedule){
                    if(($schedule->day=='Saturday') && ( strtotime($schedule->start_time) >= $start_time) && ( strtotime($schedule->end_time) <= $end_time)){


                    ++$count;

                    ?><span  class="<?php if($count==1) { echo 'first-item';} else { echo 'second-item';} ?>">{{ date("H:i",strtotime($schedule->start_time)) }}
                        -{{ date("H:i",strtotime($schedule->end_time)) }}
                        <div class="btn-group">
                            <button type="button" class="btn btn-xs btn-success edit_modal" data-toggle="modal" data-id="{{$schedule->id}}"   data-target="#edit-program">
                                <i class="fa fa-edit"></i>
                            </button>
                            <a href="{{url('/')}}/weakly_data_delete/{{$schedule->id}}"
                               onclick="return confirm('Are you want to delete this Schedule')"
                               class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
                        </div>
                        <strong  style="text-align: center;font-size: 12px;overflow: auto;"> {{$schedule->program_name}}</strong>
                    </span>

                    <?php }
                    }
                    }?>




                </td>

            </tr>


            </tbody>
        </table>


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



    <script>


        $('.edit_modal').on('click',function () {

            let schedule_id=$(this).data("id");
            $.ajax({
                type:"GET",
                url:"{{url('admin/schedules/weekly_day_view_edit')}}/"+schedule_id,
                success:function(data)
                {
                    $('#append_edit_data').html(data)
                }
            })
        });


        jQuery(window).scroll(function (e) {

             // OR  $(window).scroll(function() {
            var scroll = jQuery(document).scrollTop();


            if (scroll > 40) {

$('.trclass').addClass("tr-stricy-class")
$('.trclass').removeClass("static-trclass")
            } else {
                $('.trclass').removeClass("tr-stricy-class")

                $('.trclass').addClass("static-trclass")

            }
        });
    </script>


@endsection

