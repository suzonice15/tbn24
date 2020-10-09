<?php $__env->startSection('mainContent'); ?>


        <!--
        ==================================================
        Slider Section Start
        ================================================== -->
<style>
    @media  only screen and (max-width: 600px) {
        .video-js .vjs-tech {
            height: 100%;
            width: 97%;
        }
    }
</style>
<section id="hero-area" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block wow fadeInUp">

                    <!-- Slider -->
                    <section class="cd-intro row">
                        <div class="col-md-8 col-sm-12">

                            <video     id='hls-example'  class="video-js vjs-default-skin"  height="400"  controls>
                                <source  type="application/x-mpegURL" src="<?php echo e($api); ?>">
                            </video>
                        </div>
                        <div class="col-md-4 col-sm-12 md-p-l-0"
                             class="wow fadeInUp animated cd-headline slide">
                            <div id="ifrm-player-list" style=""  class="panel panel-default playlist">

                                <div class="panel-body">

                                    <div class="row">
                                        <div class="">
                                            <h4>Upcomming Program</h4>

                                            <span class="today-schedule-data"></span>

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
<section id="about" style="padding: 22px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="block wow">
                    <h2>ABOUT US</h2>
                    <span class="about_us"></span>
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
                        <a href="<?php echo e(url('/')); ?>/contact"
                           class="btn btn-default btn-contact wow fadeInDown"
                           data-wow-delay=".7s" data-wow-duration="500ms">Contact Us</a>

                </div>
            </div>

        </div>
    </div>
</section>

<script defer >
    $.get("<?php echo e(url('/')); ?>/home_page_program", function(data, status){
       $('.home_page_program').html(data);
    });

    $.get("<?php echo e(url('/')); ?>/about_us", function(data, status){
        $('.about_us').html(data);
    });
    $.get("<?php echo e(url('/')); ?>/today-schedule-ajax-data", function(data, status){
        $('.today-schedule-data').html(data);
    });


function ajax_pull_data_get(){
    $.get("<?php echo e(url('/')); ?>/ajax_pull_data_get", function(data, status){
        $('.ajax_pull_data_get').html(data);
    });
}
    ajax_pull_data_get();

        $("body").on("submit",".poll-form",function(e){
            e.preventDefault();
            var thisobj=$(this);

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



<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tbn24\resources\views/website/home.blade.php ENDPATH**/ ?>