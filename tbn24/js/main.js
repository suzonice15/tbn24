function array_remove(ar,value) {
	try{
	while (ar.indexOf(value) !== -1) {
		ar.splice(ar.indexOf(value), 1);
	}		
	}catch(e){}
	return ar;
}

(function($){
    $.fn.scrollingTo = function( opts ) {
        var defaults = {
            animationTime : 1000,
            easing : '',
            callbackBeforeTransition : function(){},
            callbackAfterTransition : function(){}
        };

        var config = $.extend( {}, defaults, opts );

        $(this).click(function(e){
            var eventVal = e;
            e.preventDefault();

            var $section = $(document).find( $(this).data('section') );
            if ( $section.length < 1 ) {
                return false;
            };

            if ( $('html, body').is(':animated') ) {
                $('html, body').stop( true, true );
            };

            var scrollPos = $section.offset().top;

            if ( $(window).scrollTop() == scrollPos ) {
                return false;
            };

            config.callbackBeforeTransition(eventVal, $section);

            $('html, body').animate({
                'scrollTop' : (scrollPos+'px' )
            }, config.animationTime, config.easing, function(){
                config.callbackAfterTransition(eventVal, $section);
            });
        });
    };    
}(jQuery));



jQuery(document).ready(function(){
	"use strict";
	new WOW().init();


(function(){
	
	
  jQuery('.smooth-scroll').scrollingTo();
 
}());

});




$(document).ready(function(){	
	$(window).scroll(function () {
        if ($(window).scrollTop() > 50) {
            $(".navbar-brand a").css("color","#fff");
            $("#top-bar").removeClass("animated-header");
        } else {
            $(".navbar-brand a").css("color","inherit");
            $("#top-bar").addClass("animated-header");
        }
    });

    $("#clients-logo").owlCarousel({
 
        itemsCustom : false,
        pagination : false,
        items : 5,
        autoplay: true,

    })
    ResizePlayer();
    LoadChatData();
    setPollForm();
    setYoutubeLink();
    

});
function ResizePlayer(){
	try{
									      
		        $("#ifrm-player").show();
		var w= $("#ifrm-player").width();
		var h=w*0.56;	
		if(h==0){			
			return;
		}
		 if(!$("#ifrm-player").data("is-mobile")){
		$("#ifrm-player").height(h);
		if($(window).width()>967){
			$(".ifrm-player-list,.ifrm-player-list-menu").height(h-37);
		}else{
			$(".ifrm-player-list-menu").height($(".ifrm-player-list").height());
		}
		
		try{
			var currentOffset=$(".current-program:first").offset();
		$(".ifrm-player-list").niceScroll({cursorcolor:"#4D4D4D",cursorborder:"1px solid #000;"});
		//$(".ifrm-player-list").getNiceScroll(0).doScrollTop(currentOffset.top, 30);
		}catch(e){console.log(e);}		
		 var height=$("#ifrm-player").height()-5;
	     var width=$("#ifrm-player").width()-5;
	    
	     var flashobject='<object type="application/x-shockwave-flash" name="player" id="player" data="'+base_url+'player/GrindPlayer.swf" width="'+width+'" height="'+height+'">\
					<param name="allowFullScreen" value="true">\
					<param name="allowScriptAccess" value="always">\
					<param name="bgcolor" value="#000000">\
					<param name="wmode" value="opaque">\
					<param name="flashvars"\
					value="src='+app_live_url+'&amp;autoPlay=true&amp;scaleMode=letterbox&amp;plugin_hls=player/flashlsOSMF.swf&amp;hls_debug=false&amp;hls_debug2=false&amp;hls_minbufferlength=-1&amp;hls_lowbufferlength=2&amp;hls_maxbufferlength=60&amp;hls_startfromlowestlevel=false&amp;hls_seekfromlowestlevel=false&amp;hls_live_flushurlcache=false&amp;hls_seekmode=ACCURATE&amp;hls_capleveltostage=false&amp;hls_maxlevelcappingmode=downscale">\
				</object>';
	     
	     		$("#ifrm-player").html(flashobject);
	     }
		
	}catch(e){
		console.log(e);
	}
	
}

function LoadChatData(){
	if($("#messages-vr").length>0){
		setTimeout(loadChalMessages,5000);
	}
}
function load_poll(){
	
	$.getJSON( base_url+"chat-poll-data.php", function( data ) {
		try{
			//console.log("data length:"+data.data.length);
			console.log(data.data);
			if(data.chatdata.data.length>0){
				
			}else{
				
			}	
		
		}catch(e){}
		setTimeout(loadChalMessages,5000);
    });

}
function loadChalMessages(){
	
		$.getJSON( base_url+"chat-poll-data.php", function( data ) {
			try{
				//console.log("data length:"+data.data.length);
				//console.log(data.data);
			if(data.chatdata.data.length>0){
				$("#messages-vr .no-message").remove();
				$.each(data.chatdata.data ,function (key,value){
					if($("#messages-vr > #chatbox #chat-id-"+value.chat_id).length==0){
						var leftright=value.user_type=="A"?"right":"left";
						var msg='<li id="chat-id-'+value.chat_id+'" class="'+leftright+' clearfix p-0">\
                		 	<span class="chat-img pull-'+leftright+'">\
                        <img src="'+value.user_img+'" alt="" class="img-circle" />\
                    </span>\
                        <div class="chat-body clearfix">\
                            <div class="header  text-left">\
                                <strong class="primary-font ">'+value.user_name+'</strong> <small class="pull-right text-muted">\
                                    <span class="ion-ios-timer-outline"></span> '+value.entry_time_str+'</small>\
                            </div>\
                            <p>\
                            '+value.msg+'\
                            </p>\
                        </div>\
                    </li>';
							
						$("#messages-vr > #chatbox").append(msg);
						
					}
				});
			}else{
				if($("#messages-vr #chatbox > .no-message").length==0){
					$("#messages-vr #chatbox ").html('<li class="no-message">No Message</li>');
				}
			}
			
			var n=$("#messages-vr").height();
			$("#messages-vr").animate({ scrollTop: n }, 50);
			}catch(e){}
			
			ProcessPollData(data.polldata);
			
			
			setTimeout(loadChalMessages,5000);
	    });
	
}
function ProcessPollData(data){
	var currentRecords=[];	
	if(data.data.length==0){
		$("#poll-vr").html("<div id='poll-error'>No poll available</div>");
	}else{
		$("#poll-error").remove();
	}
	$.each(data.data,function(key,value){
		currentRecords.push(value.poll_id);		
    try{
    	var isNeedToAdd=$("#poll_"+value.poll_id).length==0;
    	
    if(isNeedToAdd){
			poll_ids.push(value.poll_id);
			var newpoll=$('<div id="poll_'+value.poll_id+'" class="poll-container">');
			newpoll.html(value.html);			
			$("#poll-vr").prepend(newpoll);
		}else{
			var oplength=$("#poll_"+value.poll_id+" form.poll-form").attr("data-total-option");
			console.log("#poll_"+value.poll_id+" form.poll-form");
    		console.log(oplength);
    		if(oplength && oplength!=value.total_options){
    			$("#poll_"+value.poll_id).html(value.html);
    		}
		}	
    }catch(e){}
	});
	for(var i in poll_ids){
		if(currentRecords.indexOf(poll_ids[i])===-1){
			$("#poll_"+poll_ids[i]).remove();
			poll_ids=array_remove(poll_ids[i]);
		}
	}	
}
function setPollForm(){
	try{
	$("body").on("submit",".poll-form",function(e){
		e.preventDefault();
		var thisobj=$(this);
		$.ajax({
			url : thisobj.attr("action"),              
	        data : thisobj.serialize(),                   
	        type : "POST", 
	        scriptCharset: "utf-8",
	        dataType :"html",
			beforeSend: function() {
				
		    },		   
		    success: function(rdata){	    	
		    	thisobj.closest('.poll-container').html(rdata);
		    },  
		    complete:function(jqXHR, textStatus){
		    	
		    }
		});	
		
		
	});
	}catch(e){}
}
function setYoutubeLink(){
	$('.ylink').each(function(){
		var thisObj=$(this);
		try{
		$(this).magnificPopup({			  
			  type: 'iframe',
			  iframe: {
				    	markup: '<div class="mfp-iframe-scaler">'+
			            		'<div class="mfp-close"></div>'+
			            		'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
			            		'</div>', 
			        patterns: {
			            youtube: {
				              index: 'youtube.com/', 
				              id: 'v=', 
				              src: '//www.youtube.com/embed/%id%?autoplay=1' 
					        }
					     },
					     srcAction: 'iframe_src', 
			     }
			});
		}catch(e){}
	});

}

// fancybox
$(".fancybox").fancybox({
    padding: 0,

    openEffect : 'elastic',
    openSpeed  : 450,

    closeEffect : 'elastic',
    closeSpeed  : 350,

    closeClick : true,
    helpers : {
        title : { 
            type: 'inside' 
        },
        overlay : {
            css : {
                'background' : 'rgba(0,0,0,0.8)'
            }
        }
    }
});






 




