
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
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="{{url('/')}}/customer/login" method="post">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <?php

                                                                if(isset($error)){
                                ?>
                                <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label text-md-right"></label>

                                    <div class="col-md-9">
                                       <p style="font-size:15px;color:red"> Your Email Or Password Invalid Try Again</p>
                                    </div>
                                </div>
                                <?php } ?>

                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-info" href="{{url('/')}}/customer/form">Registration</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </main>

    <script>

        function validform() {

            var a = document.forms["my-form"]["full-name"].value;
            var b = document.forms["my-form"]["email-address"].value;
            var c = document.forms["my-form"]["username"].value;
            var d = document.forms["my-form"]["permanent-address"].value;
            var e = document.forms["my-form"]["nid-number"].value;

            if (a == null || a == "") {
                alert("Please Enter Your Full Name");
                return false;
            } else if (b == null || b == "") {
                alert("Please Enter Your Email Address");
                return false;
            } else if (c == null || c == "") {
                alert("Please Enter Your Username");
                return false;
            } else if (d == null || d == "") {
                alert("Please Enter Your Permanent Address");
                return false;
            } else if (e == null || e == "") {
                alert("Please Enter Your NID Number");
                return false;
            }
        }
    </script>
@endsection

