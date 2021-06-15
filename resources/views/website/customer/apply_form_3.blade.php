
@extends('website.master')
@section('mainContent')
    <style>
        body{
            margin: 0;

            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
            margin-top:100px;
            display:flex;
            justify-content: center;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0,0,0,.125);
            border-radius: .25rem;
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }
        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0,0,0,.03);
            border-bottom: 1px solid rgba(0,0,0,.125);
        }
        .justify-content-center {
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
    </style>

    <main class="my-form">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-2 col-12 col-lg-2">

                </div>

                <div class="col-md-6 col-12 col-lg-6 col-xl-12">
                    <div class="card">
                        <div class="card-header">CV and Documents </div>
                        <div class="card-body">
                            <form name="my-form"  enctype="multipart/form-data" action="{{url('/')}}/customer/form3" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">CV or Resume </label>
                                    <div class="col-md-6">
                                        <input  required name="my_cv" type="file"  >

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right"> Image of Applicant</label>
                                    <div class="col-md-6">
                                        <input  required name="my_picture" type="file"  accept="image/*">

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">

                                    </label>
                                                                      <div class="col-md-6">
                                                                          <a href="{{url('/')}}/apply-now-1" class="btn btn-danger">Back</a>
                                        <button type="submit" class="btn btn-success">Next</button>

                                    </div>
                                </div>






                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>



@endsection

