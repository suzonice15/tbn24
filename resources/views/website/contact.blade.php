@extends('website.master')
@section('mainContent')

    <section id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="block">

                        <div class="contact-form">
                            <h2 class="subtitle" >Contact With Us</h2>
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

                                <div id="submit" class="" data-wow-duration="500ms" data-wow-delay="1.4s">
                                    <input type="submit" id="contact-submit" class="btn btn-default btn-send"
                                           value="Send Message">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-top:20px">

                    <h2 class="subtitle" >Contact info
                    </h2>
                    <table class="table table-bordered" style="color: #333;">
                        <tbody>
                        <tr>
                            <td style="text-align: left;">
                                <p style="text-align: left;">
                                    <strong>Address<br> </strong>
                                    <i class="icon-home"></i>
                                    <?php echo $google_map->contact_address ?>
                                    </span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left;"><strong>Email<br> </strong>
                                <i class="icon-envelope"></i>  <a href="mailto:{{$google_map->contact_email}}" target="_blank">{{$google_map->contact_email}}</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">
                                <p style="text-align: left;"><strong>Hotline <br> </strong>
                                    <i class="icon-phone"></i>
                                    {{$google_map->contact_phone}}


                                </p>
                            </td>
                        </tr>


                        <tr>

                        </tr>

                        </tbody>
                    </table>


                </div>




                </div>

            <div class="row address-details">


                <div class="col-md-12 col-xs-12">
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
        </div>
    </section>



@endsection
