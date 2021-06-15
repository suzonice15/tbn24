
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

                
                <div class="col-md-11 col-12 col-lg-11 col-xl-12">
                    <div class="card">
                        <div class="card-header">Qualification and References </div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="{{url('/')}}/customer/form2" method="post">
                                @csrf
                                <div class="form-group ">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Educational Qualifications</label>
                                    <div class="col-md-7">
                                        <input  required name="educational_qualification" type="radio" value="SSC" > <label>SSC</label>
                                        <input  required name="educational_qualification" type="radio" value="HSC" > <label>HSC</label>
                                        <input  required name="educational_qualification" type="radio" value="BA or B.Sc or B.Com" > <label>BA or B.Sc or B.Com</label>
                                        <input  required name="educational_qualification" type="radio" value="BA or B.Sc or B.Com" > <label>BA or B.Sc or B.Com</label>
                                        <input  required name="educational_qualification" type="radio" value="Other"> <label>Other</label>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Professional Experience (in years)</label>
                                    <div class="col-md-6">
                                        <input  required name="experience" type="radio" value="0-1" > <label>0-1</label>
                                        <input  required name="experience" type="radio" value="1-2" > <label>1-2</label>
                                        <input  required name="experience" type="radio" value="2-3" > <label>2-3</label>
                                        <input  required name="experience" type="radio" value="3-5" > <label>3-5</label>
                                        <input  required name="experience" type="radio" value="5-10" > <label>5-10</label>
                                        <input  required name="experience" type="radio" value="10+" > <label>10+</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">References (Name, Organization, Designation, Mobile, Email and Relations) # 1    :</label>
                                    <div class="col-md-6">
                                        <textarea  required  name="referene_1"   placeholder="Your Answer" class="form-control" ></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">References (Name, Organization, Designation, Mobile, Email and Relations) # 2    :</label>
                                    <div class="col-md-6">
                                        <textarea  required  name="referene_2"   placeholder="Your Answer" class="form-control" ></textarea>
                                    </div>
                                </div>


<a href="{{url('/')}}/apply-now" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-success">Next</button>


                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>



@endsection

