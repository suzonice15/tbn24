@extends('website.master')
@section('mainContent')


    <section id="works" class="works">
        <div class="container-fluid">
            <br>
            <div class="section-heading" style="margin-top: 92px; margin-bottom: 10px;">
                <h1 class="title wow fadeInDown animated" data-wow-delay=".3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">Our Blogs</h1>
            </div>

            <div class="row">

                <div class="col-sm-9">

                    @if($blogs)
                        @foreach($blogs as $blog)
                            <div class="col-sm-12 col-xs-12 col-md-12" style="margin-bottom: 10px ;padding: 5px">

                                <div class="col-md-4">
                                    <img  style="
    height: 200px;
" width="100%" src="{{url('/')}}/public/uploads/post/{{$blog->post_picture}}"
                                          class="img-responsive" alt="{{$blog->post_title}}">

                                </div>
                                <div class="col-md-8">
                                    <h3 style="margin: 0 0 10px;
font-size: 18px;
text-transform: capitalize;
color: #222;
font-weight: 600;
line-height: 1.5;">
                                        <a href="{{url('/')}}/post/{{$blog->post_name}}"> {{$blog->post_title}} </a>
                                    </h3>
                                    <div class="blog-meta" style="overflow: hidden;
margin-bottom: 10px;display: inline-flex;">
                                        <div class="published"
                                             style="padding-right: 4px;color: green;font-weight: bold;border-right: 1px solid green;">
                                            <i class="fa-calendar"></i> Oct 22, 2018
                                        </div>
                                        <div class="viewed" style="padding-left: 4px;color: green;font-weight: bold;">
                                            Total Viewed: {{$blog->post_view}}
                                        </div>
                                    </div>

                                    <p>
                                        <?php
                                        $count= 0;
                                        $sting= '';
                                        $discription=(explode(" ",$blog->post_description));
                                        for($i=0;$i<=50;$i++){
                                            $sting .=$discription[$i].' ';
                                            // $count++;
                                        }
                                        ?>
                                    </p>
                                    <span ><?php echo $sting; ?></span>

                                    <div class="share-btns">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url('/')}}/post/{{$blog->post_name}}"
                                           target="_blank">
                                            <img src="https://www.qurancampus.com/images/social/fb.png" alt="FBShare">
                                        </a>
                                        <a href="https://twitter.com/intent/tweet?source={{url('/')}}/&amp;text={{url('/')}}"
                                           target="_blank"
                                           onclick="window.open('https://twitter.com/intent/tweet?text={{$blog->post_title}}:{{url('/')}}/post/{{$blog->post_name}});return false;">
                                            <img src="https://www.qurancampus.com/images/social/tw.png" alt="Tweet">
                                        </a>
                                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{url('/')}}/&amp;title={{$blog->post_title}}&amp;summary=&amp;source={{url('/')}}/"
                                           target="_blank"
                                           onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url={{url('/')}}/post/{{$blog->post_name}}&amp;title={{$blog->post_title}});return false;">
                                            <img src="https://www.qurancampus.com/images/social/in.png"
                                                 alt="LinkedInShare">
                                        </a>
                                    </div>

                                </div>


                            </div>

                            <hr>
                        @endforeach
                        <div class="col-sm-12 col-xs-12">
                            {!! $blogs->links() !!}
                        </div>
                    @endif


                </div>


                <div class="col-sm-3 sidebar" style="margin-top: -63px;">

                    <span class="ajax-category-call"></span>

                </div>



            </div>
        </div>
    </section>



    <script defer >
        $.get("{{url('/')}}/ajax-post-category-call", function(data, status){
            $('.ajax-category-call').html(data);
        });
    </script>
@endsection
