@extends('website.master')
@section('mainContent')

    <style>
        .memberTitle {
            font-family: eina_semibold, sans-serif;
            font-size: 24px;
            line-height: 32px;
            text-align: center;
            font-weight: bold;
            margin-top: -31px;
            color: white;
        }

        .memberSubTitle {
            font-family: eina_semibold, sans-serif;
            font-size: 16px;
            line-height: 18px;
            text-align: center;
            margin-top: -12px;
            color: white;

        }

        .title-class:hover {
            border-bottom: 3px solid white;

        }

    </style>


    <section id="works" class="works" style="background-color: white;margin-top: 92px">
        <div class="container-fluid">
            <img  style="margin-left: -12px" src="https://1bnznaaikg11oqsn3tvx88r9-wpengine.netdna-ssl.com/wp-content/uploads/2018/03/Robert-Chilver_banner.jpg" />
        </div>
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-8">
                    <div class="col-md-7">
                        <img style="
    margin-top: -200px;
    margin-left: 64px;
"  width="80%"  src="https://1bnznaaikg11oqsn3tvx88r9-wpengine.netdna-ssl.com/wp-content/uploads/2019/09/Brandon_Blackwell-1024x683.jpg">

                    </div>
                    <div class="col-md-5">
<h2 style="margin-top:-150px;color:white;font-size: 36px;font-weight: bold;">{{$member->member_name}}
</h2>
                        <h3 style="color:white;font-size: 20px;font-weight: bold;">{{$member->member_status}}
                        </h3>


                    </div>


                    <div class="col-md-11" style="margin-left:63px">
                    <h4 style="margin-top:70px"><b>{{$member->member_advise}}</b></h4>
                    <h3>{{$member->member_advise_name}}</h3>
                        <?php echo $member->member_description; ?>

                        </div>
                </div>
                <div class="col-md-4">

                    <img width="70%" src="https://1bnznaaikg11oqsn3tvx88r9-wpengine.netdna-ssl.com/wp-content/uploads/2019/09/Brandon_Blackwell-1024x683.jpg">

                </div>

            </div>

            </div>

    </section>


    <section id="works" class="works" style="background-color: #041C2C;padding-top: 36px;
">
        <div class="container">

            <div class="row">


                     <h2 style="color:white;margin-left: 15px;font-weight: bold;margin-bottom: 10px">Meet the Team
                     </h2>


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
             </div>
            <a style="margin:0 5px;color:red;font-size: 20px;font-weight: bold;margin-bottom: 15px" href="{{url('/')}}//meet-our-team" class="arrow">View All</a>
        </div>
    </section>











@endsection
