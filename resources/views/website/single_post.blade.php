@extends('website.master')
@section('mainContent')


    <section id="works" class="works">
        <div class="container">

            <div class="section-heading" style="margin-top: 92px; margin-bottom: 10px;">

            </div>

            <div class="row">

                <div class="col-md-8">
                    <h3>{{$post->post_title}}</h3>
                    <ul class=" color-lite-black">
                        <li style="display: inline-block">
                            <i class="icon-compass"></i>
                            &nbsp;
                           {{date('M d Y',strtotime($post->post_created_date))}}</li>
                        <li style="display: inline-block" >
                            <i class="icon-user"></i> &nbsp;
                            {{$post->post_man}}</li>
                        <i class="icon-eye"></i>Post View : &nbsp;
                        {{$post->post_view}}</li>


                    </ul>

                    <img   style="width: 100%;height: 400px" src="{{url('/')}}/public/uploads/post/{{$post->post_picture}}"  alt="{{$post->post_title}}">


                    <br>
                    <br>
<?php echo $post->post_description ;


                    ?>
                    <form id="myForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"   placeholder="Enter Your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputAddress">Comments</label>
                            <textarea  class="form-control" id="comments" placeholder="Enter Your Comments"></textarea>
                        </div>


                        <div class="form-group col-md-12">
                        <button type="button" onclick="Comment_submit({{$post->post_id}})" class="btn btn-primary pull-right">Submit</button>
                           <span id="success"></span>
                            </div>
                    </form>
                    <!--  comment show -->
                   <span id="comment_show"></span>






                </div>

                <div class="col-md-4 sidebar">

                    <span class="ajax-category-call"></span>


                </div>

            </div>
        </div>
    </section>
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
    <input type="hidden" name="post_id_id" id="post_id_id" value="{{$post->post_id}}">
    <script defer >
        $.get("{{url('/')}}/ajax-post-category-call", function(data, status){
            $('.ajax-category-call').html(data);
        });
        function allComment() {

           var post_id= $('#post_id_id').val();
            $.ajax({
                url: "{{url('/')}}/get/comments",
                method: "post",
                data: {post_id: post_id, "_token": $('#token').val()},
                success: function (data) {
                   $('#comment_show').html(data);
                }
            });
        }
        function getCommentByCommentId(comment_id) {


            $.ajax({
                url: "{{url('/')}}/get/sub_comments_data",
                method: "post",
                data: {comment_id: comment_id, "_token": $('#token').val()},
                success: function (data) {
                    $('#sub_comment_'+comment_id).empty();
                    $('#sub_comment_'+comment_id).html(data);
                }
            });
        }
        allComment();


        function subComment(id,post_id) {
          //  alert("post_id"+post_id+"commentid"+id)
            $('#submyForm_'+id).show();
        }

        function subCommentSubmit(id,post_id) {
         //commment id   id
                    //post id post_id


            var text=$('#comments_'+id).val();
            var email=$('#email_'+id).val();
            var name=$('#name_'+id).val();

            if(IsEmail(email)==false){
                alert("Enter Valid Email");
            }
            if(name.length <5){
                alert("Enter Atleast 4 Character in your name ");
            }

            if(text ==''){
                alert('Please Enter Comment text');
            } else {
                $.ajax({
                    url: "{{url('/')}}/submit/sub_comments",
                    method: "post",
                    data: {post_id: post_id,comment_id:id, text: text,name:name,email:email, "_token": $('#token').val()},
                    success: function (data) {
                        if(data =='ok' ){
                            document.getElementById("submyForm_"+id).reset();

                           alert("Thank You For Your Comment");
                            getCommentByCommentId(id)

                           // allComment();
                        } else {

                            alert("Thank You For Your Comment");
                        }
                    }
                });
            }

        }
        function Comment_submit(id) {

            var text=$('#comments').val();
            var email=$('#email').val();
            var name=$('#name').val();
            if(IsEmail(email)==false){
               alert("Enter Valid Email");
            }
            if(name.length <5){
                alert("Enter Atleast 4 Character in your name ");
            }

            if(text ==''){
                alert('Please Enter Comment text');
            } else {
                $.ajax({
                    url: "{{url('/')}}/submit/comments",
                    method: "post",
                    data: {post_id: id, text: text,name:name,email:email, "_token": $('#token').val()},
                    success: function (data) {
                        if(data =='ok' ){
                            document.getElementById("myForm").reset();

                            $("#success").html('<strong style="color:green">Thank You For Your Comment</strong>');
                            $('#comment_show').empty();

                            allComment();
                        } else {
                            document.getElementById("myForm").reset();

                            $("#success").html('<strong style="color:green">Thank You For Your  Comment</strong>');

                        }
                    }
                });
            }
        }

        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            } else {
                return true;
            }
        }
    </script>

@endsection
