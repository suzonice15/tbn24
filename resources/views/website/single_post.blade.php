@extends('website.master')
@section('mainContent')


    <section id="works" class="works">
        <div class="container">

            <div class="section-heading" style="margin-top: 92px; margin-bottom: 10px;">

            </div>

            <div class="row">

                <div class="col-md-9">
                    <h3>{{$post->post_title}}</h3>
                    <ul class=" color-lite-black">
                        <li style="display: inline-block">
                            <i class="icon-compass"></i>
                            &nbsp;
                           {{date('M d Y',strtotime($post->post_created_date))}}</li>
                        <li style="display: inline-block" >
                            <i class="icon-user"></i> &nbsp;
                            {{$post->post_man}}</li>


                    </ul>

                    <img   style="width: 100%;height: 400px" src="{{url('/')}}/public/uploads/post/{{$post->post_picture}}"  alt="{{$post->post_title}}">


                    <br>
                    <br>
<?php echo $post->post_description ?>




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
