@extends('layouts.master')

@section('mainContent')

<div class="row">
    <div class="col-lg-3 col-xs-12">
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
    <div class="col-lg-3 col-xs-12">
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
    <div class="col-lg-3 col-xs-12">
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
    <div class="col-lg-3 col-xs-12">
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
    <!-- ./col -->

    <!-- ./col -->
</div>

@endsection

