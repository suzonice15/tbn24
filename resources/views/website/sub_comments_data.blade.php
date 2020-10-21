
<?php
if($comments){
foreach ($comments as $comment){

?>

<div class="col-md-12" style="margin-left: 50px">
    <h4 style="font-weight: bold">{{$comment->name}}</h4>
    <p>{{$comment->comments}} </p>
</div>

<?php }}?>