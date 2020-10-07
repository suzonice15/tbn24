@extends('website.master')
@section('mainContent')


    <section id="works" class="works">
        <div class="container">
            <br>
            <div class="section-heading" style="margin-top: 92px; margin-bottom: 10px;">
                <h1 class="title wow fadeInDown animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">Our Blogs</h1>
            </div>

            <div class="row">

                <div class="col-md-9">

                    @if($blogs)
                        @foreach($blogs as $blog)

                            <div class="col-sm-4 col-xs-12">
                                <figure class="portfolio-item animated"  style="visibility: visible;">
                                    <div class="img-wrapper">
                                        <img width="100%" src="{{url('/')}}/public/uploads/post/{{$blog->post_picture}}" class="img-responsive" alt="{{$blog->post_title}}">
                                        <div class="overlay">
                                            <div class="buttons">
                                                <a target="_blank" href="{{url('/')}}/post/{{$blog->post_name}}">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <h4>
                                            <a href="{{url('/')}}/post/{{$blog->post_name}}"> {{$blog->post_title}} </a>
                                        </h4>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                        <div class="col-sm-12 col-xs-12">
                            {!! $blogs->links() !!}
                        </div>
                    @endif



                </div>

                <div class="col-md-3">
                    <h3>Blog Categories</h3>
                    <ul>
                        @if($category)
                            @foreach($category as $cat)
                                <li><a href="{{url('/')}}/category/{{$cat->category_id}}" >{{$cat->category_title}}</a></li>
                            @endforeach
                        @endif

                    </ul>

                </div>

            </div>
        </div>
    </section>



@endsection
