<?php
	require_once('detect-mobile.php');
	$mobile = mobile_device_detect("http://m.bdw3.com", "http://m.bdw3.com", "http://m.bdw3.com", "http://m.bdw3.com", "http://m.bdw3.com", "http://m.bdw3.com", "http://m.bdw3.com", "http://m.bdw3.com");
	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Class 3 Demo</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<noscript>Sorry, your browser does not support JavaScript!</noscript>

<nav>
    	
    	<ul role="menu">

    		<li role="menuitem" class="charlotte left">
    			
    			<a href="#charlotte" >
					<div class="hover"></div>
				</a>
			</li>
    		<li role="menuitem" class="fouhy left">
    			<a href="#fouhy" >

					<div class="hover"></div>
				</a>
			</li>
			<li role="menuitem" class="laura left">
    			<a href="#laura" >

					<div class="hover"></div>
				</a>
			</li>
			<li role="menuitem" class="pedro left">
    			<a href="#pedro" >

					<div class="hover"></div>
				</a>
			</li>
			<li role="menuitem" class="josh left">
    			<a href="#josh" >

					<div class="hover"></div>
				</a>
			</li>
			<li role="menuitem" class="max left">
    			<a href="#max" >

					<div class="hover"></div>
				</a>
			</li>
			<li role="menuitem" class="megan right">
    			<a href="#megan" >

					<div class="hover"></div>
				</a>
			</li>
			<li role="menuitem" class="patrick right">
    			<a href="#patrick" >

					<div class="hover"></div>
				</a>
			</li>
			<li role="menuitem" class="jon right">
    			<a href="#jon" >

					<div class="hover"></div>
				</a>
			</li>
			<li role="menuitem" class="lauren right">
    			<a href="#lauren" >

					<div class="hover"></div>
				</a>
			</li>
			<li role="menuitem" class="rj right">
    			<a href="#rj" >

					<div class="hover"></div>
				</a>
			</li>
			<li role="menuitem" class="mike right">
    			<a href="#mike" >

					<div class="hover"></div>
				</a>
			</li>
    	</ul>
</nav> <!--#header-->

<section>
    <div id="logo">
            <a href="http://bdw.colorado.edu" title="Boulder Digital Works">&nbsp;</a>
    </div>
    <article>
        <p>C3 is the third installment of the Boulder Digital Works experience. We're a collection of multi-talented individuals from many different backgrounds who've come together to lead in digital innovation. We're hybrids that fuse creativity, technical virtuosity, and an entrepreneurial mindset to solve problems. Collaboration is our specialty, and we take pride in our multi-layered approach to creative problem solving.</p>
    </article>
    <a id="facebook" href="#twitterURL"><img src="images/facebook.png" alt="Facebook" /></a>
    <a id="twitter" href="#facebookURL"><img src="images/twitter.png" alt="Twitter" /></a>
</section>

<!-- BEGIN INSERTED CONTENT -->
<div id="loader">Loading...</div>
<!-- END INSERTED CONTENT -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
<!--[if lt IE 9]>
    <script src="scripts/excanvas.compiled.js"></script>
<![endif]-->


<script type="text/javascript" src="scripts/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="scripts/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="scripts/jquery.inview.js"></script>
<script type="text/javascript" src="scripts/app.js"></script>
<script type="text/javascript">
$(window).load(function(){
	$('nav').localScroll();
	
	$.get("content.html", function (data) {
		$("#loader").replaceWith(data);
		
		var mikeVideo = document.getElementById("mikeVideo");
		
		$(mikeVideo).bind("timeupdate", function (event) {
                    
                        var tracking = Math.floor(event.originalEvent.currentTarget.currentTime);
		
			//console.debug(Math.floor(event.originalEvent.currentTarget.currentTime));
			
			if(tracking == 1) {
				mike();
			}
			
			if(tracking == 9) {
				mike("#000");
			}
			
			if(tracking == 33) {
				mike("#fff");
			}
		});
	});
	
	
});
</script>
</body>
</html>
