<?php
	require_once('detect-mobile.php');
	$mobile = mobile_device_detect("http://m.bdw3.com", "http://m.bdw3.com", "http://m.bdw3.com", "http://m.bdw3.com", "http://m.bdw3.com", "http://m.bdw3.com", "http://m.bdw3.com", "http://m.bdw3.com");
	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Class 3 || Boulder Digital Works</title>
<link rel="shortcut icon" href="favicon.ico"> 
<link rel="icon" type="image/ico" href="favicon.ico">
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24871825-1']);
  _gaq.push(['_setDomainName', '.bdw3.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<noscript>Sorry, your browser does not support JavaScript!</noscript>

<nav>
    
    <div id="home-nav" role="navigation" class="hidden"><a href="#home"></a></div>
    	
    <ul role="menu">

            <li role="menuitem" class="charlotte left " data-charusse="charusse">

                <a href="#charlotte" >
                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="fouhy left " data-fouhy="fouhy">
                <a href="#fouhy" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="laura left " data-laurahamrick="laurahamrick">
                <a href="#laura" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="pedro left " data-pedrosorren="pedrosorren">
                <a href="#pedro" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="josh left " data-kadisco="kadisco">
                <a href="#josh" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="max left " data-MxMnr="MxMnr">
                <a href="#max" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="megan right " data-megannewt="megannewt">
                <a href="#megan" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="patrick right " data-pkander="pkander">
                <a href="#patrick" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="jon right " data-JonisDelicious="JonisDelicious">
                <a href="#jon" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="lauren right" data-loparks="loparks">
                <a href="#lauren" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="rj right" data-rjduranjr="rjduranjr">
                <a href="#rj" >

                    <div class="hover"></div>
                </a>
            </li>
            <li role="menuitem" class="mike right" data-newshorts="newshorts">
                <a href="#mike" >

                    <div class="hover"></div>
                </a>
            </li>
    </ul>
</nav> <!--#header-->

<header id="home" class="hidden">
    <div id="logo">
            <a href="http://bdw.colorado.edu" title="Boulder Digital Works">&nbsp;</a>
    </div>
    <article>
        <p>C3 is the third installment of the Boulder Digital Works experience. We're a collection of multi-talented individuals from many different backgrounds who've come together to lead in digital innovation. We're hybrids that fuse creativity, technical virtuosity, and an entrepreneurial mindset to solve problems. Collaboration is our specialty, and we take pride in our multi-layered approach to creative problem solving.</p>
    </article>
    <a id="facebook" href="#twitterURL"><img src="https://s3.amazonaws.com/bdw3/facebook.png" alt="Facebook" /></a>
    <a id="twitter" href="#facebookURL"><img src="https://s3.amazonaws.com/bdw3/twitter.png" alt="Twitter" /></a>
</header>

<noscript>

<!--

    IF THE BROWSER DOESN'T ALLOW JAVASCRIPT, LET'S ATLEAST LOAD THE CONTENT FOR
    SEO AND OTHER PURPOSES.

-->

<?php include_once 'content.php'; ?>

</noscript>

<!-- BEGIN INSERTED CONTENT -->
<div id="loader"></div>
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
    
    $('nav li').slideDown('slow');
    
    $('header').delay(500).fadeIn('slow');
    
    $('#home-nav').delay(1000).fadeIn('slow');
    
    setTimeout(function () {

        $.get("content.php", function (data) {
               
                $("#loader").replaceWith(data);
                
                setTimeout(function() {
                    
                    $('section.hidden').fadeIn('slow');
                    
                    $('nav').localScroll();
                    
                }, 1000);

                var mikeVideo = document.getElementById("mikeVideo");

                $(mikeVideo).bind("timeupdate", function (event) {

                        var tracking = Math.floor(event.originalEvent.currentTarget.currentTime);

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

    }, 1500);
    
    setTimeout(function () {
                        
        $.getJSON("student-tweets/get_tweets.php", function(json) {
            if(json === undefined) {

                console.log("json undefined: " + json);
            }

            $(json).each(function(index, tweet) {
                if(tweet.content.text != undefined && tweet.content.user.screen_name != undefined) {
//                                    console.debug(tweet.content.user.screen_name + " " + tweet.content.text);
                    new Tweet(tweet.content.user.screen_name, tweet.content.text);
                } else {
                    console.dir(json);
                }
            });
        });

    }, 5000);
       
});
</script>
</body>
</html>
