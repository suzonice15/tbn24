@extends('website.master')
@section('mainContent')


        <!--
        ==================================================
        Slider Section Start
        ================================================== -->
<section id="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block wow fadeInUp">

                    <!-- Slider -->
                    <section class="cd-intro row">
                        <div class="col-md-8">

                            <video  poster="http://tbn24.com/images/logo.png"   id='hls-example'  class="video-js vjs-default-skin" width="100%" height="400"  controls>
                                <source  type="application/x-mpegURL" src="{{$api}}">
                            </video>
                        </div>
                        <div class="col-md-4 md-p-l-0"
                             class="wow fadeInUp animated cd-headline slide">
                            <div id="ifrm-player-list" style=""  class="panel panel-default playlist">

                                <div class="panel-body">

                                    <div class="row">
                                        <div class="">
                                            <h4>Upcomming Program</h4>
                                            <div class="col-xs-10 col-md-11 md-p-r-0 " style="height:330px;overflow-y: scroll;">
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active ifrm-player-list" style="" id="home-vr">

                                                        @if($today_programs)
                                                            @foreach($today_programs as $program)

                                                        <div class="program v">
                                                            <div class="col-xs-4 img-container" style="background: url({{url('/')}}/public/uploads/program/{{$program->program_image}})">
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

                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- cd-intro -->

                </div>
            </div>
        </div>
    </div>
</section>
<!--/#main-slider-->
<!--
            ==================================================
            Slider Section Start
            ================================================== -->




<section id="about" style="padding: 22px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="block wow">
                    <h2>ABOUT US</h2>
                   <?php echo $about->page_content ?>
                    <div class="text-left">
                        <a href="contact.php" class="btn btn-default">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Online Vote</div>
                    <div class="panel-body">



                    <span class="ajax_pull_data_get"></span>





                    </div>
                </div>


            </div>


        </div>
    </div>
</section>
<!-- /#about -->
<!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
<span class="home_page_program"></span>

<!-- #works -->
<!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown">Be with our</h1>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow"
                     >
                    <div class="media-left">
                        <div class="icon">
                            <i class="icon-facetime-video"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Entertainment Program</h4>
                        <p>Movie, Music, Movie Analysis, There are many entertainment
                            program</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow" >
                    <div class="media-left">
                        <div class="icon">
                            <i class="icon-lightbulb"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">24 Hour News</h4>
                        <p>24 hours at first and faster</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow">
                    <div class="media-left">
                        <div class="icon">
                            <i class="icon-bar-chart"></i>

                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Business Program</h4>
                        <p>We broadcast many business shows</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow " >
                    <div class="media-left">
                        <div class="icon">
                            <i class="icon-user"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Talk Show</h4>
                        <p>We broadcast many talk shows</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow " >
                    <div class="media-left">
                        <div class="icon">
                            <i class="icon-circle-blank"></i>

                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Live Event</h4>
                        <p>There are many Islamic show, Islam O Jibon,Janan, Janun,Learn
                            Quran</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow" >
                    <div class="media-left">
                        <div class="icon">
                            <i class="icon-star"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Islamic Show</h4>
                        <p>There are many Islamic show, Islam O Jibon,Janan, Janun,Learn
                            Quran</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /#feature -->

<!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
<section id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="title wow "  >
                        You are always welcome to contact with us
                        </h2>
                        <a href="{{url('/')}}/contact"
                           class="btn btn-default btn-contact wow fadeInDown"
                           data-wow-delay=".7s" data-wow-duration="500ms">Contact Us</a>

                </div>
            </div>

        </div>
    </div>
</section>

<script defer >
    $.get("{{url('/')}}/home_page_program", function(data, status){
       $('.home_page_program').html(data);
    });

function ajax_pull_data_get(){
    $.get("{{url('/')}}/ajax_pull_data_get", function(data, status){
        $('.ajax_pull_data_get').html(data);
    });
}
    ajax_pull_data_get();

        $("body").on("submit",".poll-form",function(e){
            e.preventDefault();
            var thisobj=$(this);
           console.log("input"+thisobj.serialize());
           console.log("url"+thisobj.attr("action"));
            $.ajax({
                url : thisobj.attr("action"),
                data : thisobj.serialize(),
                type : "POST",
                success: function(data){
                    ajax_pull_data_get();
                },

            });


        });


</script>



@endsection
