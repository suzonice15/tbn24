
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

                <div class="col-md-3 col-12 col-lg-3">

                </div>

                <div class="col-md-6 col-12 col-lg-6 col-xl-12">
                    <div class="card">
                        <div class="card-header">Application Form </div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="{{url('/')}}/customer/form1" method="post">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Applicant's Name:</label>
                                    <div class="col-md-6">
                                        <input  required name="name" type="text" value="{{Session::get('name')}}"  placeholder="Your Answer" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Father's Name:</label>
                                    <div class="col-md-6">
                                        <input    name="father_name" type="text" value=""   placeholder="Your Answer" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Mother's Name:</label>
                                    <div class="col-md-6">
                                        <input    name="mother_name" type="text" value=""  placeholder="Your Answer" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Date of Birth:</label>
                                    <div class="col-md-6">
                                        <input  required name="date_of_birth" type="date" value=""  placeholder="Your Answer" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Gender</label>
                                    <div class="col-md-6">
                                        <input  required name="gender" type="radio" value="male" > <label>Male</label>
                                        <input  required name="gender" type="radio" value="female" > <label>Female</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Marital Status</label>
                                    <div class="col-md-8">
                                        <input  required name="maritus_status" type="radio" value="Single" > <label>Single</label>
                                        <input  required name="maritus_status" type="radio" value="Married" > <label>Married</label>
                                        <input  required name="maritus_status" type="radio" value="Divorced" > <label>Divorced</label>
                                        <input  required name="maritus_status" type="radio" value="Separated" > <label>Separated</label>

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Nationality :</label>
                                    <div class="col-md-6">
                                        <input  required name="nationality" type="text" value=""  placeholder="Your Answer" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Religion  :</label>
                                    <div class="col-md-6">
                                        <input  required name="region" type="text" value=""  placeholder="Your Answer" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Blood Group  :</label>
                                    <div class="col-md-6">
                                        <input   name="blood" type="text" value=""  placeholder="Your Answer" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Present Address   :</label>
                                    <div class="col-md-6">
                                        <textarea  required name="present_address"   placeholder="Your Answer" class="form-control" ></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Permanent Address    :</label>
                                    <div class="col-md-6">
                                        <textarea  required  name="parmanent_address"   placeholder="Your Answer" class="form-control" ></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right"> National ID  :</label>
                                    <div class="col-md-6">
                                        <input   name="national_id" type="text" value="{{Session::get('national_id')}}"   placeholder="Your Answer" class="form-control" >

                                     </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right"> Email  :</label>
                                    <div class="col-md-6">
                                        <input   name="email" type="email" value="{{Session::get('email')}}"  placeholder="Your Answer" class="form-control" >

                                     </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right"></label>
                                    <div class="col-md-6">
                                        <button type="submit" style="float:right;margin-right:55px" class="btn btn-success">Next</button>

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

