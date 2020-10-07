@extends('layouts.master')
@section('pageTitle')
    All Categoreis  List
@endsection
@section('mainContent')
    <div class="box-body">
        <form id="containerForm" class="form app-lb-ajax-form bv-form" data-multipart="true"
              enctype="multipart/form-data" action="{{url('/')}}/admin/post/store" method="post"
              novalidate="novalidate">
            @csrf
            <div class="row">
                <div class="clearfix form-horizontal">
                    <div class="row" style="
    margin-left: -2px;
    margin-right: -4px;">


                        <div class="col-md-8 col-sm-12">

                            <div class="box box-primary" style="border: 2px solid #ddd;">
                                <div class="box-header" style="background-color: #bdbdbf;">

                                    <h3 class="box-title">Basic Post Information<span class="required"></span></h3>
                                </div>
                                <div class="box-body">

                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="pro_name">Post Name</label>
                                        <div class="col-md-9">
                                            <input required autocomplete="off" type="text" maxlength="150" value=""
                                                   class="form-control" id="post_title" name="post_title"
                                                   placeholder="Name">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="pro_name">Post Parmalink</label>
                                        <div class="col-md-9">
                                            <input type="text" maxlength="150" value="" class="form-control"
                                                   id="post_name"
                                                   name="post_name" placeholder="Name">
                                            <p style="color:red" id="post_name_error"></p>

                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-md-3" for="pro_name">Post Description</label>
                                        <div class="col-md-9">
                                      <textarea class="form-control ckeditor" rows="10" name="post_description"
                                                id="post_description"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="status">Published</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="post_status" name="post_status">

                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="status">Picture</label>
                                        <div class="col-md-9">
                                            <input type="file" name="post_picture" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group pull-right" style="margin-right: 5px">
                                        <input type="submit" class="btn btn-success" id="save_program_data">


                                    </div>

                                </div>
                            </div>

                        </div>


                        <div class="col-md-4 col-sm-12">
                            <div class="box box-primary" style="border: 2px solid #ddd;">
                                <div class="box-header" style="background-color: #bdbdbf;">

                                    <h3 class="box-title">Categories<span class="required"></span></h3>
                                </div>
                                <div class="box-body">
                                    <div class="form-group" style="padding-left:10px ">
                                        <?php

                                        if (isset($categories)) {
                                        foreach ($categories as $category) {





                                        ?>
                                        <input type="checkbox" name="category_id[]"
                                               value="<?php echo $category->category_id;?>">
                                        <span><?php echo $category->category_title;?></span>
                                        <br>


                                        <?php
                                        }



                                        }


                                        ?>
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




