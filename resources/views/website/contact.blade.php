@extends('website.master')
@section('mainContent')

    <section id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="block">
                        <h2 class="subtitle " >Contact With Us</h2>
                        <div class="contact-form">

                                @if(Session::has('success'))
                                    <div class="callout callout-success">


                                        <h4 style="color:green">
                                            {{ Session::get('success')}}

                                        </h4>
                                    </div>
                                @elseif(Session::has('error'))
                                    <div class="callout callout-danger">


                                        <h4 style="color:red">
                                            {{ Session::get('error')}}

                                        </h4>
                                    </div>
                                @else

                                @endif

                                <form id="contact-form" method="post" action="{{url('/')}}/contact" role="form">
@csrf
                                <div class="form-group " data-wow-duration="500ms" data-wow-delay=".6s">
                                    <input type="text" placeholder="Your Name" class="form-control" required="required"
                                           name="name" id="name">
                                </div>

                                <div class="form-group " data-wow-duration="500ms" data-wow-delay=".8s">
                                    <input type="email" placeholder="Your Email" class="form-control" name="email"
                                           id="email">
                                </div>

                                <div class="form-group " data-wow-duration="500ms" data-wow-delay="1s">
                                    <input type="text" placeholder="Subject" required="required" class="form-control"
                                           name="subject" id="subject">
                                </div>

                                <div class="form-group " data-wow-duration="500ms" data-wow-delay="1.2s">
                                    <textarea rows="6" placeholder="Message" required="required" class="form-control"
                                              name="message" id="message"></textarea>
                                </div>
                                <div class="row form-horizonal">
                                    <div class="form-group " data-wow-duration="500ms" data-wow-delay="1.2s">

                                        <div class="col-md-3">

                                           <div style="background: green;padding: 8px;color: white;font-style: italic;/*! font-variant-numeric: diagonal-fractions; */font-size: 17px;"> {{$number1}}+{{$number2}}=</div>

                                        </div>
                                        <div class="col-md-9">
                                            <input type="hidden" name="pure_capta" value="{{$sum}}">

                                            <input type="text" required="required" placeholder="Enter Capcha"
                                                   class="form-control" value=" " name="captcha" id="captcha">
                                        </div>


                                    </div>
                                </div>

                                <div id="submit" class="" data-wow-duration="500ms" data-wow-delay="1.4s">
                                    <input type="submit" id="contact-submit" class="btn btn-default btn-send"
                                           value="Send Message">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map-area">
                        <h2 class="subtitle">Find Us</h2>
                        <div class="map">
                            <iframe src="{{$google_map->google_map}}"
                                    style="border:0" allowfullscreen="" width="100%" height="400"
                                    frameborder="0"></iframe>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row address-details">

                <div class="col-md-4">
                    <div style="min-height: 200px; visibility: hidden; animation-duration: 500ms; animation-delay: 0.5s; animation-name: none;"
                         class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                        <i class="icon-location-arrow"></i>

                        <h5>{{$google_map->contact_address}}</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="min-height: 200px; visibility: hidden; animation-duration: 500ms; animation-delay: 0.7s; animation-name: none;"
                         class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">

                        <i class="icon-envelope"></i>

                        <p>{{$google_map->contact_email}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="min-height: 200px; visibility: hidden; animation-duration: 500ms; animation-delay: 0.9s; animation-name: none;"
                         class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                        <i class="icon-phone"></i>

                        <p>{{$google_map->contact_phone}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
