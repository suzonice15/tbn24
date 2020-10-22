

<div class="widget-post">
    <div class="title">Most Visted Blogs</div>
    <ul>

        @if($posts)
            @foreach($posts as $post)
        <li>
            <a href="{{url('/')}}/post/{{$post->post_name}}">
                <img src="{{url('/')}}/public/uploads/post/{{$post->post_picture}}"
                     alt="{{$post->post_title}}"
                     width="50" height="50">
                <span><?php

                    $count= 0;
                    $sting= '';

                    $discription=(explode(" ",$post->post_title));
                    for($i=1;$i<=9;$i++){
                        $sting .=$discription[$i].' ';
                        // $count++;
                    }
                        echo  $sting;


                  //  echo read_more($post->post_title,60);


                    ?></span>
                <div class="blog-meta">
                    <div class="published"><i class="fa fa-calendar"></i>{{ date('M d , Y',strtotime($post->post_created_date))}}</div>
                    <div class="viewed">Total Viewed: {{$post->post_view}}</div>
                </div>
            </a>
        </li>
            @endforeach
        @endif

    </ul>
</div>

<hr class="break break20">

<div class="widget-post blog-cats">
    <div class="title">Categories</div>
    <ul>

        @if($category)
            @foreach($category as $cat)
        <li>

            <a href="{{url('/')}}/category/{{$cat->category_id}}" >{{$cat->category_title}}</a>
        </li>
            @endforeach
        @endif
    </ul>
</div>
