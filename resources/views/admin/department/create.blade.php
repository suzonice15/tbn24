@extends('layouts.master')
@section('pageTitle')
    All Categoreis  List
@endsection
@section('mainContent')
    <div class="box-body">
        <form id="containerForm" class="form app-lb-ajax-form bv-form" data-multipart="true"
              enctype="multipart/form-data" action="{{url('/')}}/admin/departments/store" method="post"
              novalidate="novalidate">
            @csrf
            <div   class="row">
                <div class="clearfix  form-horizontal">
                    <div  class="row" style="
    margin-left: -2px;
    margin-right: -4px;">


                        <div  style="justify-content: center" class="col-md-8 col-sm-12">

                            <div class="box box-primary" style="border: 2px solid #ddd;">
                                <div class="box-header" style="background-color: #bdbdbf;">

                                    <h3 class="box-title">Basic Department Information<span class="required"></span></h3>
                                </div>
                                <div class="box-body">

                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="pro_name">Department  Name</label>
                                        <div class="col-md-9">
                                            <input required autocomplete="off" type="text" maxlength="150" value=""
                                                   class="form-control" id="department_name" name="department_name"
                                                   placeholder="Department Name">

                                        </div>
                                    </div>






                                    <div class="form-group pull-right" style="margin-right: 5px">
                                        <input type="submit" value="save " class="btn btn-success" id="save_program_data">


                                    </div>

                                </div>
                            </div>

                        </div>




                    </div>

                </div>

            </div>

        </form>


    </div>



    <script>
        $(document).ready(function () {
            $("#post_title").on('input click', function () {
                var text = $("#post_title").val();
                var _token = $("input[name='_token']").val();

                var word = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                $("#post_name").val(word);
                $.ajax({
                    data: {url: word, _token: _token},
                    type: "POST",
                    url: "{{route('post.urlcheck')}}",
                    success: function (result) {

                        // $('#categoryError').html(result);
                        var str2 = "es";
                        var word = $("#post_name").val(word);
                        if (result) {
                            var text = $("#post_title").val();
                            var word = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                            var word = word.concat(str2);
                            $("#post_name").val(word);

                        } else {
                            var text = $("#post_title").val();
                            var word = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                            $("#post_name").val(word);
                        }
                    }
                });
            });


        });
    </script>


@endsection




