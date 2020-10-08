<ul>
    @if($category)
        @foreach($category as $cat)
            <li><a href="{{url('/')}}/category/{{$cat->category_id}}" >{{$cat->category_title}}</a></li>
        @endforeach
    @endif

</ul>