@if($members)
    @foreach($members as $member)

        <div class="col-sm-3 col-xs-12" style="height:350px">
            <figure class="portfolio-item animated"  style="visibility: visible;">
                <div class="img-wrapper">
                    <a target="_blank" href="{{url('/')}}/member-details/{{$member->member_parmalink}}">
                        <img width="100%" src="{{url('/')}}/public/uploads/member/{{$member->member_picture}}" class="img-responsive" alt="{{$member->member_name}}">
                    </a>

                </div>


             </figure>

            <h3 class="memberTitle">
                <a style="color:white;"  href="{{url('/')}}/member-details/{{$member->member_parmalink}}"> {{$member->member_name}} </a>

            </h3>
            <h4 class="memberSubTitle ">
                <a style="color:white;" href="{{url('/')}}/member-details/{{$member->member_parmalink}}"> {{$member->member_status}} </a>

            </h4>
            
        </div>


    @endforeach
@endif