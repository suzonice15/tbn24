
<?php
if($comments){
    foreach ($comments as $comment){

?>
<hr style="border:1px solid #ddd"/>
<div class="col-md-12">
    <h4 style="font-weight: bold">{{$comment->name}}</h4>
    <p>{{$comment->comments}} </p>
    <p onclick="subComment({{$comment->comment_id}},{{$comment->post_id}})" style="margin-left: 50px;font-weight: bold">Replay</p>
    <form id="submyForm_{{$comment->comment_id}}" style="display: none">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name_{{$comment->comment_id}}" name="name"   placeholder="Enter Your Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Email</label>
                <input type="email" class="form-control" id="email_{{$comment->comment_id}}" name="email" placeholder="Email">
            </div>
        </div>

        <div class="form-group col-md-12">
            <label for="inputAddress">Comments</label>
            <textarea  class="form-control" id="comments_{{$comment->comment_id}}" placeholder="Enter Your Comments"></textarea>
        </div>


        <div class="form-group col-md-12">
            <button type="button"  onclick="subCommentSubmit({{$comment->comment_id}},{{$comment->post_id}})"  class="btn btn-primary pull-right">Submit</button>
            <span id="success"></span>
        </div>
    </form>
<span id="sub_comment_{{$comment->comment_id}}">
<?php
   $subComments= DB::table('sub_comments')->where('comment_id',$comment->comment_id)->where('status',1)->orderBy('sub_commets_id','desc')->get();

        if($subComments){
            foreach ($subComments as $subComment){

        ?>
    <div class="sub-comment-section" style="margin-left: 50px">
        <h4 style="font-weight: bold">{{$subComment->name}}</h4>
        <p>{{$subComment->comments}} </p>

    </div>

    <?php }  }?>

        </span>

</div>

<?php }}?>