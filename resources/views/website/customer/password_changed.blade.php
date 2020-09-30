@extends('website.customer.my_account_home')
@section('customerContent')

    <div class="row">
        <div class="col-sm-8">
            <div class="page-header"><h1>Password Changed</h1></div>
        </div>
    </div>
    <div class="innerbox editbox">
        <form method="post" action="{{url('/')}}/customer/password/changed" id="useredit" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-8">
                    <div class="box">
                        <div class="txtinfo">


                            <div class="form-group">

                                @if(Session::has('success'))

                                    <div class="alert alert-success">

                                        {{ Session::get('success') }}

                                        @php

                                        Session::forget('success');

                                        @endphp

                                    </div>

                                @endif

                            </div>

                            <div class="form-group">

                                @if(Session::has('error'))

                                    <div class="alert alert-danger">

                                        {{ Session::get('error') }}

                                        @php

                                        Session::forget('error');

                                        @endphp

                                    </div>

                                @endif

                            </div>
                            <div class="form-group">
                                <label for="user_name">Old Password</label>
                                <input
                                        type="password" name="password" id="password" class="form-control"
                                        value="">
                            </div>
                            <div class="form-group">
                                <label for="user_name">New Password</label>
                                <input
                                        type="password" name="new_password" id="new_password" class="form-control"
                                        value="">
                            </div>


                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </form>
    </div>

@endsection