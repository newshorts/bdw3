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
	
})(jQuery)