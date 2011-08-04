(function($) {
	Page = function (con, bip, mip, conLeft, midLeft) {
		var container = $(con),
		$window = $(window),
		midground = container.find(".midground"),
		containerInertia = 0.3,
		midgroundInertia = 0.6
		;
		
/* 		var init = (typeof(init) != 'undefined' ? init : false); */
		
		var newPos = function (x, adjuster, inertia){
			return x + "% " + (-(($window.height() + $window.scrollTop()) - adjuster) * inertia)  + "px";
		}
		
		container.bind('inview', function (event, visible) {
			var classActive = container.attr("id");
			var navItem = $("." + classActive);
			if (visible == true) {
				container.addClass("inview");
				navItem.addClass(classActive + "-active");
			} else {
				container.removeClass("inview");
				navItem.removeClass(classActive + "-active");
			}

		});

		$window.bind('scroll', function(){ //when the user is scrolling...
			if(container.hasClass("inview")){
				
				container.css({'backgroundPosition': newPos(conLeft, bip, containerInertia)});
				
				midground.css({'backgroundPosition': newPos(midLeft, mip, midgroundInertia)});
			}
		});
		
	};
        
        Tweet = function (username, text) {
            
            console.debug(username + " " + text);
            
//            var elems = $('nav li');
//            var counter = 0;
            
            var Action = {
                elems: $('nav li'),
                userName: "",
                text: "",
                className: "tweetRight",
                posLeft: 0,
                text: "",
                showGeneric: function() {
                    $('#bdwcu').text(Action.text + " - @" + Action.userName).slideDown().delay(2800).fadeOut(800);
                },
                showTweet: function() {
                    
                    $('nav').append('<div class="tweet '+Action.className+' hidden" style="left: '+Action.posLeft+'px;"><a href="#">'+Action.text+'</a></div>');
                    $('.tweet').slideDown(800).delay(2800).fadeOut(800, function () {
                        $(this).remove();
                    });
                },
                setPosLeft: function (pos) {
                    Action.posLeft = pos;
                },
                setText: function (txt) {
                    Action.text = txt;
                },
                setUserName: function (uname) {
                    Action.userName = uname;
                },
                setClassName: function (name) {
                    Action.className = name;
                },
                findPosition: function () {
                    Action.elems.each(function(index, val) {
                        
//                        var current = $(val);
                        
//                        console.dir(current);
                        
                        if($(val).data(Action.userName) != undefined) {
                            Action.setPosLeft(val.offsetLeft);
                            
                            if($(val).hasClass('left')) {
                                Action.setClassName('tweetLeft');
                                var newPos = Action.posLeft - 9;
                                Action.setPosLeft(newPos);
                            } else if ($(val).hasClass('right')) {
                                Action.setClassName('tweetRight');
                                var newPos = Action.posLeft - 171;
                                Action.setPosLeft(newPos);
                            } else {
                                console.debug("Unable to determine position: " + Action.posLeft);
                            }
                            
                        } else {
                            console.debug("Unable to determine if " + $(val).data(Action.userName) + " is equal to " + Action.userName);
                        }
                        
                        
                    });
                    
                    Action.showTweet();
                    
                },
                init: function (username, text) {
                    Action.setUserName(username);
                    Action.setText(text);
                    
//                    console.dir(Action);
                    if(username == "bdwcu") {
                        Action.showGeneric();
                    } else {
                        Action.findPosition();
                    }
                    console.dir(Action);
                }
            }; // end Action
            
            Action.init(username, text);

        }; // end Tweet
	
})(jQuery)