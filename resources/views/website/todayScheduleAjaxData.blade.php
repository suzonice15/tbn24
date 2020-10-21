<div class="col-xs-10 col-md-11 md-p-r-0 " style="height:330px;overflow-y: scroll;">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active ifrm-player-list" style="" id="home-vr">

        @if($today_programs)
                                       @foreach($today_programs as $program)
                                           <div class="program v" >
                                               <div class="col-xs-4 img-container" style="background: url({{url('/')}}/public/uploads/program/{{$program->program_image}})">
                                                   <?php
                                                    //   echo $program_id;
                                                       // Current Program Check
                                                   if($program_id == $program->sid) {
                                                   ?>
                                                   <div class="current-program col-xs-12">Current</div>
                                                   <?php
                                                       }
                                                       ?>
                                               </div>
                                               <div class="col-xs-5">
                                                   <div class="program-title ">{{$program->program_name}}</div>
                                                   <div class="program-details">
                                                       {{$program->program_details}}
                                                   </div>
                                                   <div class="program-date">
                                                       <a rel="noopener"
                                                          href="{{url('/')}}/program-details/{{$program->id}}"
                                                          class="btn btn-xs btn-default">View Detail</a>
                                                   </div>
                                               </div>
                                               <div class="col-xs-3">
                                                   <div class="program-time-circle"><?php echo date('H:i',strtotime($program->start_time)) ?></div>
                                               </div>

                                           </div>
                                       @endforeach
                                   @endif


        </div>



    </div>

</div>
