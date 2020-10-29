<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title" >Our Programs</h1>
        </div>
        <div class="row">

            @if($programs)
                @foreach($programs as $program)
                    <div class="col-sm-4 col-md-3 col-xs-12">
                        <figure class=" portfolio-item"
                        >
                            <div class="img-wrapper">
                                <a href="{{url('/')}}/program-details/{{$program->id}}">
                                <img width="100%" src="{{url('/')}}/public/uploads/program/{{$program->program_image}}"
                                     class="img-responsive" alt="{{$program->program_name}}">
                                    </a>
                                <div class="overlay">
                                    <div class="buttons">
                                        <a target="_blank" rel="noopener"
                                           href="{{url('/')}}/program-details/{{$program->id}}">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="{{url('/')}}/program-details/{{$program->id}}"> {{$program->program_name}} </a>
                                </h4>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            @endif
            <div class="text-center">
                <a href="{{url('/')}}/all-program" class="btn btn-default">View All Program</a>
            </div>
        </div>
    </div>
</section>