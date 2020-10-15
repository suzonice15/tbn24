@extends('layouts.master')
@section('pageTitle')
    All Categoreis  List
@endsection
@section('mainContent')
    <div class="box-body">
        <form id="containerForm" class="form app-lb-ajax-form bv-form"
              enctype="multipart/form-data" action="{{url('/')}}/admin/document/store" method="post"
             >
            @csrf
            <div class="row">
                <div class="clearfix form-horizontal">
                    <div class="row" style="
    margin-left: -2px;
    margin-right: -4px;">


                        <div class="col-md-12 col-sm-12">

                            <div class="box box-primary" style="border: 2px solid #ddd;">
                                <div class="box-header" style="background-color: #bdbdbf;">

                                    <h3 class="box-title">Basic Document Information<span class="required"></span></h3>
                                </div>
                                <div class="box-body">

                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="pro_name">Document Name</label>
                                        <div class="col-md-9">
                                            <input required autocomplete="off" type="text" maxlength="150" value=""
                                                   class="form-control" id="document_title" name="document_title"
                                                   placeholder="Name">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="pro_name">Document Parmalink</label>
                                        <div class="col-md-9">
                                            <input type="text" maxlength="150" value="" class="form-control"
                                                   id="document_parmalink"
                                                   name="document_parmalink" placeholder="Name">
                                            <p style="color:red" id="post_name_error"></p>

                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-md-3" for="pro_name">Document Description</label>
                                        <div class="col-md-9">
                                      <textarea class="form-control ckeditor" rows="10" name="document_description"
                                                id="document_description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="pro_name">Document Download Link</label>
                                        <div class="col-md-9">
                                            <input required autocomplete="off" type="text" maxlength="150" value=""
                                                   class="form-control" id="document_download" name="document_download"
                                                   placeholder="Document Download Link">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="status">Published</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="document_status" name="document_status">

                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group pull-right" style="margin-right: 5px">
                                        <input type="submit" class="btn btn-success" id="save_program_data">


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
            $("#document_title").on('input click', function () {
                var text = $("#document_title").val();
                var _token = $("input[name='_token']").val();

                var word = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                $("#document_parmalink").val(word);
                $.ajax({
                    data: {url: word, _token: _token},
                    type: "POST",
                    url: "{{route('document.urlcheck')}}",
                    success: function (result) {

                        // $('#categoryError').html(result);
                        var str2 = "es";
                        var word = $("#document_parmalink").val(word);
                        if (result) {
                            var text = $("#document_title").val();
                            var word = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                            var word = word.concat(str2);
                            $("#document_parmalink").val(word);

                        } else {
                            var text = $("#document_title").val();
                            var word = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                            $("#document_parmalink").val(word);
                        }
                    }
                });
            });


        });
    </script>


@endsection




