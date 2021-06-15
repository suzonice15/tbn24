
<div class="message-wrapper">

<?php

if($chats) {

    foreach ($chats as $key=>$chat) {
?>


@if($chat['from']==$chat['user_id'])
<li class="right clearfix scroll_chat">
    <div class="chat-body clearfix">
        <div class="header">
            <small class="text-dark"> <i  style="color:black;margin-right:5px" class="icon-time"></i>{{ date('d M y, h:i a', strtotime( $chat['created_at'])) }}</small>
         </div>
        <p>
            {{$chat['message']}}
        </p>
    </div>
</li>
@else
    <li class="left clearfix scroll_chat">
        <div class="chat-body clearfix">
            <div class="header">
                <small class="text-white"> <i style="color:white;margin-right:5px" class="icon-time"></i>{{ date('d M y, h:i a', strtotime( $chat['created_at'])) }}</small>
             </div>
            <p>
                {{$chat['message']}}
            </p>
        </div>
    </li>
    @endif
<?php } }?>

</div>
