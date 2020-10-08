
<section id="works" class="works">
    <div class="container">
        <br>
        <div class="section-heading" style="margin-top: 92px; margin-bottom: 10px;">
            <h1 class="title wow  "
               >Videos</h1>
        </div>
        <div class="row">

            @if($videoLists)
                @foreach($videoLists as $videoList)
                    <div class="col-sm-4 col-xs-12">
                        <figure class="wow fadeInLeft animated portfolio-item animated">
                            <div class="img-wrapper">
                                <img src="{{$videoList->snippet->thumbnails->high->url}}" class="img-responsive"
                                     alt="{{$videoList->snippet->title}}" width="100%">
                                <div class="overlay">
                                    <div class="buttons">
                                        <a  target="_blank" data-youtube-id="{{$videoList->id->videoId}}"
                                            class="video-banner js-trigger-video-modal"
                                            href="http://www.youtube.com/watch?v={{$videoList->id->videoId}}">Play
                                            Video</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a    data-youtube-id="{{$videoList->id->videoId}}"
                                          class="video-banner js-trigger-video-modal"  target="_blank"
                                          href="http://www.youtube.com/watch?v={{$videoList->id->videoId}}"> {{$videoList->snippet->title}}</a>
                                </h4>
                            </figcaption>
                        </figure>
                    </div>

                @endforeach
            @endif
        </div>
    </div>
</section>
<section  class="works">
    <div class="container">
        <br>
        <div class="section-heading" style="margin-top: 92px; margin-bottom: 10px;">
            <h1 class="title wow  "> Video Playlist</h1>
        </div>
        <div class="row">


            @if($playlists)
                @foreach($playlists['results'] as $play)
                    <div class="col-sm-4 col-xs-12">
                        <figure class="wow  portfolio-item " >
                            <div class="img-wrapper">
                                <img src="{{$play->snippet->thumbnails->high->url}}" class="img-responsive" alt="{{$play->snippet->title}}" width="100%">
                                <div class="overlay">
                                    <div class="buttons">
                                        <a href="{{url('/')}}/youtube-playlist/{{$play->id}}">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="{{url('/')}}/youtube-playlist/{{$play->id}}">{{$play->snippet->title}}</a>
                                </h4>
                            </figcaption>
                        </figure>
                    </div>

                @endforeach
            @endif



        </div>
    </div>
</section>
