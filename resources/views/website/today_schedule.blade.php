@extends('website.master')
@section('mainContent')
    <section id="works" class="works" style="margin-top: 92px; margin-bottom: 10px;">
        <div class="container">
            <br>
            <div class="section-heading" style="margin-bottom: 10px;">
                <h1 class="title wow fadeInDown animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">Today's Schedule</h1>
            </div>
            <div class="row">


                @if($today_programs)
                    @foreach($today_programs as $program)
                <div class="col-md-4 all-program-item">
                    <div class="program v ">
                        <div class="col-xs-4 img-container" style="background: url({{url('/')}}/public/uploads/program/{{$program->program_image}}); ">
                        </div>
                        <div class="col-xs-5">
                            <div class="program-title ">{{$program->program_name}}</div>
                            <div class="program-details">{{ date('d M , Y ',strtotime($program->schedule_date))}}</div>
                            <div class="program-date"><a href="{{url('/')}}/program-details/{{$program->id}}" class="btn  btn-xs btn-default">View Detail</a></div>
                        </div>
                        <div class="col-xs-3">
                            <div class="program-time-circle list-item"><?php echo date('H:i',strtotime($program->start_time)) ?></div>
                        </div>
                    </div>
                </div>

                    @endforeach
                @endif

            </div>
        </div>
    </section>
@endsection
