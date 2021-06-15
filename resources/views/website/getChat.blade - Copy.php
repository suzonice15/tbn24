
<?php

if($chates) {

    foreach ($chates as $chat) {
?>

<?php if($from_user==$chat->from) { ?>
<li class="right clearfix scroll_chat"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
    <div class="chat-body clearfix">
        <div class="header">
            <small class=" text-muted"> <i class="icon-time"></i>13 mins ago</small>
            <strong class="pull-right primary-font">{{$chat->name}}</strong>
        </div>
        <p>
            {{$chat->message}}
        </p>
    </div>
</li>
<?php } else { ?>
<li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
    <div class="chat-body clearfix">
        <div class="header">
            <strong class="primary-font">{{$chat->to}}</strong> <small class="pull-right text-muted">
                <i class="icon-time"></i>12 mins ago</small>
        </div>
        <p>
            {{$chat->message}}
        </p>
    </div>
</li>
<?php } ?>
<?php } }?>