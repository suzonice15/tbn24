@if($programs)
    @foreach($programs as $program)

<div class="col-sm-3 col-xs-12">
    <figure class="portfolio-item animated"  style="visibility: visible;">
        <div class="img-wrapper">
            <a target="_blank" href="{{url('/')}}/program-details/{{$program->id}}">
            <img width="100%" src="{{url('/')}}/public/uploads/program/{{$program->program_image}}" class="img-responsive" alt="{{$program->program_name}}">
            </a>
            <div class="overlay">
                <div class="buttons">
                    <a target="_blank" href="{{url('/')}}/program-details/{{$program->id}}">Details</a>
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